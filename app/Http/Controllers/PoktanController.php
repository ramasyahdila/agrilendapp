<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDesa;


class PoktanController extends Controller
{
    public function register()
    {
        $data_desa = DataDesa::all();
        // dd($data_desa);// Mengambil semua data kota dari model

        return view('registerpoktan', ['data_desa' => $data_desa]);
    }
}