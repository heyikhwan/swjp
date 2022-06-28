<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'leader_id',
        'guide_id',
        'judul',
        'jenis_perjalanan',
        'durasi_perjalanan',
        'keberangkatan',
        'status',
    ];
}
