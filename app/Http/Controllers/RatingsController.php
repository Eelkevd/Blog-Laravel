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

        $article_id = DB::table('average_ratings')
                    ->where ('article_id', $article->id)
                    ->first();
                    //dd($article_id);
        if($article_id === NULL)
        {
            $articleid = $article->id;
            $article->addAverage_rating($avgRating, $articleid);
        }
        else
        {
            DB::table('average_ratings')
            ->where ('article_id', $article->id)
            ->update(['average_rating' => $avgRating]);
        }
        // $article->id;


        // Put average in average table
        

        return back();
    }
}
