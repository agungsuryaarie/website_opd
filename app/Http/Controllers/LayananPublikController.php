<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Berita;
use App\Models\Halaman;
use Illuminate\Http\Request;

class LayananPublikController extends Controller
{
    public function index($slug)
    {
        $layanan = Layanan::orderBy('id')->get();
        $lapub = Layanan::where('slug', $slug)->orderBy('id')->first();
        $recent_post = Berita::limit(4)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        return view('layanan', compact('layanan', 'lapub', 'recent_post', 'halaman'));
    }
}
