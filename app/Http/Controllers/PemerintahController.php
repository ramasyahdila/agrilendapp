<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKota;
use App\Models\DataAkunPemerintah;



class PemerintahController extends Controller
{
    public function register()
    {
        $data_kota = DataKota::all(); // Mengambil semua data kota dari model

        return view('registerpemerintah', ['data_kota' => $data_kota]);
    }

    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'username_pemerintah' => 'required|string|max:255|unique:data_akun_pemerintah,username_pemerintah',
        'password' => 'required|string|min:8|confirmed',
        'nama_pemerintah' => 'required|string|max:255',
        'id_kota' => 'required|exists:data_kota,id_kota',
        'no_tlp' => 'required|string|max:15',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Proses penyimpanan file gambar
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('fotos', 'public');
    } else {
        return redirect()->back()->withErrors(['foto' => 'File foto harus diunggah.']);
    }

    // Simpan data ke database
    $pemerintah = new DataAkunPemerintah();
    $pemerintah->username_pemerintah = $request->username_pemerintah;
    $pemerintah->password = bcrypt($request->password);
    $pemerintah->nama_pemerintah = $request->nama_pemerintah;
    $pemerintah->id_kota = $request->id_kota;
    $pemerintah->no_tlp = $request->no_tlp;
    $pemerintah->foto_profil = $fotoPath;
    $pemerintah->save();

    // Redirect dengan pesan sukses
    return redirect()->route('login')->with('success', 'Registrasi Pemerintah berhasil!');
}



}