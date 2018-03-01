<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paywall;
use Carbon\Carbon;

class DownloadsController extends Controller
{

    public function download($file_name) {
      $time = new Carbon();

      $file_path = $file_name;

      return response()->download($file_path)->deleteFileAfterSend(true);



    }

}
