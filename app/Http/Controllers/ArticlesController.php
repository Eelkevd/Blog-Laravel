<?php

// Controller of the articles
namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    // Function to get all blogs with latest on top
    public function blogs()
    {
		$articles = Article::latest()->get();
    	return view('articles.blogs', compact('articles'));
    }

    // Function to show specific article
    public function show(Article $article)
    {
	    return view('articles.show', compact('article'));
    }

    // Function to go back to homepage
    public function home()
    {
        return view('articles.home');
    }

    // Function to create new blog
    public function create()
    {
	    return view('articles.create');
    }

    // Function to validate & store new blog in database and redirects to homepage
    public function store() 
    {
    	// create a new article/blog
        $this->validate(request(), [
            'title'  => 'required',
            'bodytext'  => 'required'
        ]);
        Article::create(request(['title', 'bodytext']));
    	return redirect('articles/home');
    }
}
