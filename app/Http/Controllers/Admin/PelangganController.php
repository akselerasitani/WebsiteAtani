<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = User::paginate(10);

        return view('Admin.Page.DataPelanggan.Pelanggan', compact('pelanggan'));
    }

    public function update($id)
    {
        
        $user = User::find($id);

        $user->status     = 'Aktif';
        $user->save();

        return redirect(route('pelanggan.index'))->with(['success' => 'Account Berhasil di Aktifkan']);
    }

}
