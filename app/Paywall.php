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

    public function excell {

      $arrayData = [
      [IBAN, BIC, mandaatid, mandaatdatum, bedrag, naam, beschrijving, endtoendid],
      ['iban', 'bic', 12, 15, '9.99', 'naam', 'beschrijving', NULL],

    ];

      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet()
      ->fromArray(
        $arrayData, NULL, 'A1'
        );
      $writer = new Xlsx($spreadsheet);
      $writer-<save('bills/firstbill.xlsx');

    }

}
