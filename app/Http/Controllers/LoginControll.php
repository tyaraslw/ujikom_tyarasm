<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginControll extends Controller
{
    function login(){
        return view('/login');
    }

    function proseslogin(Request $request){
        $dataLogin = $request->only("username", "password");
            if(Auth::attempt($dataLogin)){
                return redirect('/home');
            }else{
                return redirect('/login')->with("erorr", "username atau password salah");
            }
    }

    function logout(){
        Auth::logout();

        return redirect('/login');
    }
}
