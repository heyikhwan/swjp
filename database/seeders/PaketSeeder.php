<?php

namespace Database\Seeders;

use App\Models\PaketWisata;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaketWisata::create([
            'nama' => 'Malaka',
            'harga' => 500000,
            'body' => 'MAKAN ENAK,MANTAP,SEDAP',
            'is_popular' => 1
        ]);

        PaketWisata::create([
            'nama' => 'Singapur',
            'harga' => 400000,
            'body' => 'MAKAN ENAK,MANTAP,SEDAP',
            'is_popular' => 0
        ]);

        PaketWisata::create([
            'nama' => 'Indo',
            'harga' => 300000,
            'body' => 'MAKAN ENAK,MANTAP,SEDAP',
            'is_popular' => 0
        ]);
    }
}
