<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        
        $allproduk = Produk::all();
        return view("index", compact('allproduk'));
    }
}
