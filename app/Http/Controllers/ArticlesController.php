<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    public function home()
    {
    	//$articles = DB::table('articles')->get();

		$articles = Article::all();

    	return view('articles.home', compact('articles'));
    }

      public function show(Article $article)
    {
		//$article = DB::table('articles')->find($id);

		//$article = Article::find($id);

	    return view('articles.show', compact('article'));
    }

      public function create()
    {
		//$article = DB::table('articles')->find($id);

		//$article = Article::find($id);

	    return view('articles.create');
    }

    public function store() {

    	// create a new article/blog

        Article::create(request(['title', 'bodytext']));

    	//$article = new Article;

    	//$article->title = request('title');

    	//$article->bodytext = request('bodytext');

    	// save into the database
    	///$article->save();

    	return redirect('articles/home');
    }
}
