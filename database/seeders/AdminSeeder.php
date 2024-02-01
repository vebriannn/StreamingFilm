<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            'name' => 'Vebrian',
            'avatar' => '',
            'email' => 'vebrianns01@gmail.com',
            'password' => Hash::make('vebrian'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
