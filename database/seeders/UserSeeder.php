<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@swjp.com',
            'username' => 'admin',
            'password' => Hash::make('adminadmin'),
            'avatar' => 'akasyah.jpg'
        ])->assignRole('admin');

        User::create([
            'name' => 'Ana',
            'email' => 'ana@swjp.com',
            'username' => 'ana',
            'password' => Hash::make('adminadmin'),
            'avatar' => 'ana.jpg'
        ])->assignRole('admin');

        User::create([
            'name' => 'Erno',
            'email' => 'erno@swjp.com',
            'username' => 'erno',
            'password' => Hash::make('adminadmin'),
            'avatar' => 'erno.jpg'
        ])->assignRole('guide');

        User::create([
            'name' => 'Siti Hajar',
            'email' => 'siti@swjp.com',
            'username' => 'siti',
            'password' => Hash::make('adminadmin'),
            'avatar' => 'sitihajar.jpg'
        ])->assignRole('leader');

        User::create([
            'name' => 'Nanda',
            'email' => 'nanda@swjp.com',
            'username' => 'nanda',
            'password' => Hash::make('adminadmin')
        ])->assignRole('customer');

        Customer::create([
            'user_id' => 5,
            'nik' => '11937464',
            'tempat_lahir' => 'Pekanbaru',
            'tanggal_lahir' => '2022-06-27',
            'no_passport' => '12934784'
        ]);
    }
}
