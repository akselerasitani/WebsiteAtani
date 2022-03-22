<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class DashboardController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){
            return view('Admin.Page.Dashboard.dashboard');
        }
        else{
            return redirect()->route('loginadmin');
        }
    }
}
