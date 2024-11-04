<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class waliKelasController extends Controller
{
    public function index()
    {
        return view('admin.waliKelas.index'); // Tampilkan view spp/index.blade.php
    }
}
