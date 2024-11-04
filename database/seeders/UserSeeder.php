<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    
    public function run()
{
    // Buat user dengan role admin
    User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => bcrypt('password'),
        'role' => 'admin',
    ]);

    // Buat user dengan role user biasa
    // User::create([
    //     'name' => 'User',
    //     'email' => 'user@example.com',
    //     'password' => bcrypt('password'),
    //     'role' => 'user',
    // ]);
}
}
