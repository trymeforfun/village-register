<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KK extends Model
{
    use HasFactory;

    public $table ='kk';

    protected $casts = [
        'data_anggota_keluarga' => 'array'
    ];

    protected $guarded = ['id'];
}
