<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function m_customer(){

    $alluser = User::all();
    return view("admin.m_customer", compact('alluser'));
    }
}

