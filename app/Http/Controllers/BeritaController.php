<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampilBerita ()
    {
        $beritas = Berita::all();

        foreach($beritta as $berita)
        {
            if($berita['slug'] === $slug)
            {
                $beritatunggal = $berita;
            }
        }
         return view('detail-berita', [
        "title" => Berita::find(slug),
        "berita" => Berita::find(slug),

    ]);
    }
}
