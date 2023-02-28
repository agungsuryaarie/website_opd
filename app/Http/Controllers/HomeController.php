<?php

namespace App\Http\Controllers;

use App\Models\Slideshow;
use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slideshow = Slideshow::orderBy('id', 'desc')->limit(3)->get();
        $berita = Berita::orderBy('id', 'desc')->limit(3)->get();

        return view('home', compact(
            'slideshow',
            'berita'

        ));
    }
}
