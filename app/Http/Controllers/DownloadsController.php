<?php

// Controller of the downloads for paywall administration
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Paywall;
use Carbon\Carbon;

class DownloadsController extends Controller
{
    // Function to download excel file and delete the file afterwards
    public function download($file_name) 
    {  
    $file_path = $file_name;
    return response()->download($file_path)->deleteFileAfterSend(true);
    }
}
