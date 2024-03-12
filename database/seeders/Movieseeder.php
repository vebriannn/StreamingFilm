<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Movies;

class Movieseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movies::create([
            'title' => 'Transformers Rise Of Beasts 2',
            'trailer' => ' https://vebriannn.my.id',
            'movie' => 'https://vebriannn.my.id',
            'casts' => 'yannsdev',
            'categories' => 'Action, Fantasy, Military',
            'small_thumbnail' => 'transformers.png',
            'large_thumbnail' => 'transformers.png',
            'release_date' => ' 2023-08-24',
            'about' => 'welcome to long about',
            'duration' => '1h 38m',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
