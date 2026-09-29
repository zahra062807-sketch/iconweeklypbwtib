@extends('layouts.main')

@section('content')
    <h1>HALAMAN PROFILE</h1>
    <p>
        Nama : {{ $name }}<br>
        NIM   : {{ $nim }}<br>
        Prodi : {{ $prodi }} 
    </p>
    <script src="js/alert.js"></script>
@endsection