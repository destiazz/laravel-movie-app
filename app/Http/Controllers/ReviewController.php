<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();    

        // dd($reviews);
        return view('review.index', compact('reviews'));
    }
}