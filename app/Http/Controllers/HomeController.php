<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    //

   public function index()
    {
        // Fetch the latest gallery images
        $images = Galeri::latest()->get();

        // Fetch all Kegiatan records for other uses
        $jadwal = Kegiatan::orderBy('tanggal', 'asc')->get();

        // Fetch the most recent past Kegiatan with a gambar
        $previousKegiatan = Kegiatan::where('tanggal', '<', Carbon::today())
            ->whereNotNull('gambar')
            ->orderBy('tanggal', 'desc')
            ->first();

        // Fetch the nearest upcoming Kegiatan with a gambar (today or future)
        $upcomingKegiatan = Kegiatan::where('tanggal', '>=', Carbon::today())
            ->whereNotNull('gambar')
            ->orderBy('tanggal', 'asc')
            ->first();

        // Fetch the next upcoming Kegiatan with a gambar (skip the first upcoming)
        $nextKegiatan = Kegiatan::where('tanggal', '>', $upcomingKegiatan ? $upcomingKegiatan->tanggal : Carbon::today())
            ->whereNotNull('gambar')
            ->orderBy('tanggal', 'asc')
            ->first();

        return view('index', [
            'images' => $images,
            'jadwal' => $jadwal,
            'previousKegiatan' => $previousKegiatan,
            'upcomingKegiatan' => $upcomingKegiatan,
            'nextKegiatan' => $nextKegiatan
        ]);
    }


}
