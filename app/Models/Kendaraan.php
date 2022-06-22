<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_transport',
        'nama',
        'pemilik',
        'rating',
    ];

    public function galleries()
    {
        return $this->hasMany(KendaraanGallery::class, 'kendaraan_id', 'id');
    }
}
