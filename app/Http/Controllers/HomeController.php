<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $images = Galeri::latest()->get(); // bisa tambahkan ->take(9) kalau mau dibatasi
        return view('index', compact('images'));
    }

}
