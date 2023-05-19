<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPemesananController extends Controller
{
    public function produksi(){
        return view('admin.produksi');
    }
}
