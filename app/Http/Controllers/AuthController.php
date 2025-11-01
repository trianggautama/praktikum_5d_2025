<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username','password');

        if(Auth::attempt($credentials,true))
        {
            //login berhasil 
            return redirect()->route('profile');
        }else{
            //login gagal
            return redirect()->route('home');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function register()
    {
        return view('register');
    }

    public function registerStore(Request $request)
    {
        //menyimpan data user ke database
        $user = User::create([
                    'nama'=> $request->nama,
                    'email'=> $request->email,
                    'username'=> $request->username,
                    'password'=> Hash::make($request->password)
                ]);
        //login menggunakan dat auser tersimpan
        if(Auth::attempt(['username' => $user->username,'password' => $request->password],true))
        {
            //login berhasil 
            return redirect()->route('profile');
        }else{
            //login gagal
            return redirect()->route('register');
        }
    }
}
