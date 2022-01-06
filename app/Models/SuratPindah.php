<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPindah extends Model
{
    use HasFactory;
    public $table ='surat_pindah';

    protected $casts = [
        'data_anggota_keluarga' => 'array'
    ];
}
