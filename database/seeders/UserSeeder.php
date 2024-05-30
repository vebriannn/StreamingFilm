<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Yanss01',
            'avatar' => 'yaqwsaan.jpeg',
            'email' => 'yn@gmail.com',
            'password' => Hash::make('vebriannn'),
            'role' => 'free'
            // 'created_at' => now(),
            // 'updated_at' => now()
        ]);




    }
}
