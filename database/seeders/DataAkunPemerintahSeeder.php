<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataAkunPemerintahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        INSERT INTO `data_akun_pemerintah` (`id_pemerintah`, `username_pemerintah`, `password`, `nama_pemerintah`, `id_kota`, `no_tlp`, `foto_profil`) VALUES
(1, 'LMJ123', '$2y$10$hyRqOp8qMBQODzV56yYd4Oe1FCSTic0gQjova7sDxMtDJqiOYa7n6', 'Dinas Lumajang', 1, '081222222222', 0x666f746f732f4f75693656414c7636434f51656647344158307552575542786a66456a6e6a343445716e3544314a2e6a7067);

        
    }
}
