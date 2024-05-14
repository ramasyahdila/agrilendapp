<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataakunpetani', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('password');
            $table->string('nama_petani');
            $table->date('ttl_petani');
            $table->string('pekerjaan');
            $table->string('alamat_petani');
            $table->unsignedBigInteger('id_desa');
            $table->string('no_telp');
            $table->unsignedBigInteger('id_poktan');
            $table->string('nik');

            // Tambahkan indeks atau kunci asing jika diperlukan
            $table->foreign('id_desa')->references('id')->on('desas');
            $table->foreign('id_poktan')->references('id')->on('poktans');

            $table->timestamps(); // Kolom waktu pencatatan otomatis
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataakunpetani');
    }
};
