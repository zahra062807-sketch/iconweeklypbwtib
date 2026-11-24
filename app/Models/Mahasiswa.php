<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public static function index()
    {
        $datas = Mahasiswa::all();

        return view('datamahasiswa', compact('datas'));
    }
}
