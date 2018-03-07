<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class StatsController extends Controller
{
  public function show(){
    $lastLoggedActivity = Activity::all();

    return view('owner.stats', compact('lastLoggedActivity'));
    }
}
