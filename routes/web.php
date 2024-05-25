<?php

use App\Http\Controllers\Poktan\PoktanTagihanController;
use App\Http\Controllers\TagihanContoller;
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
    return redirect('/landingpage');
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
    Route::get('/dashboard/petani', function() {return view('layout.sidebarpetani');})->name('dashboard.petani');
    Route::get('/dashboard/Peminjaman', [PeminjamanController::class, 'showPeminjaman'])->name('layout.Peminjaman');
    Route::get('/dashboard/Tagihan', [TagihanContoller::class, 'showTagihan'])->name('layout.Tagihan');
    Route::get('/dashboard/FormTambah', [PetaniController::class, 'showFormTambah'])->name('layout.FormTambah');
    Route::get('/dashboard/LihatPeminjaman', [PeminjamanController::class, 'showFormLihatPengajuan'])->name('layout.LihatPeminjaman');
    Route::get('/dashboard/profilpetani', [PetaniController::class, 'showProfilPetani'])->name('layout.profilpetani');
    Route::get('/dashboard/editprofilpetani', [PetaniController::class, 'showEditProfilPetani'])->name('layout.editprofilpetani');
    Route::post('/dashboard/editprofilpetani', [PetaniController::class, 'updatePetani'])->name('update.profilpetani');
    Route::get('/dashboard/peminjaman', [PoktanController::class, 'peminjaman'])->name('poktan.peminjaman');
    Route::post('/store-peminjaman', [PeminjamanController::class, 'store'])->name('store.peminjaman');
    Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');
    Route::get('/peminjaman/{id}/detail', [PeminjamanController::class, 'showDetailPetani'])->name('peminjamanpetani.detail');
    Route::get('/peminjaman/{id}/ubah', [PeminjamanController::class, 'showUbah'])->name('peminjaman.ubah');
    Route::post('/peminjaman/{id}', [PeminjamanController::class, 'update'])->name('update.peminjaman');
    Route::get('/tagihan/{id}/detail', [TagihanContoller::class, 'showDetailTagihan'])->name('tagihanpetani.detail');
    Route::post('/tagihan/bayar', [TagihanContoller::class, 'bayarTagihan'])->name('tagihanpetani.bayar');
    Route::get('/tagihan/tidak-bayar', [TagihanContoller::class, 'showTidakBayarTagihan'])->name('tagihanpetani.settidakbayar');
    Route::post('/tagihan/tidak-bayar', [TagihanContoller::class, 'tidakBayarTagihan'])->name('tagihanpetani.tidakbayar');
});

Route::group(['middleware' => ['auth:poktan']], function () {
    Route::get('/dashboard/poktan', function() {return view('poktan.sidebarpoktan');})->name('dashboard.poktan');
    Route::get('/dashboard/poktan', function () {return view('poktan/sidebarpoktan');})->name('poktan.sidebarpoktan');
    Route::get('/dashboard/peminjaman', [PoktanController::class, 'peminjaman'])->name('poktan.peminjaman');
    Route::get('/dashboard/profilpoktan', [PoktanController::class, 'profilPoktan'])->name('poktan.profilpoktan');
    Route::get('/dashboard/tagihan', [PoktanTagihanController::class, 'showTagihan'])->name('poktan.tagihan');
    Route::get('/dashboard/editprofilpoktan', [PoktanController::class, 'editProfilPoktan'])->name('layout.editprofilpoktan');
    Route::post('/dashboard/editprofilpoktan', [PoktanController::class, 'updatePoktan'])->name('update.profilpoktan');
    Route::get('/peminjamanpoktan/{id}/detail', [KonfirmasiPeminjamanController::class, 'showDetailPoktan'])->name('peminjaman.detail');
    Route::post('/peminjaman/{id}/konfirmasi', [KonfirmasiPeminjamanController::class, 'konfirmasi'])->name('peminjaman.konfirmasi');
    Route::post('/peminjaman/{id}/tolak', [KonfirmasiPeminjamanController::class, 'tolak'])->name('peminjaman.tolak');
    Route::get('/tagihan/{id}/lihat', [PoktanTagihanController::class, 'showDetailTagihan'])->name('tagihanpoktan.detail');
    Route::post('/tagihan/konfirm', [PoktanTagihanController::class, 'konfirmTagihan'])->name('tagihanpoktan.konfirm');
    Route::post('/tagihan/konfirm-bunga', [PoktanTagihanController::class, 'konfirmBungaTagihan'])->name('tagihanpoktan.konfirmbunga');
    Route::post('/tagihan/konfirm-tidak', [PoktanTagihanController::class, 'konfirmTidakTagihan'])->name('tagihanpoktan.konfirmtidak');
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
Route::get('/registerpoktan', [PoktanController::class, 'register'])->name('registerpoktan');
Route::post('/registerpoktan', [PoktanController::class, 'store'])->name('poktan.store');
Route::get('/registerpemerintah', [PemerintahController::class, 'register'])->name('registerpemerintah');
Route::post('/registerpemerintah', [PemerintahController::class, 'store'])->name('register.store');
Route::get('/register', [PetaniController::class, 'register'])->name('register');
Route::post('/register', [PetaniController::class, 'store'])->name('petani.store');