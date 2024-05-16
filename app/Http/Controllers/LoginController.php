<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    { // Mengambil semua data kota dari model

        return view('login');
    }
}