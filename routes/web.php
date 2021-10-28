<?php

use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/registrasi', function () {
    return view('login.registrasi');
});

Route::get('/daftarpesan', function () {
    return view('pemesanan.daftarpesan');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pesanjasa', function () {
    return view('pemesanan.pesanjasa');
});


