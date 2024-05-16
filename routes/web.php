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
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth:petani']], function () {
    Route::get('/dashboard/petani', function() {
        return view('layout.sidebarpetani'); // Ganti dengan view dashboard petani
    })->name('dashboard.petani');
    // Peminjaman
    Route::get('/dashboard/Peminjaman', function () {
        return view('layout/Peminjaman');
    })->name('layout.Peminjaman');

    // Form Tambah
    Route::get('/dashboard/FormTambah', function () {
        return view('layout/FormTambah');
    })->name('layout.FormTambah');

    // Profil Petani
    Route::get('/dashboard/profilpetani', function () {
        return view('layout/profilpetani');
    })->name('layout.profilpetani');

    // Edit Profil Petani
    Route::get('/dashboard/editprofilpetani', function () {
        return view('layout/editprofilpetani');
    })->name('layout.editprofilpetani');
});

Route::group(['middleware' => ['auth:poktan']], function () {
    Route::get('/dashboard/poktan', function() {
        return view('poktan.sidebarpoktan'); // Ganti dengan view dashboard poktan
    })->name('dashboard.poktan');
});

Route::group(['middleware' => ['auth:pemerintah']], function () {
    Route::get('/dashboard/pemerintah', function() {
        return view('layout.sidebarpetani'); // Ganti dengan view dashboard pemerintah
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



// Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');