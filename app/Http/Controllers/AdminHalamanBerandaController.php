<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHalamanBerandaController extends Controller
{
    public function halaman_beranda(){
        return view('admin.halaman_beranda');
    }
}
