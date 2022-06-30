<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create([
            'wilayah_id' => 2,
            'name' => 'OYO',
            'bintang' => 5,
            'rating' => 0   
        ]);

        Hotel::create([
            'wilayah_id' => 1,
            'name' => 'Premiere',
            'bintang' => 5,
            'rating' => 0   
        ]);

        Hotel::create([
            'wilayah_id' => 3,
            'name' => 'Sabrina',
            'bintang' => 5,
            'rating' => 0   
        ]);
    }
}
