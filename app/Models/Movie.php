<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'jojo Bizzare Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'shounen',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family who are possessed with intense psychic strength.',
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato who desires to become a famous god.',
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],
        [
            'id' => 4,
            'title' => 'Spy X family',
            'poster' => 'movie-04.jpg',
            'genre' => 'Comedy',
            'synopsis' => 'The series follows master spy Twilight, who must disguise himself as psychiatrist Loid Forger and build a mock family in order to investigate political leader Donovan Desmond.',
        ],
        [
            'id' => 5,
            'title' => 'Toradora',
            'poster' => 'movie-05.jpg',
            'genre' => 'Romance',
            'synopsis' => 'Ryuuji Takasu is a gentle high school student who loves housework;  But unlike his kind nature, he has an intimidating face that often makes him labeled as a bad boy.  On the other side is Taiga Aisaka, a little doll-like student, who is not a cute and fragile girl at all.',
        ],  
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }


}