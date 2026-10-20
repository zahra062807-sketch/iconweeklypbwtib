
@extends("layouts.main")

@section("content")
    <div class="mt-5">
        <h1>{{ $berita["judul"] }}</h1>
        <h5>{{ $berita["penulis"] }}</h5>
        <p>{{ $berita["konten"] }}</p>

        <a href="{{ url('/berita') }}">Kembali ke daftar berita</a>
    </div>
@endsection
