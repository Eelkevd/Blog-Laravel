<?php

namespace App;


class Blog extends Model
{

    public function user()  // Use this to get the username of
    // the author of the post where this comment belongs to:
    // $comment->post-user
    {
      return $this->belongsTo(User::class);
    }

    public function articles()  // Use this to get the username of
    // the author of the blog where this article belongs to:
    // $article->post-user
    {
      return $this->hasMany(Article::class);
    }

    public function blog()//
    {
        return $this->belongsTo(Blog::class);
    }

}
