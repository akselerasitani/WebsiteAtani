<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganOmzetController extends Controller
{
    public function index()
    {
        return view('Pelanggan.Page.OmzetPenjualan.omzet');
    }

}