<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $galleries = Galeri::when($search, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('desc', 'like', '%' . $search . '%');
        })
        ->orderBy('created_at', 'desc')
        ->paginate(6);

        return view('galleries.index', compact('galleries', 'search'));
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image',
            'title' => 'required',
            'desc' => 'required',
        ]);

        $path = $request->file('file')->store('gallery', 'public');

        Galeri::create([
            'file' => $path,
            'title' => $request->title,
            'desc' => $request->desc,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Galeri ditambahkan!');
    }

    public function edit(Galeri $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Galeri $gallery)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('gallery', 'public');
            $gallery->file = $path;
        }

        $gallery->title = $request->title;
        $gallery->desc = $request->desc;
        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Galeri diperbarui!');
    }

    public function destroy(Galeri $gallery)
    {
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Galeri dihapus!');
    }
}
