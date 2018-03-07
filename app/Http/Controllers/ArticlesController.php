<?php

// Controller of the articles section
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity ;
use App\Blog;
use App\Category;
use App\Article;
use Request;

class ArticlesController extends Controller
{
    // Function to check login
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    // Function to get all articles with latest on top
    public function blogs()
    {
		  $articles = Article::latest()->get();
    	return view('articles.blogs', compact('articles'));
    }

    // Function to show specific article
    public function show(Article $article)
    {
      // log view of the page with path and id of the visited article
      activity()
       ->performedOn($article)
       ->withProperties(['path' => Request::path()])
       ->log('pageview');

	     return view('articles.show', compact('article'));
    }

    // Function to go back to homepage
    public function home()
    {
        $articles = Article::latest()
        ->filter(request(['month', 'year']))
        ->get();

        return view('articles.blogs', compact('articles'));
    }

    // Function to go to categories page
    public function categories()
    {
        $categories = Category::get();
        return view('articles.categories', compact('categories'));
    }

    // Function to create new article
    public function create()
    {
        $userid = Auth::id();
        $blog = Blog::where('user_id', $userid)->first();
        $blog_id = $blog['id'];
        $num_articles = Article::where('user_id', $userid)->count();
        $categories = Category::all();
        $payed =DB::table('users')->where('id', $userid)->pluck('payed')->first();
        return view('articles.create', compact('userid', 'blog_id', 'num_articles', 'categories', 'payed'));
    }

    // Function to validate & store new article in database and redirect to homepage
    public function store(Request $request)
    {
    	// create a new article/blog
        $request->validate([
            'title'  => 'required',
            'bodytext'  => 'required'
        ]);

        $article = Article::create(request(['blog_id', 'user_id', 'title', 'bodytext']));
        $article->categories()->attach($request->subscribe);
    	return redirect('articles/home');
    }

}
