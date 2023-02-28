<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {

        return view('kontak');
    }
}
