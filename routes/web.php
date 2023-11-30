<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControll;
use App\Http\Controllers\HomeControll;
use App\Http\Controllers\LoginControll;
use App\Http\Controllers\LogoutControll;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/loginkasir", [LoginControll::class, 'login'])->name("login");
Route::post("/loginkasir", [LoginControll::class, 'proseslogin']);

// Route::get('/home', function () {
//     return 'Halaman Home';
// });

//produk
Route::get('/home', [HomeControll::class, 'index']);
Route::get('/produk', [HomeControll::class, 'produk']);
//hapus
Route::get('/hapusProduk/{id}', [HomeControll::class, 'hapus']);
//detail
Route::get('/detailProduk/{id}', [HomeControll::class, 'detail_produk']);
//update
Route::post('/update/{id}', [HomeControll::class, 'proses_update_produk']);
Route::get('/update/{id}', [HomeControll::class, 'update_produk']);

//pelanggan
Route::get('/pelanggan', [HomeControll::class, 'pelanggan']);
Route::post('/tambah-pelanggan', [HomeControll::class, 'tambahpel']);
