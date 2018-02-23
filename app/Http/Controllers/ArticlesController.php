<?php

// Controller of the articles
namespace App\Http\Controllers;

use App\Category;
use App\Article;
use Illuminate\Http\Request;

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

     // Function to go back to homepage
    public function categories()
    {
        $categories = Category::get();
        return view('articles.categories', compact('categories'));
    }

    // Function to create new blog
    public function create()
    {
        $categories = Category::all();
	    return view('articles.create', compact('categories'));
    }

    // Function to validate & store new blog in database and redirects to homepage
    public function store(Request $request) 
    {
    	// create a new article/blog
        $request->validate([
            'title'  => 'required',
            'bodytext'  => 'required'
        ]);

        //dd($request);

        $article = Article::create(request(['title', 'bodytext']));
        $article->categories()->attach($request->subscribe);

    	return redirect('articles/home');
    }
}
