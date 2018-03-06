<?php

namespace App;

// Model page for the comments
class Rating extends Model
{
	// Couple articles with comment
    public function post()
    {
    	return $this->belongsTo(Article::class);
    }
}
