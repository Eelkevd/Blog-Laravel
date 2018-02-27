<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Blog;

class PaywallController extends Controller
{
     $num_articles = Category::withCount('articles')->get();
     return view('articles.blogs', compact('articles'));
}
