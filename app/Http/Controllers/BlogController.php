<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \App\Article;
use \App\User;
use \App\Blog;

class BlogController extends Controller
{

	public function index()
		{
			$blogs = Blog::latest()
			->get();

			return view('blogs.index', compact('blogs'));
		}


		// Function to show specific blog and articles with it
	public function show(Blog $blog)
		{
			$articles = $blog->articles->sortByDesc('created_at');

			return view('blogs.show', compact('blog', 'articles'));
		}

	public function create()
		{

			return view('blogs.create');
		}


	public function store(Request $request)
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
