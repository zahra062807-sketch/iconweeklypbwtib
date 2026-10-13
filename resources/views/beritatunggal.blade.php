@extends('layouts.main')

@section('content')
    <div class="text-center mt-5">
        <h1>{{ $berita['judul'] }}</h1>
        <h5>{{ $berita['penulis'] }}</h5>
    </div>

    <div class="text-justify mt-4">
        <p>{{ $berita['konten'] }}</p>
    </div>

    <a href="{{ url('/berita') }}">Kembali ke Berita</a>
@endsection