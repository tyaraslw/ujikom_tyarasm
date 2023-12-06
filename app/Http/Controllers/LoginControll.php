<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\User;

class LoginControll extends Controller
{
    function login(){
        //  return Hash::make("111");
        return view('/login');
    }

    function proseslogin(Request $request){
        $data = $request->only("username", "password");
            if(Auth::attempt($data)){
                return redirect('/home');
            }else{
                return redirect('/login')->with("erorr", "username atau password salah");
            }
    }

    function user()
    {

        $data = "Data User";
        $user = DB::table('user')->get();
 
        // $produk = Produk::where('nik', Auth::user()->nik)->get();

        return view('user', ['TextIsi' => $data, 'user' => $user]);  
    }

}