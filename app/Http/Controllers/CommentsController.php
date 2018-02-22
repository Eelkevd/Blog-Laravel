<?php

// Controller of the comments
namespace App\Http\Controllers;

use App\Article;
use App\Comment;

class CommentsController extends Controller
{
	// Function to validate and store new comment 
   	public function store(Article $article)
   	{
   		$this->validate(request(), [
            'body'  => 'required'
        ]);
   		// Add a comment to a specific article
   		$article->addComment(request('body'));
		return back();
   	}
}
