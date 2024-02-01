<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Detail_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UpdatePremiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::find(1);

        if($users->role === "premium") {
            Detail_user::create([
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
