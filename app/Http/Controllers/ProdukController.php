<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function daftar(Request $req)
    {
    	return view('admin.pages.produk.daftar');
    }
}
