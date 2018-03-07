<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Blog;

class SitemapController extends Controller
{
  public function index()
  {
    $articles = Article::latest()->first();
    $blogs = Blog::latest()->first();

    return response()->view('sitemap.index', [
        'articles' => $articles,
        'blogs' => $blogs,
    ])->header('Content-Type', 'text/xml');
  }

<<<<<<< HEAD
  public function articles()
  {
      $articles = Article::latest()->get();
      return response()->view('sitemap.articles', [
          'articles' => $articles,
=======
  public function posts()
  {
      $article = Article::all()->where('category_id', '!=', 21)->get();
      return response()->view('sitemap.posts', [
          'articles' => $article,
>>>>>>> working XML file (index) with latest updated aricle and blog
      ])->header('Content-Type', 'text/xml');
  }

  public function categories()
  {
      $categories = Category::all();
      return response()->view('sitemap.categories', [
          'categories' => $categories,
      ])->header('Content-Type', 'text/xml');
  }

<<<<<<< HEAD
  public function blogs()
  {
      $blog = Blog::latest()->get();
=======
  public function blog()
  {
      $blog = Blog::active()->orderBy('updated_at', 'desc')->get();
>>>>>>> working XML file (index) with latest updated aricle and blog
      return response()->view('sitemap.blogs', [
          'blogs' => $blog,
      ])->header('Content-Type', 'text/xml');
  }
}
