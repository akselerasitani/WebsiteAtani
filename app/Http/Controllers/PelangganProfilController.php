<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Session;

class PelangganProfilController extends Controller
{
    public function index() {

        $user = User::where('id', Auth::user()->id)->firstOrFail();

        return view('Pelanggan.Page.Profile.profile', compact('user'));
    }

}
