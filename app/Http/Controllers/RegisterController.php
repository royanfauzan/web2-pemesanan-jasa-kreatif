<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('login.registrasi');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:30',
            'nik' => 'required|unique:users',
            'namadepan' => 'required|max:255',
            'namabelakang' => 'max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success','Akun Berhasil Didaftarkan');

        return redirect('/login');

    }

}

