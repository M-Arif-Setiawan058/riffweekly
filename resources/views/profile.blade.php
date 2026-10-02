@extends('layouts.main')

@section('content')
    <h2>Halaman {{ $title }}</h2>
    <p>Nama: {{ $Nama }}</p>
    <p>NIM: {{ $Nim }}</p>
    <p>Prodi: {{ $Prodi }}</p>
    <img src="{{ asset('images/' . $Gambar) }}" alt="Foto Profile" width="180">
@endsection