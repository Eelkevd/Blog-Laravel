<?php

// Controller of the ratings
namespace App\Http\Controllers;
use App\Article;
use App\Rating;
use App\AverageRating;

class RatingsController extends Controller
{
    // Function to validate and store new rating
    public function store(Article $article)
    {
        $this->validate(request(), [
            'rating'  => 'required|numeric|digits_between:1,1'
        ]);
        // Add a rating to a specific article
        $article->addRating(request('rating'));

        $avgStar = Rating::avg('rating');
        $article->addAverage_rating($avgStar);

        return back();
    }
}
