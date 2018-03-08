<?php

// Controller of the articles section
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity ;
use Illuminate\Support\Facades\View;
use Request as Path;
use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use App\Article;
// Voor de site analytics is request->path nodig, maar deze werk op use Request.
// use Request en use Illuminate\http\request gaan niet samen
// dus of je kunt artikelen uploaden, of je kunt statistiek bijhouden


class ArticlesController extends Controller
{

    // Function to check login
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
        $archives = $this->archives();
        View::share('archives', $archives);
    }


    // Function to get all articles with latest on top
    public function blogs()
    {
      $articles = Article::latest()
      ->get();
    	return view('articles.blogs', compact('articles'));
    }


    // Function to show specific article
    public function show(Article $article)
    {
      // log view of the page with path and id of the visited article
      activity()
       ->performedOn($article)
       ->withProperties(['path' => Path::path()])
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
    	return redirect('articles.blogs');
    }


    public function year($year)
  	{
  		$articles = Article::Latest();
      	if ($month = request('month')) {
      		$posts->whereMonth('created_at', Carbon::parse($month)->month);
      	}
      	if ($year = request('year')) {
      		$articles->whereYear('created_at', $year);
      	}
      	$articles = $articles->get();
      	return view('articles.blogs', compact('articles'));

  	}


      private function archives()
    	{
    	    return Article::orderBy('created_at', 'desc')
    	        ->whereNotNull('created_at')
    	        ->get()
    	        ->groupBy(function(Article $article) {
    	            return $article->created_at->format('F');
    	        })
    	        ->map(function ($item) {
    	            return $item
    	                ->sortByDesc('created_at')
    	                ->groupBy( function ( $item ) {
    	                    return $item->created_at->format('Y');
    	                });

    	        });
    	}


}
