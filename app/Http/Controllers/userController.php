<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    Public function halamanRegister(){
        return view("register");
    }

    public function simpanUser(Request $request){
        $request->validate([
            'nik'=>'required|unique:users,email',
            'nama'=>'required'
        ],
        [
            'nik.unique'=>'NIK sudah terdaftar',
            'nama.required'=>'Nama tidak boleh kosong'
        ]
    );

        $data=[
            'name'=>$request->nama,
            'email'=>$request->nik,
            //'email'=>"123@gmail.com",
            // 'password'=>$request->nik
            'password'=>bcrypt($request->nik)
        ];

        // dd($data);
        User::create($data);
        return redirect('/login')->with('massage','Register berhasil');
    }
}
