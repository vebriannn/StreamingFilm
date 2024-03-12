<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UpdatePremiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Vebrians',
            'avatar' => 'yasan.jpeg',
            'email' => 'veb@gmail.com',
            'password' => Hash::make('vebriannn'),
            'role' => 'premium'
            // 'created_at' => now(),
            // 'updated_at' => now()
        ]);

        $users = User::OrderBy('id', 'desc')->first();

        if($users->role === "premium") {
            DetailUser::create([
                'user_id' => $users->id,
                'start_of_subscription' => now(),
                'end_of_subscription' => now()->addMonths(1),
                'status' => 'active'
            ]);
        }
        else {
            echo "gagal";
        }
    }
}
