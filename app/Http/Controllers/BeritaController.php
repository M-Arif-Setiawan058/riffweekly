<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function tampilBerita()
    {
        $beritas = Berita::all();

        return view('berita', [
            "title" => "Halaman Daftar Berita",
            "data_berita" => $beritas,
            "beritas" => $beritas,
        ]);
    }

    public function getBerita($slug)
    {
        $berita = Berita::where('slug', $slug)->first();

        if (!$berita) {
            abort(404);
        }

        return view('beritatunggal', [
            "title" => $berita['judul'] ?? 'Halaman Berita Tunggal',
            "berita" => $berita,
        ]);
    }
}