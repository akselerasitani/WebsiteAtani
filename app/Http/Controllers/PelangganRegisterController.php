<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminLoginVerifyRequest;
use Session;

use App\Models\User;

class PelangganRegisterController extends Controller
{
    public function registerpelanggan(Request $request)
    {
        return view('Pelanggan.Auth.register');
    }

    public function proses_registerpelanggan(Request $request)
    {
        if($request -> pass == $request -> confpass)
        {
            User::create([
                'name'          => $request -> name,
                'password'      => Hash::make($request -> pass),
                'email'         => $request -> email,
                'alamat'        => $request -> alamat,
                'telepon'       => $request -> telepon,
                'toko'          => $request -> toko,
            ]);

            $user = Auth::user();
            $request->session()->put('user', $user);
            return redirect('/login')->with('success', 'Registrasi Berhasil');
        }
        else
        {
            return view('Pelanggan.Auth.register')->with(['success' => 'Invalid Password']);
        }
    }

    
}
