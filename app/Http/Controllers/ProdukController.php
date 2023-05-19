<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function Produk()
    {
        $allproduk = Produk::all();
        return view("produk", compact('allproduk'));
    }
}
