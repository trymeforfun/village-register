<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
                $table->string('layanan')->nullable();
                $table->string('alasan')->nullable();
                $table->string('nama')->nullable();
                $table->string('nik')->nullable();
                $table->string('tempat_lahir')->nullable();
                $table->date('tanggal_lahir')->nullable();
                $table->text('alamat')->nullable();
                $table->string('rt')->nullable();
                $table->string('rw')->nullable();
                $table->string('status')->nullable();
                $table->string('pekerjaan')->nullable();
                $table->string('agama')->nullable();
                $table->string('poto')->nullable();
                $table->string('ttd')->nullable();
                $table->string('kk_img')->nullable();
                $table->string('pengantar_rt_img')->nullable();
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
        Schema::dropIfExists('ktp');
    }
}
