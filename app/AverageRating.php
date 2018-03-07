<?php

namespace App;

class AverageRating extends Model
{
	// Couple articles with average
    public function post()
    {
    	return $this->hasMany(Article::class);
    }
}
