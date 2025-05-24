<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

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

    public function pinjams()
    {
        return $this->hasMany(Pinjam::class, 'transport_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'transport_id');
    }

    // Setter
    public function setNoKendaraanAttribute($value)
    {
        $this->attributes['no_kendaraan'] = encrypt($value);
    }

    // Getter
    public function getNoKendaraanAttribute($value)
    {
        return decrypt($value);
    }

}
