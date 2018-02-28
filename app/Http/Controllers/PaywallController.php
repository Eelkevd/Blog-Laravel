<?php

namespace App\Http\Controllers;
namespace App;

use Illuminate\Http\Request;
use App\Article;
use App\Blog;

class PaywallController extends Controller
{
    public function count()
    {

     $num_articles = Category::withCount('articles')->get();
     return view('articles.blogs', compact('articles'));

    }

    public function store(Request $request)
  		{
  			$this->validate(request(), [
  				'naam' => 'required',
  				'IBAN' => 'required'
  			]);

        // Get all existing numbers in database
        $m_ids = Paywall::pluck('mandaatid');

        // Generate a new unique number
        do {
            $$mandaatid = rand(1000, 9999);
        } while (in_array($$mandaatid, $m_ids));

  			$paywall = new Paywall;
  			$paywall->IBAN = $request->IBAN;
        $paywall->BIC = $request->BIC;
        $paywall->mandaatid = $mandaatid;
        $paywall->mandaatdatum = NOW();
        $paywall->bedrag = "9,99";
        $paywall->naam = $request->naam;
        $paywall->beschrijving = "First Blog payment";
        $paywall->endtoendid = '';

  			$paywall->save();

  			return redirect("articles/create");
  		}

}
