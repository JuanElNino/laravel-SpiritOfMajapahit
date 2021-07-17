<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_lokasi';

    protected $table = 'lokasi';

    protected $fillable = [
        'nama_lokasi',
        'desc_lokasi',
        'ket_lokasi',
        'maps_lokasi',
        'jenis_lokasi'
    ];

    public function galeri()
    {
        return $this->hasMany(Galeri::class, 'id_lokasi');
    }
}
