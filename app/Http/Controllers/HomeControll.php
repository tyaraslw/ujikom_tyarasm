<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\User;


class HomeControll extends Controller
{
    public function index()
    {
        $judul = "Welcomeeeee";
        // $kasir = DB::table('')->get();
        return view('home', ['TextJudul' => $judul]);
    }

    function produk()
    {

        $data = "Data barang";
        $produk = DB::table('produk')->get();
 
        // $produk = Produk::where('nik', Auth::user()->nik)->get();

        return view('produk', ['TextIsi' => $data, 'produk' => $produk]);  
    }
}
