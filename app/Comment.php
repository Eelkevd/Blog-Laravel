<?php

namespace App;

// Model page for the comments
class Comment extends Model
{
	// Couple comment with articles
    public function post()
    {
    	return $this->belongsTo(Article::class);
    }
}
