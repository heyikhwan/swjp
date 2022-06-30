<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kendaraan::create([
            'jenis_transport' => 'Darat',
            'nama' => 'Avanza',
            'pemilik' => 'Padel',
            'rating' => 5
        ]);

        Kendaraan::create([
            'jenis_transport' => 'Laut',
            'nama' => 'Ferry',
            'pemilik' => 'Padel',
            'rating' => 5
        ]);

        Kendaraan::create([
            'jenis_transport' => 'Udara',
            'nama' => 'Lion Air',
            'pemilik' => 'Padel',
            'rating' => 5
        ]);
    }
}
