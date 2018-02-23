<?php

namespace App;

// Model page for the articles/blogs
class Article extends Model
{
	// Couple categories with articles
	public function categories()
	{
		return $this->belongsToMany(Category::class);
	}

	// Couple comments with articles
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	// Couple a new comment to the other comments of an article
	public function addComment($body)
	{
		$this->comments()->create(compact('body'));
	}

}
