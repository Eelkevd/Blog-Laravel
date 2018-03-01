<?php

namespace App;

// Model page for the categories
class Category extends Model
{
	// Couple articles with categories
    public function articles()
    {
    	return $this->belongsToMany(Article::class);
    }

    // Find category in database by 'name'
    public function getRouteKeyName()
    {
    	return 'name';
    }
}
