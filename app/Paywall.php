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
      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();
      $sheet->setCellValue('A1', 'IBAN');
      $sheet->setCellValue('B1', 'BIC');
      $sheet->setCellValue('C1', 'mandaatid');
      $sheet->setCellValue('D1', 'mandaatdatum');
      $sheet->setCellValue('E1', 'bedrag');
      $sheet->setCellValue('F1', 'naam');
      $sheet->setCellValue('G1', 'beschrijving');
      $sheet->setCellValue('H1', 'endtoendid');
      $sheet->setCellValue('A2', 'IBAN');
      $sheet->setCellValue('B2', 'BIC');
      $sheet->setCellValue('C2', 'mandaatid');
      $sheet->setCellValue('D2', 'mandaatdatum');
      $sheet->setCellValue('E2', 'bedrag');
      $sheet->setCellValue('F2', 'naam');
      $sheet->setCellValue('G2', 'beschrijving');
      $sheet->setCellValue('H2', 'endtoendid');

      $writer = new Xlsx($spreadsheet);
      $writer-<save('bills/firstbill.xlsx');

    }

}
