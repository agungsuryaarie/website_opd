<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use App\Models\Layanan;
use App\Models\Berita;
use Illuminate\Http\Request;

class HalamanProfilController extends Controller
{
    public function index($slug)
    {
        $halaman = Halaman::orderBy('id')->get();
        $profil = Halaman::where('slug', $slug)->orderBy('id')->first();
        $recent_post = Berita::limit(4)->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        return view('halamanprofil', compact('halaman', 'profil', 'recent_post', 'layanan'));
    }

    // public function profil(Halaman $halaman)
    // {
    //     $title = $halaman->title;
    //     // $recent_post = Berita::limit(4)->get();;
    //     return view('halamanprofil.show', compact('title', 'halaman'));
    // }
}
