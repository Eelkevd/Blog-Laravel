<?php

namespace App;

class Article extends Model
{
	public function categories()
	{
		return $this->hasMany(Category::class);
	}

}
