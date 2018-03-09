<?php

// Controller of the events
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Calendar;
use App\Event;
use App\Blog;
use App\Category;
use App\Article;

class EventController extends Controller 
{
    // Function to check login
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    // Function to store new event
    public function store(Request $request)
    {
        $userid = Auth::id();
        $user = DB::table('users')->where('id', $userid)->first();
        $blogger = $user->name;
        $event_name= $request->title;
        $title = $blogger . ":" . " " . $event_name;
        
        $request->merge(['title' => $title]);
    	$request->validate([
            'title'  => 'required',
            'start_date'  => 'required',
            'end_date'  => 'required',
        ]);

        $event = Event::create(request(['title', 'start_date', 'end_date'])); 
        return redirect('/event');
    }

    // Function to create new event
    public function create() 
    {
  	return view('articles.create_event');
    }

    // Function to load event page 
    public function index()
    {
       $events = [];
       $data = Event::all();
       if($data->count())
       { 
          foreach ($data as $key => $value) 
          {
              $events[] = Calendar::event
              (
                  $value->title,
                  true,
                  new \DateTime($value->start_date),
                  new \DateTime($value->end_date.' +1 day')
              );
          }
       }
      $calendar = Calendar::addEvents($events); 
      return view('articles.event', compact('calendar'));
    }
}
