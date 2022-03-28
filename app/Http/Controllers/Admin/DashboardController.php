<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\kategori;
use App\Models\produk;
use Session;


class DashboardController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){
            $pelanggan = User::count();

            $kategori = Kategori::count();

            $produk = Produk::count();

            return view('Admin.Page.Dashboard.dashboard', compact('pelanggan', 'kategori', 'produk'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }
}
