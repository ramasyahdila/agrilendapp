<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/landingpage', function () {
    return view('landingpage');
})->name('landingpage');
Route::get('layout/sidebarpetani', function () {
    return view('layout/sidebarpetani');
})->name('layout.sidebarpetani');
Route::get('layout/Peminjaman', function () {
    return view('layout/Peminjaman');
})->name('layout.Peminjaman');
Route::get('layout/FormTambah', function () {
    return view('layout/FormTambah');
})->name('layout.FormTambah');
Route::get('/pilihaktor', function () {
    return view('/pilihaktor');
})->name('pilihaktor');
Route::get('/registerpoktan', function () {
    return view('registerpoktan');
})->name('registerpoktan');
Route::get('/registerpemerintah', function () {
    return view('registerpemerintah');
})->name('registerpemerintah');
Route::get('layout/profilpetani', function () {
    return view('layout/profilpetani');
})->name('layout.profilpetani');
Route::get('layout/editprofilpetani', function () {
    return view('layout/editprofilpetani');
})->name('layout.editprofilpetani');
Route::get('poktan/sidebarpoktan', function () {
    return view('poktan/sidebarpoktan');
})->name('poktan.sidebarpoktan');
Route::get('poktan/peminjaman', function () {
    return view('poktan/peminjaman');
})->name('poktan.peminjaman');
Route::get('poktan/profilpoktan', function () {
    return view('poktan/profilpoktan');
})->name('poktan.profilpoktan');
Route::get('poktan/editprofilpoktan', function () {
    return view('poktan/editprofilpoktan');
})->name('poktan.editprofilpoktan');

    Route::get('/petani/pengajuan', [PengajuanModalController::class, 'pengajuan'])->name('partner.dashboard.pengajuan');
    Route::get('/petani/pengajuan/add', [PengajuanModalController::class, 'add'])->name('partner.dashboard.pengajuan.add');
    Route::get('/petani/pengajuan/edit/{id}', [PengajuanModalController::class, 'show'])->name('partner.dashboard.pengajuan.edit');
    Route::put('/petani/pengajuan/update/{id}', [PengajuanModalController::class, 'update'])->name('partner.dashboard.pengajuan.update');
    Route::get('/petani/pengajuan/detail/{id}', [PengajuanModalController::class, 'detail'])->name('partner.dashboard.pengajuan.detail');
    Route::post('/petani/pengajuan/store', [PengajuanModalController::class, 'store'])->name('partner.dashboard.pengajuan.store');
    Route::delete('/petani/pengajuan/{id}', [PengajuanModalController::class, 'destroy'])->name('partner.dashboard.pengajuan.destroy');
    Route::get('/petani/pengembalian/{id}', [PengajuanModalController::class, 'showPengembalianForm'])->name('partner.dashboard.pengembalian.form');

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');

