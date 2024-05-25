<?php

namespace App\Http\Controllers;

use App\Models\DataMetodeBayar;
use App\Models\DataPembayaran;
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
    public function showDetailTagihan($id)
    {
        $tagihan = DataTagihan::select('data_tagihan.*','data_status_tagihan.status_tagihan','data_pengajuan_modal.*','data_akun_petani.nama_petani','data_akun_petani.alamat_petani','data_akun_poktan.nama_poktan')
        ->join('data_status_tagihan','data_status_tagihan.id_status_tagihan','data_tagihan.id_status_tagihan')
        ->join('data_pengajuan_modal','data_pengajuan_modal.id_pengajuan','data_tagihan.id_pengajuan')
        ->join('data_akun_petani','data_pengajuan_modal.id_petani','data_akun_petani.id_petani')
        ->join('data_akun_poktan','data_akun_poktan.id_poktan','data_akun_petani.id_poktan')
        ->where('id_tagihan',$id)->first();

        $metode_bayar = DataMetodeBayar::all();

        return view('layout.LihatTagihan', ['tagihan' => $tagihan, 'metode_bayar' => $metode_bayar]);

    }
    public function bayarTagihan(Request $request)
    {
        $validated = $request->validate([
            'id_tagihan' => 'required',
            'id_metode_bayar' => 'required',
        ]);
        $tagihan = DataTagihan::where('id_tagihan',$validated['id_tagihan'])->update(['id_status_tagihan' => 5]);
        if($tagihan) {
            $pembayaran = new DataPembayaran();
            $pembayaran->tgl_pembayaran = now();
            $pembayaran->id_tagihan = $validated['id_tagihan'];
            $pembayaran->id_metode_bayar = $validated['id_metode_bayar'];
            $pembayaran->save();

            return redirect()->route('layout.Tagihan')->with('success', 'Tagihan berhasil dibayar.');
        }
    }
}
