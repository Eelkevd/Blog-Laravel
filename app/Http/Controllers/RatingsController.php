<?php

// Controller of the ratings
namespace App\Http\Controllers;
use App\Article;
use App\Rating;
use App\AverageRating;
use Illuminate\Support\Facades\DB;

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

        // Calculate average rating of specific article
        $avgRating = DB::table('ratings')
                     ->where ('article_id', $article->id)
                     ->avg('rating');

        // Update average rating of article
        DB::table('articles')
        ->where ('id', $article->id)
        ->update(['average_rating' => $avgRating]);
        return back();
    }
}
