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
        'tgl_mulai',
        'tgl_akhir',
        'bukti_pembayaran',
    ];

    public function destinasi()
    {
        return $this->hasMany(Destinasi::class, 'reservasi_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id', 'id');
    }

    public function guide()
    {
        return $this->belongsTo(User::class, 'guide_id', 'id');
    }
}
