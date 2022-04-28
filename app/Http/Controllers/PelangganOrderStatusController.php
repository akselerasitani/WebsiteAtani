<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganOrderStatusController extends Controller
{
    public function index() {
        return view('Pelanggan.Page.OrderStatus.orderstatus');
    }

    public function orderstatusdetail(Request $request) {
        return view('Pelanggan.Page.OrderStatus.orderstatusdetail');
    }

    public function invoice(Request $request) {
        return view('Pelanggan.Page.OrderStatus.invoice');
    }
}
