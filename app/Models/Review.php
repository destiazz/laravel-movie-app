<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'movie' => 'jojo Bizzare Adventure',
            'user' => 'Destiaaz',
            'rating' => '4.80',
            'date' => '4 April 2024',
        ],
        [
            'movie' => 'Noragami',
            'user' => 'Akmaldn',
            'rating' => '5.00',
            'date' => '9 Mei 2024',
        ],
        [
            'movie' => 'Wind Breaker',
            'user' => 'Marklee',
            'rating' => '4.00',
            'date' => '10 April 2024',
        ],
        [
            'movie' => 'Spy X Family',
            'user' => 'Zhafiraaa',
            'rating' => '5.00',
            'date' => '26 Mei 2024',
        ],
        [
            'movie' => 'Toradora',
            'user' => 'Lucasss',
            'rating' => '4.99',
            'date' => '18 Mei 2024',
        ],   
    ];

    public function getAllReview()
    {
        return $this->reviews;
    }


}