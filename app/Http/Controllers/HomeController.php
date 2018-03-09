<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Function to check login 
    public function __construct()
    {
        $this->middleware('auth');
    }
}
