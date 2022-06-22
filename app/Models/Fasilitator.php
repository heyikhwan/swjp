<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitator extends Model
{
    use HasFactory;

    protected $fillable = [
        'wilayah_id',
        'user_id',
        'rating',
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id', 'id');
    }
}
