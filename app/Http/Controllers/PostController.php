<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Berita';
        $post = Berita::orderBy('id', 'desc')->latest()->paginate(12);
        return view('post', compact('post', 'title'));
    }

    public function show(Berita $post)
    {
        $title = $post->title;
        $other = Berita::limit(8)->get();
        return view('post_show', compact('title', 'post', 'other'));
    }
}
