<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Foto;
use App\Models\Halaman;
use App\Models\Layanan;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $foto = Galeri::orderBy('id', 'desc')->latest()->paginate(9);
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        return view('foto', compact('foto', 'halaman', 'layanan'));
    }

    public function show($slug)
    {
        $img = Galeri::where('slug', $slug)->orderBy('id')->get();
        // $img = Foto::where('galeri_id', $id)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        return view('foto_show', compact('img', 'halaman', 'layanan'));
    }
}
