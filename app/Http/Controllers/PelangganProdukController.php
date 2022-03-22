<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produk;
use App\Models\Kategori;

class PelangganProdukController extends Controller
{
    public function index() {

        $produk = Produk::with(['kategori'])->paginate(6);

        return view('Pelanggan.Page.Produk.produk', compact('produk'));
    }

    public function detail($id) {

        $produk = produk::find($id);

        return view('Pelanggan.Page.Produk.detail', compact('produk'));
    }

    
}
