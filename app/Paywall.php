<?php

namespace App;

// composer require phpoffice/phpspreadsheet -> get program
// https://phpspreadsheet.readthedocs.io/en/develop/ -> Documentation

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\writer\Xlsx;
use Illuminate\Database\Eloquent\Model;

class Paywall extends Model
{
    protected $dates = ['mandaatdatum'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }


}
