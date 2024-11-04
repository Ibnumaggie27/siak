<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        return view('admin.nilai.index'); // Tampilkan view spp/index.blade.php
    }
}
