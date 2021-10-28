<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'ceklogin']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/registrasi', [RegisterController::class,'index'])->middleware('guest');
Route::post('/registrasi',[RegisterController::class,'store']);

Route::get('user/daftarpesan', function () {
    return view('pemesanan.daftarpesan');
})->middleware('auth');

Route::get('admin/daftarpesan', function () {
    return view('pemesanan.daftarpesan');
})->middleware(['auth','test_admin']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/pesanjasa', function () {
    return view('pemesanan.pesanjasa');
})->middleware('auth');


