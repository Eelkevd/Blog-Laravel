<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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


	public function show(Blog $blog)
		{

			return view('blogs.show', compact('blog'));
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
