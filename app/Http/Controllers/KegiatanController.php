<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $kegiatan = Kegiatan::when($search, function ($query, $search) {
            return $query->where('kegiatan', 'like', '%' . $search . '%')
                         ->orWhere('pengisi', 'like', '%' . $search . '%')
                         ->orWhere('hari', 'like', '%' . $search . '%');
        })->orderBy('tanggal', 'desc')->paginate(6);

        return view('kegiatan.index', compact('kegiatan', 'search'));
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'tanggal' => 'required|date',
    //         'hari'    => 'required|string',
    //         'waktu'   => 'required|string',
    //         'kegiatan'=> 'required|string',
    //         'pengisi' => 'required|string',
    //         'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     Kegiatan::create($request->all());

    //     return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'hari' => 'required|string',
            'waktu' => 'required|string',
            'kegiatan' => 'required|string',
            'pengisi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'tanggal' => $request->tanggal,
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'kegiatan' => $request->kegiatan,
            'pengisi' => $request->pengisi,
        ];

        // Handle image upload
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('gallery', 'public');
            $data['gambar'] = $path;
        }

        // Create the Kegiatan record
        Kegiatan::create($data);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit', compact('kegiatan'));
    }

    // public function update(Request $request, Kegiatan $kegiatan)
    // {
    //     $request->validate([
    //         'tanggal' => 'required|date',
    //         'hari'    => 'required|string',
    //         'waktu'   => 'required|string',
    //         'kegiatan'=> 'required|string',
    //         'pengisi' => 'required|string',
    //     ]);

    //     $kegiatan->update($request->all());

    //     return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui!');
    // }
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'hari' => 'required|string',
            'waktu' => 'required|string',
            'kegiatan' => 'required|string',
            'pengisi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'tanggal' => $request->tanggal,
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'kegiatan' => $request->kegiatan,
            'pengisi' => $request->pengisi,
        ];

        // Handle image upload
        if ($request->hasFile('gambar')) {
            // Delete old image if it exists
            if ($kegiatan->gambar && Storage::disk('public')->exists($kegiatan->gambar)) {
                Storage::disk('public')->delete($kegiatan->gambar);
            }
            // Store new image
            $path = $request->file('gambar')->store('gallery', 'public');
            $data['gambar'] = $path;
        }

        // Update the Kegiatan record
        $kegiatan->update($data);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
