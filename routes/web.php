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
    $data_berita = [
    [
        "id" => 1,
        "judul" => "MAHASISWA TI",
        "penulis" => "Admin",
        "konten" => "Teknologi Informasi (TI), atau dalam bahasa Inggris dikenal sebagai Information technology (IT) adalah istilah umum untuk teknologi apa pun yang membantu manusia dalam membuat, mengubah, menyimpan, mengomunikasikan dan/atau menyebarkan informasi. TI menyatukan komputasi dan komunikasi berkecepatan tinggi untuk data, suara, dan video. Contoh dari Teknologi Informasi bukan hanya berupa komputer pribadi, tetapi juga telepon, TV, peralatan rumah tangga elektronik, dan perangkat genggam modern/gawai (misalnya ponsel)."
    ],
    [
        "id" => 2,
        "judul" => "TI",
        "penulis" => "Soak",
        "konten" => "[1]Pengolahan, penyimpanan dan penyebaran vokal, informasi bergambar, teks dan numerik oleh mikroelektronika berbasis kombinasi komputasi dan telekomunikasi.[2] Istilah dalam pengertian modern pertama kali muncul dalam sebuah artikel 1958 yang diterbitkan dalam Harvard Business Review, di mana penulis Leavitt dan Whisler berkomentar bahwa teknologi baru belum memiliki nama tunggal yang didirikan. Kita akan menyebutnya teknologi informasi (TI).[3] Beberapa bidang modern yang muncul dari teknologi informasi adalah generasi berikutnya teknologi web, bioinformatika, komputasi awan, sistem informasi global, Skala besar basis pengetahuan dan lain-lain."
    ]
];
    return view('berita',[
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});


Route::get('/berita/{id}', function ($id) {

    $data_berita = [
        1 => [
            "id" => 1,
            "judul" => "MAHASISWA TI",
            "penulis" => "Admin",
            "konten" => "Teknologi Informasi (TI) adalah teknologi yang membantu manusia membuat, mengubah, menyimpan, dan menyebarkan informasi."
        ],

        2 => [
            "id" => 2,
            "judul" => "TI",
            "penulis" => "Soak",
            "konten" => "Teknologi Informasi mencakup pengolahan, penyimpanan, dan penyebaran informasi melalui komputasi dan telekomunikasi."
        ]
    ];

    if (!isset($data_berita[$id])) {
        abort(404);
    }

    return view('beritatunggal', [
        "title" => "Berita Tunggal",
        "berita" => $data_berita[$id]
    ]);
});


Route::get('/contact', function () {
    return view('contact',[
        "title" => "Contact"
    ]);
});