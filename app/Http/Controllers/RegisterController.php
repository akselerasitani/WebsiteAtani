<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;


class RegisterController extends Controller
{
    public function register() {
        return view('Pelanggan.Auth.register');
    }

    public function registertoko() {
        return view('Pelanggan.Auth.daftartoko');
    }

    public function suksesregister() {
        return view('Pelanggan.Auth.suksesdaftar');
    }
}
