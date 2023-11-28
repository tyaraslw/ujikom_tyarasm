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

Route::get('/home', [HomeControll::class, 'index']);
Route::get('/produk', [HomeControll::class, 'produk']);