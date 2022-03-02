<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login() {
        return view('Pelanggan.Auth.login');
    }

    public function proses_loginpelanggan(Request $request)
    {
        $kredensil =[
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        if (Auth::attempt($kredensil)) {
            $user = Auth::User();
            $request->session()->put('user', $user);
            return redirect(route('dashboard.index'));
        } 
        else{
            return redirect(route('login'))->with('success', 'Gagal Login Username dan Password Tidak Sesuai');
        }
    }

    public function logoutpelanggan(Request $request)
    {
        Auth::logout();
        return Redirect(route('login'));
    }
}
