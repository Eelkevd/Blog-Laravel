<?php

// Controller of the create categories section
namespace App\Http\Controllers;
use App\Article;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Function to check login
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    // Function to show all articles of category
    public function home(Category $category)
   	{
   	    $articles = $category->articles;
   	    return view('articles.blogs',compact('articles'));   		
   	}

    // Function to create new category
   	public function create(Category $category)
   	{
   	    return view('articles.create_category');   	
   	}

    // Function to store fresh made category
   	public function store(Request $request)
   	{  
   	    $request->validate([
            'name'  => 'required',
        ]);
        $category = Category::create(request(['name']));
        return redirect('articles/home');
   		
   	}
}
