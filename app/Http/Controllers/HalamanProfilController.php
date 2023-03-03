<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use Illuminate\Http\Request;

class HalamanProfilController extends Controller
{
    public function profil($slug)
    {
        $halaman = Halaman::orderBy('id')->get();
        $profil = Halaman::where('slug', $slug)->orderBy('id')->first();
        return view('halamanprofil', compact('halaman', 'profil'));
    }

    // public function profil(Halaman $halaman)
    // {
    //     $title = $halaman->title;
    //     // $recent_post = Berita::limit(4)->get();;
    //     return view('halamanprofil.show', compact('title', 'halaman'));
    // }
}
