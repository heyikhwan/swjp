<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama', 'level', 'induk'
    ];

    public function induk(){
        return $this->hasMany(Wilayah::class, 'id', 'induk');
    }

    public function wilayah(){
        return $this->belongsTo(Wilayah::class, 'id', 'induk');
    }
}
