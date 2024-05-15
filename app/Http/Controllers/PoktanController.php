<?php

namespace App\Http\Controllers;

use App\Models\DataAkunPemerintah;
use App\Models\DataDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\DataAkunPoktan; // Model Poktan

class PoktanController extends Controller
{
    public function register()
    {
        $data_desa = DataDesa::all();
        $data_pemerintah = DataAkunPemerintah::all();
        // Mengambil semua data desa dari model

        return view('registerpoktan', ['data_desa' => $data_desa, 'data_pemerintah' => $data_pemerintah]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'username_poktan' => 'required|string|max:255',
            'nama_poktan' => 'required|string|max:255',
            'alamat_poktan' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'id_desa' => 'required|exists:data_desa,id_desa',
            'id_pemerintah' => 'required|exists:data_akun_pemerintah,id_pemerintah',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/foto_poktan');
        }

        $poktan = new DataAkunPoktan();
        $poktan->username_poktan = $request->username_poktan;
        $poktan->nama_poktan = $request->nama_poktan;
        $poktan->alamat_poktan = $request->alamat_poktan;
        $poktan->no_tlp = $request->no_telp;
        $poktan->id_desa = $request->id_desa;
        $poktan->id_pemerintah = $request->id_pemerintah;
        $poktan->password = Hash::make($request->password);
        $poktan->foto_profil = $path;
        $poktan->save();

        return redirect()->route('registerpoktan')->with('success', 'Registrasi Poktan berhasil!');
    }
}
