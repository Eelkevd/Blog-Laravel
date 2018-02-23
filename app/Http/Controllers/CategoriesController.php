<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function home(Category $category)
   	{
   		$articles = $category->articles;
   		return view('articles.blogs',compact('articles'));   
   		
   	}

   	public function create(Category $category)
   	{
   		return view('articles.create_category');   
   		
   	}

   	public function store(Request $request)
   	{
   		//return view('articles.create_category');   

   		$request->validate([
            'name'  => 'required',
        ]);

        //dd($request);

        $category = Category::create(request(['name']));

    	return redirect('articles/home');
   		
   	}
}
