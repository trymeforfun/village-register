<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratPindahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_pindah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('layanan')->nullable();
            $table->string('nama')->nullable();
            $table->string('nama_kepala_keluarga')->nullable();
            $table->string('nik')->nullable();
            $table->string('nik_kepala_keluarga')->nullable();
            $table->text('alamat')->nullable();
            $table->text('alamat_tujuan')->nullable();
            $table->string('ktp_img')->nullable();
            $table->string('kk_img')->nullable();
            $table->string('pengantar_rt_img')->nullable();
            $table->json('data_anggota_keluarga')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_pindah');
    }
}
