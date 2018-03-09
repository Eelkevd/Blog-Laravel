<?php

// Controller for stats
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class StatsController extends Controller
{
    // Function to show stats
    public function show()
    {
        $lastLoggedActivity = Activity::all();
        return view('owner.stats', compact('lastLoggedActivity'));
    }
}
