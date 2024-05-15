<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAkunPoktan extends Model
{
    use HasFactory;
    protected $table = 'data_akun_poktan';

    protected $primaryKey = 'id_poktan';

    public $timestamps = false;

    protected $fillable = [
        'id_poktan',
        'username_poktan',
        'password',
        'nama_poktan',
        'alamat_poktan',
        'id_desa',
        'id_pemerintah',
        'no_tlp',
        'foto_profil',
    ];

    public function DataDesa()
    {
        return $this->belongsTo(DataDesa::class, 'id_desa', 'id_desa');
    }
}
