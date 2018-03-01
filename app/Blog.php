<?php

namespace App;

// Model page for the blogs
class Blog extends Model
{
    // Couple user with blog
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    // Couple articles with blog
    public function articles() 
    {
      return $this->hasMany(Article::class);
    }
}
