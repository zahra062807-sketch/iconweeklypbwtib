<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Icon",
        "nim" => "13242520070",
        "prodi" => "Teknologi Informasi",
    ]);
});

Route::get('/berita', function () {
    return view('berita',[
        "title" => "Berita"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "Contact"
    ]);
});