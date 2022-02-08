<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganIndexController extends Controller
{
    public function index()
    {
        return view('utama');
    }
}
