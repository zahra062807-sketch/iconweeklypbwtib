<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mahasiswacontroller extends Controller
{
    public static function index()
    {
        return view('datamahasiswa');
    }
}
