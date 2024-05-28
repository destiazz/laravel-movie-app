<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie_id' => 'jojo Bizzare Adventure',
            'user' => 'Destiaaz',
            'rating' => '4.80',
            'date' => '4 April 2024',
        ]);
        
        Review::create([
            'movie_id' => 'Noragami',
            'user' => 'Akmaldn',
            'rating' => '5.00',
            'date' => '9 Mei 2024',
        ]);

        Review::create([
            'movie_id' => 'Wind Breaker',
            'user' => 'Marklee',
            'rating' => '4.00',
            'date' => '10 April 2024',
        ]);

        Review::create([
            'movie_id' => 'Spy X Family',
            'user' => 'Zhafiraaa',
            'rating' => '5.00',
            'date' => '26 Mei 2024',
        ]);

        Review::create([
            'movie_id' => 'Toradora',
            'user' => 'Lucasss',
            'rating' => '4.99',
            'date' => '18 Mei 2024',
        ]);


    }
}
