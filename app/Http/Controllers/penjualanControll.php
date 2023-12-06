<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\User;

class penjualanControll extends Controller
{

    function penjualan()
    {
        $data = "Data Penjualan";
        $penjualan = DB::table('penjualan')
        ->join('pelanggan', 'penjualan.PelangganID', '=', 'pelanggan.PelangganID')
        ->get();

        // return $penjualan;
 
        // $produk = Produk::where('nik', Auth::user()->nik)->get();

        return view('penjualan', ['TextIsi' => $data, 'penjualan' => $penjualan]);  
    }
    function detailpenjualan($id)
    {
        $data = DB::table('penjualan')
        ->where('PenjualanID', '=', $id)
        ->first();

        // $penjualan = Penjualan::where('PenjualanID', $id)->first();

        return view("detailpenjualan", ["data" => $data]);
    }
}