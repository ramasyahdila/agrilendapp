<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PemerintahController;
use App\Http\Controllers\PoktanController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Landing
Route::get('/landingpage', function () {
    return view('landingpage');
})->name('landingpage');

// Halaman Login
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Halaman Register
Route::get('/register', function () {
    return view('register');
})->name('register');

// Sidebar Petani
Route::get('layout/sidebarpetani', function () {
    return view('layout/sidebarpetani');
})->name('layout.sidebarpetani');

// Peminjaman
Route::get('layout/Peminjaman', function () {
    return view('layout/Peminjaman');
})->name('layout.Peminjaman');

// Form Tambah
Route::get('layout/FormTambah', function () {
    return view('layout/FormTambah');
})->name('layout.FormTambah');

// Pilih Aktor
Route::get('/pilihaktor', function () {
    return view('/pilihaktor');
})->name('pilihaktor');

// Register Poktan
Route::get('/registerpoktan', [PoktanController::class, 'register'])->name('registerpoktan');
Route::post('/registerpoktan', [PoktanController::class, 'store'])->name('poktan.store');

// Register Pemerintah
Route::get('/registerpemerintah', [PemerintahController::class, 'register'])->name('registerpemerintah');
Route::post('/registerpemerintah', [PemerintahController::class, 'store'])->name('register.store');

// Profil Petani
Route::get('layout/profilpetani', function () {
    return view('layout/profilpetani');
})->name('layout.profilpetani');

// Edit Profil Petani
Route::get('layout/editprofilpetani', function () {
    return view('layout/editprofilpetani');
})->name('layout.editprofilpetani');

// Sidebar Poktan
Route::get('poktan/sidebarpoktan', function () {
    return view('poktan/sidebarpoktan');
})->name('poktan.sidebarpoktan');

// Peminjaman Poktan
Route::get('poktan/peminjaman', function () {
    return view('poktan/peminjaman');
})->name('poktan.peminjaman');

// Profil Poktan
Route::get('poktan/profilpoktan', function () {
    return view('poktan/profilpoktan');
})->name('poktan.profilpoktan');

// Edit Profil Poktan
Route::get('poktan/editprofilpoktan', function () {
    return view('poktan/editprofilpoktan');
})->name('poktan.editprofilpoktan');

// Register routes using RegistrationController
Route::get('/register', [PetaniController::class, 'register'])->name('register');
Route::post('/register', [PetaniController::class, 'store'])->name('petani.store');

// Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');