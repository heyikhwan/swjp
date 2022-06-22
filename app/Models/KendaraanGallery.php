<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaraanGallery extends Model
{
    use HasFactory;

    protected $fillable = ['kendaraan_id', 'image'];
}
