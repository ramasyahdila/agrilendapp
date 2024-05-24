<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PemerintahController;
use App\Http\Controllers\PoktanController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KonfirmasiPeminjamanController;


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
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth:petani']], function () {
    Route::get('/dashboard/petani', function() {
        return view('layout.sidebarpetani'); // Ganti dengan view dashboard petani
    })->name('dashboard.petani');
     // Peminjaman
     Route::get('/dashboard/Peminjaman', [PeminjamanController::class, 'showPeminjaman'])->name('layout.Peminjaman');

     // Form Tambah
     Route::get('/dashboard/FormTambah', [PetaniController::class, 'showFormTambah'])->name('layout.FormTambah');

     //Form Lihat Pengajuan
     Route::get('/dashboard/LihatPeminjaman', [PeminjamanController::class, 'showFormLihatPengajuan'])->name('layout.LihatPeminjaman');

     // Profil Petani
     Route::get('/dashboard/profilpetani', [PetaniController::class, 'showProfilPetani'])->name('layout.profilpetani');

     // Edit Profil Petani
     Route::get('/dashboard/editprofilpetani', [PetaniController::class, 'showEditProfilPetani'])->name('layout.editprofilpetani');
     Route::post('/dashboard/editprofilpetani', [PetaniController::class, 'updatePetani'])->name('update.profilpetani');

     //pengajuan modal
    // Definisi rute untuk menyimpan data peminjaman
    Route::post('/store-peminjaman', [PeminjamanController::class, 'store'])->name('store.peminjaman');

    Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');

    Route::get('/peminjaman/{id}/detail', [PeminjamanController::class, 'showDetailPetani'])->name('peminjamanpetani.detail');

    Route::get('/peminjaman/{id}/ubah', [PeminjamanController::class, 'showUbah'])->name('peminjaman.ubah');

    Route::post('/peminjaman/{id}', [PeminjamanController::class, 'update'])->name('update.peminjaman');
});

Route::group(['middleware' => ['auth:poktan']], function () {

    Route::get('/dashboard/poktan', function() {
        return view('poktan.sidebarpoktan'); // Ganti dengan view dashboard poktan
    })->name('dashboard.poktan');

    // Sidebar Poktan
    Route::get('/dashboard/poktan', function () {
        return view('poktan/sidebarpoktan');
    })->name('poktan.sidebarpoktan');

    // Peminjaman Poktan
    Route::get('/dashboard/peminjaman', [PoktanController::class, 'peminjaman'])->name('poktan.peminjaman');

    // Profil Poktan
    Route::get('/dashboard/profilpoktan', [PoktanController::class, 'profilPoktan'])->name('poktan.profilpoktan');

    // Edit Profil Poktan
    Route::get('/dashboard/editprofilpoktan', [PoktanController::class, 'editProfilPoktan'])->name('layout.editprofilpoktan');
    Route::post('/dashboard/editprofilpoktan', [PoktanController::class, 'updatePoktan'])->name('update.profilpoktan');

    Route::get('/peminjamanpoktan/{id}/detail', [KonfirmasiPeminjamanController::class, 'showDetailPoktan'])->name('peminjaman.detail');

    Route::post('/peminjaman/{id}/konfirmasi', [KonfirmasiPeminjamanController::class, 'konfirmasi'])->name('peminjaman.konfirmasi');
    Route::post('/peminjaman/{id}/tolak', [KonfirmasiPeminjamanController::class, 'tolak'])->name('peminjaman.tolak');
});

Route::group(['middleware' => ['auth:pemerintah']], function () {
    Route::get('/dashboard/pemerintah', function() {
        return view('pemerintah.BerandaPemerintah'); // Ganti dengan view dashboard pemerintah
    })->name('dashboard.pemerintah');
});


// Route::get('/login', function () {
//     return view('login');
// })->name('login');


// Sidebar Petani
// Route::get('layout/sidebarpetani', function () {
//     return view('layout/sidebarpetani');
// })->name('layout.sidebarpetani');



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

// Register routes using RegistrationController
Route::get('/register', [PetaniController::class, 'register'])->name('register');
Route::post('/register', [PetaniController::class, 'store'])->name('petani.store');







// Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');