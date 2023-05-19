<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHalamanAboutController extends Controller
{
    public function halaman_about(){
        return view('admin.halaman_about');
    }
}
