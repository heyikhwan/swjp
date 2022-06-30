<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        ])->assignRole('admin');

        User::create([
            'name' => 'Siti Hajar',
            'email' => 'siti@swjp.com',
            'username' => 'siti',
            'password' => Hash::make('adminadmin'),
            'avatar' => 'sitihajar.jpg'
        ])->assignRole('admin');
    }
}
