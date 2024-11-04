<?php

// app/Http/Controllers/SPPController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SPPController extends Controller
{
    public function index()
    {
        return view('admin.spp.index'); // Tampilkan view spp/index.blade.php
    }
}

