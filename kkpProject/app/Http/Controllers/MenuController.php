<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Hash; //bila memakai hash
use App\TblDaftar;
use App\TblKendaraan;

class MenuController extends Controller
{
    //
    function menu()
    {
        return view('home.menu');
    }

    function produk()
    {
        $data = TblKendaraan::all();
        return view('home.list',["listproduk"=>$data]);
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
