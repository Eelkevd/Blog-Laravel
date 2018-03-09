<?php

// Controller for the sitemap
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Blog;

class SitemapController extends Controller
{
  // Function to create sitemap
  public function index()
  {
      $articles = Article::latest()->first();
      $blogs = Blog::latest()->first();
      return response()->view('sitemap.index', [
         'articles' => $articles,
         'blogs' => $blogs,
      ])->header('Content-Type', 'text/xml');
  }

  // Function to get sitemap of articles
  public function articles()
  {
      $articles = Article::latest()->get();
      return response()->view('sitemap.articles', [
          'articles' => $articles,
      ])->header('Content-Type', 'text/xml');
  }

  // Function to get sitemap of categories
  public function categories()
  {
      $categories = Category::all();
      return response()->view('sitemap.categories', [
          'categories' => $categories,
      ])->header('Content-Type', 'text/xml');
  }

  // Function to get sitemap of blogs
  public function blog()
  {
      $blog = Blog::latest()->get();
      return response()->view('sitemap.blogs', [
          'blogs' => $blog,
      ])->header('Content-Type', 'text/xml');
  }
}
