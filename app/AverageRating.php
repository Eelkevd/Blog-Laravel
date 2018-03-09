<?php

namespace App;

// Model page for average rating
class AverageRating extends Model
{
	// Couple articles with average
    public function post()
    {
    	return $this->belongsTo(Article::class);
    }
}
