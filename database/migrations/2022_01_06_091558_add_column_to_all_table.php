<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kk', function (Blueprint $table) {
            $table->string('layanan')->nullable();
        });
        Schema::table('surat_pindah', function (Blueprint $table) {
            $table->string('layanan')->nullable();
        });
        Schema::table('surat_domisili', function (Blueprint $table) {
            $table->string('layanan')->nullable();
        });
        Schema::table('surat_keterangan_usaha', function (Blueprint $table) {
            $table->string('layanan')->nullable();
        });
        Schema::table('surat_keterangan_tidak_mampu', function (Blueprint $table) {
            $table->string('layanan')->nullable();
        });
        Schema::table('surat_kematian', function (Blueprint $table) {
            $table->string('layanan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kk', function (Blueprint $table) {
            //
        });
    }
}
