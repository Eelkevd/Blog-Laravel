<?php

namespace App;

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
      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();
      $sheet->setCellValue('A1', 'IBAN');

      $writer = new Xlsx($spreadsheet);
      $writer-<save('bills/firstbill.xlsx');
      
    }



}
