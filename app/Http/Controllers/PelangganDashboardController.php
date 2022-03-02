<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produk;

class PelangganDashboardController extends Controller
{
    public function index()
    {
        $produk = Produk::count();

        return view('Pelanggan.Page.Dashboard.dashboard', compact('produk'));
    }

}
