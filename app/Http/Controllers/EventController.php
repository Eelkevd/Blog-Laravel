<?php
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

class EventController extends controller {

	public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    public function store(Request $request)
    {
    	// $userid = Auth::id();
     //    $user = DB::table('users')->where('id', $userid)->first();
     //    $blogger = $user->name;

        // $userTitle = $blogger.'title';

    	$request->validate([
            'title'  => 'required',
            'start_date'  => 'required',
            'end_date'  => 'required',
        ]);

        $event = Event::create(request(['title', 'start_date', 'end_date']));
       
        return redirect('/event');
    }

	public function create() 
	{
  		return view('articles.create_event');
	}

	public function index()
    {

       $events = [];
       $data = Event::all();

       if($data->count()){
         
          foreach ($data as $key => $value) {
            $events[] = Calendar::event(

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