
@extends("layouts.main")

@section("content")
    <div class="mt-5">
        @foreach ($beritas as $berita)
            <h1>
                <a href="{{ url('berita/' . $berita['id']) }}">
                    {{ $berita["judul"] }}
                </a>
            </h1>

            <h5>{{ $berita["penulis"] }}</h5>
            <p>{{ $berita["konten"] }}</p>
        @endforeach
    </div>
@endsection
