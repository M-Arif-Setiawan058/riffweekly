<?php

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

Route::get('/berita', function () {
    return view('berita', [
        'title' => 'Berita',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});