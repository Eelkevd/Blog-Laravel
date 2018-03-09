<?php

// Controller of the blogs section
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \App\Article;
use \App\User;
use \App\Blog;

class BlogController extends Controller
{
	// Function to show all blogs
	public function index()
	{
		$blogs = Blog::latest()->get();
		return view('blogs.index', compact('blogs'));
	}

	// Function to show specific blog and articles with it
	public function show(Blog $blog)
	{
		$articles = DB::table('articles')->orderBy('average_rating', 'desc')->where ('blog_id', $blog->id)->get();
		return view('blogs.show', compact('blog', 'articles'));
	}

	// Function to validate & store new blog in database and redirect to homepage
	public function create(Request $request)
	{
		$this->validate(request(), [
			'title' => 'required',
			'subject' => 'required'
		]);

		$blog = new Blog;
		$blog->titel = $request->title;
		$blog->subject = $request->subject;
		$blog->save();
		$blog->users()->attach(request('user_id'));
		return redirect("/");
	}
}
