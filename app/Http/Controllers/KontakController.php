<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Halaman;
use App\Models\Layanan;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        return view('kontak', compact('setting', 'halaman', 'layanan'));
    }
}
