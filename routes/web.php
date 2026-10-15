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


$data_berita = [
    [
        "judul" => "Mahasiswa TI",
        "slug" => "mahasiswa-ti",
        "penulis" => "Admin",
        "konten" => "Berita tentang mahasiswa TI."
    ],
    [
        "judul" => "Dosen",
        "slug" => "dosen",
        "penulis" => "Firman",
        "konten" => "Berita tentang dosen."
    ]
];

// Route 1: Daftar berita
Route::get('/berita', function () use ($data_berita) {
    return view('berita', [
        "title" => "Halaman Daftar Berita",
        "data_berita" => $data_berita
    ]);
});

// Route 2: Detail berita
Route::get('/berita/{slug}', function ($slug) use ($data_berita) {
    $berita = [];

    foreach ($data_berita as $b) {
        if ($b["slug"] === $slug) {
            $berita = $b;
            break;
        }
    }

    if (empty($berita)) {
        abort(404);
    }

return view('beritatunggal', [
    'title' => 'Halaman Berita Tunggal',
    'berita' => $berita
]);
});
