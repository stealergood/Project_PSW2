<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class AdminProdukController extends Controller
{   
    public function m_produk()
    {
        $allproduk = Produk::all();
        return view("admin.m_produk", compact('allproduk'));
    }
}
