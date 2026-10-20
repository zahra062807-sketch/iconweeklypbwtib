<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampilBerita ()
    {
         return view('detail-berita', [

        "title" => Berita::find(slug),
        "berita" => Berita::find(slug),

    ]);
    }
}
