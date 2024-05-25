<?php

namespace Database\Seeders;

use App\Models\DataPengajuanModal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPengajuanModalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([DataStatusPengajuanModalSeeder::class, DataPetaniSeeder::class]);
        DataPengajuanModal::insert([
            'id_pengajuan' => 1,
            'id_petani' => 1,
            'id_status_pengajuan' => 1,
            'jml_pinjam' => 500000,
            'bunga' => 59000,
            'jml_diterima' => 441000,
            'tgl_pinjam' => '2024-05-24',
            'tgl_kembali' => '2024-06-07',
        ]);
    }
}
