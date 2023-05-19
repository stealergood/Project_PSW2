<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutentController extends Controller
{
    public function login()
    {
        return view('user_login');
    }

    public function Masuk(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $input = $request->all();
        if (auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
            if (auth()->user()->role == "a") {
                return redirect('admin-user');
            } else {
                return redirect('/');
            }
        }

        return back()->with('loginError', 'Login Faild!!')->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}