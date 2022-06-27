<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'wilayah_id',
        'name',
        'bintang',
        'rating',
    ];

    public function galleries()
    {
        return $this->hasMany(HotelGallery::class, 'hotel_id', 'id');
    }

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id', 'id');
    }
}
