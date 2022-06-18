<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::paginate(10);

        return view('Admin.Page.DataProduk.Produk', compact('produk'));
    }

    public function checkout()
    {
        return view('Pelanggan.Page.Produk.checkout');
    }

    public function cart()
    {
        return view('Pelanggan.Page.Produk.cart');
    }

    public function create_view()
    {
        $kategori = Kategori::all();

        return view('Admin.Page.DataProduk.Create', compact('kategori'));
    }

    public function create_process(Request $request)
    {
        $request->validate([
            'produk_nama'               => 'required',
            'produk_stok'               => 'required',
            'produk_kategori'           => 'required',
            'produk_harga'              => 'required',
            'produk_detail'             => 'required',
        ]);

        $request->validate([
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $produk = new Produk;

        
            if ($files = $request->file('foto')) {
                $destinationPath = 'fotoproduk/';
                $file = $request->file('foto');
                // upload path  
    
                $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                    $files->getClientOriginalExtension();
                $pathImg = $file->storeAs('', $profileImage);
                $files->move($destinationPath, $profileImage);
                $produk->foto_produk = $pathImg;
            }
            $produk->nama_produk         = $request->produk_nama;
            $produk->stok_produk         = $request->produk_stok;
            $produk->harga               = $request->produk_harga;
            $produk->id_kategori         = $request->produk_kategori;
            $produk->detail_produk       = $request->produk_detail;
            $produk->save();

        return redirect(route('produk.index'))->with(['success' => 'Tambah Produk Berhasil']);
    }

    public function view($id)
    {
        $kategori = Kategori::all();

        $produk = Produk::find($id);
        return view('Admin.Page.DataProduk.Show', compact('produk', 'kategori'));
    }

    public function update_view($id)
    {
        $kategori = Kategori::all();

        $produk = Produk::find($id);
        return view('Admin.Page.DataProduk.Update', compact('produk', 'kategori'));
    }

    public function update_process($id, Request $request)
    {
        $request->validate([
            'produk_nama'               => 'required',
            'produk_stok'               => 'required',
            'produk_harga'              => 'required',
            'produk_kategori'           => 'required',
            'produk_detail'             => 'required',
        ]);
        
        $produk = Produk::find($id);

        $produk->nama_produk         = $request->produk_nama;
        $produk->stok_produk         = $request->produk_stok;
        $produk->harga               = $request->produk_harga;
        $produk->id_kategori         = $request->produk_kategori;
        $produk->detail_produk       = $request->produk_detail;
        $produk->save();

        return redirect(route('produk.index'))->with(['success' => 'Ubah Produk Berhasil']);
    }

    public function delete($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return redirect(route('produk.index'))->with(['success' => 'Delete Produk Berhasil']);
    }
}
