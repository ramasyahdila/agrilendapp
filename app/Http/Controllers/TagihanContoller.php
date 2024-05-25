<?php

namespace App\Http\Controllers;

use App\Models\DataTagihan;
use Illuminate\Http\Request;

class TagihanContoller extends Controller
{
    public function showTagihan()
    {
        $peminjaman = DataTagihan::with('status')->where('id_petani',auth()->id())->get();
        
        return view('layout.Peminjaman', ['peminjaman' => $peminjaman]);
    }
    public function store()
    {
        
    }
}
