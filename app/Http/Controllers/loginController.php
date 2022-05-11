<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('Logout');
    }

    public function halamanLogin()
    {
        return view('login');
    }

    public function Login(Request $request)
    {
        // dd($request->all());

        if (Auth::attempt($request->only('name','email','password'))){
            return redirect('/dashboard');
        }
        return redirect('/')->with('massage','login gagal! NIK dan Nama tidak di temukan');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
