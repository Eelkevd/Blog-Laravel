<?php

namespace App;

class Article extends Model
{
	public function categories()
	{
		return $this->hasMany(Category::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function addComment($body)
	{
		$this->comments()->create(compact('body'));
	}

}
