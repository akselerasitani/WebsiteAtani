<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OmzetPelangganController extends Controller
{
    public function index()
    {
        return view('Pelanggan.Page.Omzet Penjualan.omzet');
    }

}