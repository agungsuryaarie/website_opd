<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\BeritaController;



// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::get('/download', [DownloadController::class, 'index'])->name('download.index');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
