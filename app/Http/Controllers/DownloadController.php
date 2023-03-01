<?php

namespace App\Http\Controllers;

use App\Models\Filedownload;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $download = Filedownload::latest()->paginate(5);
        return view('download', compact('download'));
    }
}
