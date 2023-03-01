<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Semua Berita';
        $post = Berita::orderBy('id', 'desc')->latest()->paginate(9);
        // dd($post);
        return view('post', compact('post', 'title'));
    }

    public function show(Berita $post)
    {
        $title = $post->title;
        $recent_post = Berita::limit(8)->get();;
        return view('post_show', compact('title', 'post', 'recent_post'));
    }

    public function dinas()
    {
        $title = 'Kategori Dinas';
        $post_dinas = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Dinas')->latest()->paginate(12);
        // dd($post_dinas);
        return view('post_dinas', compact('post_dinas', 'title'));
    }

    public function pemerintahan()
    {
        $title = 'Kategori Pemerintahan';
        $post_pemerintahan = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Pemerintahan')->latest()->paginate(12);
        return view('post_pemerintahan', compact('post_pemerintahan', 'title'));
    }

    public function umum()
    {
        $title = 'Kategori Pemerintahan';
        $post_umum = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Umum')->latest()->paginate(12);
        return view('post_umum', compact('post_umum', 'title'));
    }
}
