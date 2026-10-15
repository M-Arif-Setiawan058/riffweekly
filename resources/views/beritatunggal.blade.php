
@extends('layouts.main')

@section('content')
<div class="mt-5">
    <h2>{{ $berita['judul'] }}</h2>
    <h5>{{ $berita['penulis'] }}</h5>
    <p>{{ $berita['konten'] }}</p>

    <a href="/berita">Kembali ke daftar berita</a>
</div>
@endsection
