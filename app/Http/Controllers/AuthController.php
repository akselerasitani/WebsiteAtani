<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        return view('Auth.login');
    }

    public function register(Request $request) {
        return view('Auth.register');
    }

    public function registertoko(Request $request) {
        return view('Auth.daftartoko');
    }

    public function suksesregister(Request $request) {
        return view('Auth.suksesdaftar');
    }
}
