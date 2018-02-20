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
}
