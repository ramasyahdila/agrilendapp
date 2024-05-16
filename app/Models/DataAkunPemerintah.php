<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class DataAkunPemerintah extends Authenticatable
{
    use HasFactory;

    protected $table = 'data_akun_pemerintah';

    protected $primaryKey = 'id_pemerintah';

    public $timestamps = false;
    protected $fillable = [
        'username_pemerintah',
        'password',
        'nama_pemerintah',
        'id_kota',
        'no_tlp',
        'foto_profil',
    ];

    public function DataKota()
    {
        return $this->belongsTo(DataKota::class, 'id_kota', 'id_kota');
    }

}