<?php

namespace App;

class Category extends Model
{
    public function post()
    {
    	return $this->belongsTo(Article::class);
    }
}
