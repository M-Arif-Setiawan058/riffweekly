<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile', [
        'title'  => 'Home',
        'Nama'   => 'Ariff',
        'Nim'    => 'ABC',
        'Prodi'  => 'Infor jaya',
        'Gambar' => 'ans.jpeg',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title'  => 'Profile',
        'Nama'   => 'Ariff',
        'Nim'    => 'ABC',
        'Prodi'  => 'Infor jaya',
        'Gambar' => 'ans.jpeg',
    ]);
});


Route::get('/berita', [BeritaController::class, 'tampilBerita']);
Route::get('/berita/{slug}', [BeritaController::class, 'getBerita']);
