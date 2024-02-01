<?php

use App\Http\Controllers\AddOfficerController;
use App\Http\Controllers\AuthControlller;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MuridController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//route murid
Route::get('indexmurid', [MuridController::class, 'index'])->name('indexmurid');
Route::get('pelanggaranmurid', [MuridController::class, 'pelanggaranmurid'])->name('pelanggaranmurid');
Route::get('jenispelanggar', [MuridController::class, 'jenispelanggarmurid'])->name('jenispelanggar');

Route::get('loginsemua', [AuthControlller::class,'index'])->name('loginsemua');

Route::get('dashboard',[AuthControlller::class, 'dashboard'])->name('dashboard');
Route::get('indexadmin',[AuthControlller::class, 'indexadmin'])->name('indexadmin');
Route::get('siswaa', [SiswaController::class, 'siswa'])->name('siswaa');
// Route::get('siswa',[SiswaController::class, 'index'])->name('siswa');
Route::resource('/siswa',\App\Http\Controllers\SiswaController::class);
Route::resource('/kelas',\App\Http\Controllers\KelasController::class);
Route::resource('/pelanggaran',\App\Http\Controllers\PelanggaranController::class);
Route::resource('/jenispelanggaran',\App\Http\Controllers\JenisPelanggaranController::class);
Route::post('signupsave', [AuthControlller::class, 'signupsave'])->name('signupsave');
Route::get('register', [AuthControlller::class, 'register'])->name('register');
Route::post('postlogin',[AuthControlller::class,'postlogin'])->name('postlogin');
Route::get('daftar',[AddOfficerController::class,'register2'])->name('daftar');
Route::post('simpan',[AddOfficerController::class,'simpan'])->name('simpan');
Route::get('sigout', [AuthControlller::class, 'logout'])->name('sigout');
Route::put('/update-profile', [MuridController::class, 'updateProfile'])->name('updateProfile');


