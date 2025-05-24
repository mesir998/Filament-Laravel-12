<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'transport_id',
        'tanggal_servis',
        'jenis_servis',
        'biaya',
        'keterangan',
    ];

    public function transport()
    {
        return $this->belongsTo(Transport::class, 'transport_id');
    }
}
