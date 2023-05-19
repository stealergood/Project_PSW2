<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEditProdukController extends Controller
{
    public function edit_produk(){
        return view('admin.edit_produk');
    }
}
