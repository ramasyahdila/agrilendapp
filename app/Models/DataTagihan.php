<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTagihan extends Model
{
    use HasFactory;
    protected $table = 'data_tagihan';

    protected $primaryKey = 'id_tagihan';
    public $timestamps = false;
    protected $fillable = [
        'id_tagihan',
        'jml_kembali',
        'jml_pinjam',
        'tenggat_kembali',
        'id_petani',
        'id_pengajuan',
        'id_status_tagihan',
    ];
}
