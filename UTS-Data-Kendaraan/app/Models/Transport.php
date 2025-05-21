<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $table = 'transports';
    protected $fillable = [
    'no_kendaraan',
    'jenis_kendaraan',
    'merk',
    'model',
    'tahun',
    'warna',
    'jenis_bbm',
    'kapasitas_penumpang',
];
}
