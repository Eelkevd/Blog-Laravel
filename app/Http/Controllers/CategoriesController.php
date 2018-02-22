<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;

class CategoriesController extends Controller
{
    public function home(Category $category)
   	{
   		$articles = $category->articles;
   		return view('articles.blogs',compact('articles'));   
   		
   	}
}
