<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Article;
use \App\User;
use \App\Paywall;

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

        $mandaatid = \DB::table('paywalls')->pluck('id');

  			$paywall = new Paywall;
  			$paywall->IBAN = $request->IBAN;
        $paywall->BIC = '';
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
