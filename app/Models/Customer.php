<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'no_passport',
    ];
}
