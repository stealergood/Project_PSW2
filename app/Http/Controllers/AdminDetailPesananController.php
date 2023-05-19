<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDetailPesananController extends Controller
{
    public function detailorder(){
        return view('admin.detailorder');
    }
}
