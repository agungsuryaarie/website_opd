<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Halaman;
use App\Models\Layanan;
use App\Models\Setting;
use App\Models\Banner;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Semua Berita';
        $post = Berita::orderBy('id', 'desc')->latest()->paginate(9);
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('post', compact('post', 'title', 'halaman', 'layanan', 'setting'));
    }

    public function show(Berita $post)
    {
        $title = $post->title;
        $recent_post = Berita::limit(4)->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('post_show', compact('title', 'post', 'recent_post', 'halaman', 'layanan', 'setting', 'banner'));
    }

    public function dinas()
    {
        $title = 'Kategori Dinas';
        $post_dinas = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Dinas')->latest()->paginate(12);
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('post_dinas', compact('post_dinas', 'title', 'halaman', 'layanan', 'setting'));
    }

    public function pemerintahan()
    {
        $title = 'Kategori Pemerintahan';
        $post_pemerintahan = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Pemerintahan')->latest()->paginate(12);
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('post_pemerintahan', compact('post_pemerintahan', 'title', 'halaman', 'layanan', 'setting'));
    }

    public function umum()
    {
        $title = 'Kategori Umum';
        $post_umum = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Umum')->latest()->paginate(12);
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('post_umum', compact('post_umum', 'title', 'halaman', 'layanan', 'setting'));
    }
}
