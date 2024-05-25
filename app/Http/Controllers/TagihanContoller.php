<?php

namespace App\Http\Controllers;

use App\Models\DataTagihan;
use Illuminate\Http\Request;

class TagihanContoller extends Controller
{
    public function showTagihan()
    {
        $tagihan = DataTagihan::select('data_tagihan.*','data_status_tagihan.status_tagihan','data_pengajuan_modal.*')
        ->join('data_status_tagihan','data_status_tagihan.id_status_tagihan','data_tagihan.id_status_tagihan')
        ->join('data_pengajuan_modal','data_pengajuan_modal.id_pengajuan','data_tagihan.id_pengajuan')
        ->where('id_petani',auth()->id())->get();
        
        return view('layout.Tagihan', ['tagihan' => $tagihan]);
    }
    public function store()
    {
        
    }
}
