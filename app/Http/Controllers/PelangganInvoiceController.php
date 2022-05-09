<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganInvoiceController extends Controller
{
    public function invoice(Request $request) {
        return view('Pelanggan.Page.Invoice.invoice');
    }
}
