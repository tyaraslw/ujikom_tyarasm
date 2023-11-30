<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pelangganControll extends Controller
{
    function proses_tambah_masyarakat(Request $request)
    {

        //validasi
        $request->validate([
            'isi_daftar' => 'required|min:2'
        ]);


        // $isi_masyarakat = $_POST['isi_laporan'];
        $isi_masyarakat = $request->isi_daftar;
        $isi_username = $request->isi_user;
        $isi_password = $request->isi_pass;
        $isi_telp = $request->isi_no;

        DB::table('pelanggan')->insert([
            'nik' => '08',
            'nama' => $isi_masyarakat,
            'username' => $isi_username,
            'password' => $isi_password,
            'telp' => $isi_telp,
        ]);
        return redirect('/masyarakat');
    }
}
