<?php

namespace App;

// Model page for the categories
class Category extends Model
{
	// Couple category with articles
    public function post()
    {
    	return $this->belongsTo(Article::class);
    }
}
