<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat Akun ADMIN
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'), // Passwordnya: password
        ]);

        // 2. Buat Akun USER BIASA
        User::create([
            'name' => 'User Biasa',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => bcrypt('password'), // Passwordnya: password
        ]);
    }
}