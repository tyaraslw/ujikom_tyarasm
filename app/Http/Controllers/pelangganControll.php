<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\User;

class pelangganControll extends Controller
{
    function pelanggan()
    {

        $data = "Data Pelanggan";
        $pelanggan = DB::table('pelanggan')->get();
 
        // $produk = Produk::where('nik', Auth::user()->nik)->get();

        return view('pelanggan', ['TextIsi' => $data, 'pelanggan' => $pelanggan]);  
    }

    function hapus($id)
    {
        $deleted=DB::table('pelanggan')->where('PelangganID', $id)->delete();
        if($deleted){
            return redirect()->back();
        }
    }

    //updatepelanggan
    function update($id)
    {
        $pelanggan = DB::table('pelanggan')->where('PelangganID' , $id)->first();

        // return $pelanggan;
        return view('updatepelanggan' , ['pelanggan' => $pelanggan]);
    }
    function proses_update_pelanggan(Request $request, $id)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        $telp = $request->telp;

        // return [$nama, $alamat, $telp];

        DB::table('pelanggan')
        ->where('PelangganID', $id)
        ->update(['NamaPelanggan' => $nama, 'Alamat' => $alamat, 'NomorTelepon' => $telp]);
        
        return redirect('/pelanggan');
    }


    //tambahpelanggan
    function tambahpel()
    {
        $isi = "Tambah Pelanggan";

        return view('/tambahpelanggan', ['isi' => $isi]);
    }
    function proses_tambahpel(Request $request)
    {
        $tambahnama = $request->nama;
        $tambahalamat = $request->alamat;
        $tambahtelp = $request->telp;
        
        // return ([$tambahnama, $tambahalamat, $tambahtelp]);

        DB::table('pelanggan')->insert([
            'PelangganID' => '0',
            'NamaPelanggan' => $tambahnama,
            'Alamat' => $tambahalamat,
            'NomorTelepon' => $tambahtelp
        ]);
        return redirect('/pelanggan');
    }
}