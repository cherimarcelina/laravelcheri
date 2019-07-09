<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function daftar(Request $req)
    {
    	/*menghubungkan tabel dgn kategori*/
    	$data = Produk::join('kategori','kategori.id','produk.id_kategori')
    		->where('nama_produk','like',"%{$req->keyword}%")
    		->select('produk.*','nama_kategori')
    		->orderBy('updated_at','desc')
    		->paginate(10);

    	return view('admin.pages.produk.daftar',['data'=>$data]);
    }
}
