<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdministrasiController;

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
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('dokter/laporan', [DokterController::class,'laporan'])->name('dokter.laporan')->middleware('auth');
Route::get('pasien/laporan', [PasienController::class,'laporan'])->name('pasien.laporan')->middleware('verified');
Route::get('Administrasi/laporan', [AdministrasiController::class,'laporan'])->name('administrasi.laporan')->middleware('verified');

Route::resource('dokter', DokterController::class)->middleware('auth');
Route::resource('pasien', PasienController::class)->middleware('auth');
Route::resource('administrasi', AdministrasiController::class)->middleware('auth');