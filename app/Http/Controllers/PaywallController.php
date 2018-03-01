<?php

// Controller of the paywall section
namespace App\Http\Controllers;

// composer require phpoffice/phpspreadsheet
// https://phpspreadsheet.readthedocs.io/en/develop/ 

// require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \App\Article;
use \App\User;
use \App\Paywall;
use Carbon\Carbon;

class PaywallController extends Controller
{
    // Function to check login
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'store']);
    }

    // Function to count number of articles
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

  			$paywall = new Paywall;
  			$paywall->IBAN = $request->IBAN;
        $paywall->BIC = "";
        $paywall->mandaatid = substr(uniqid(rand(), true), 6, 6); // 6 characters long
        $paywall->mandaatdatum = new Carbon();
        $paywall->bedrag = "9.99";
        $paywall->naam = $request->naam;
        $paywall->beschrijving = "First Blog payment";
        $paywall->endtoendid = "";

        $is_saved = $paywall->save();

        if ($is_saved) {
            // success set boolean to true in user table
            $userid = Auth::id();
            User::where('id', $userid)->update(array('payed'=>true));
        }
        else {
            App::abort(500, 'Not saved: Error');
        }
  			return redirect("articles/create");
  	}

    public function excell() {

      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();

      //set header
      $sheet->setCellValue('A1', 'IBAN');
      $sheet->setCellValue('B1', 'BIC');
      $sheet->setCellValue('C1', 'mandaatid');
      $sheet->setCellValue('D1', 'mandaatdatum');
      $sheet->setCellValue('E1', 'bedrag');
      $sheet->setCellValue('F1', 'naam');
      $sheet->setCellValue('G1', 'beschrijving');

      // get the data from the Database where downloaded is false
      // to ensure you don't download bankdata from people who already payed
      $data = Paywall::where('downloaded', 'false')->get();

      for ($i = 0; $i < count($data); $i++){
          $excelRow = $i + 2;
          $sheet->setCellValue('A' . $excelRow, $data[$i]->IBAN);
          $sheet->setCellValue('B' . $excelRow, $data[$i]->BIC);
          $sheet->setCellValue('C' . $excelRow, $data[$i]->mandaatid);
          $sheet->setCellValue('D' . $excelRow, $data[$i]->mandaatdatum->todatestring());
          $sheet->setCellValue('E' . $excelRow, $data[$i]->bedrag);
          $sheet->setCellValue('F' . $excelRow, $data[$i]->naam);
          $sheet->setCellValue('G' . $excelRow, 'Monthly payment for you blog');
        }

      $writer = new Xlsx($spreadsheet);

      if(! $writer->save('./sepatool.xlsx')){

        return back()->withErrors([
          'message' => 'A new Excell file was created. Please download the latest excell file for Sepatool.'
        ]);

      }

    }

    public function excell_ALL() {

      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();

      //set header
      $sheet->setCellValue('A1', 'IBAN');
      $sheet->setCellValue('B1', 'BIC');
      $sheet->setCellValue('C1', 'mandaatid');
      $sheet->setCellValue('D1', 'mandaatdatum');
      $sheet->setCellValue('E1', 'bedrag');
      $sheet->setCellValue('F1', 'naam');
      $sheet->setCellValue('G1', 'beschrijving');

      // get the data from the Database where downloaded is false
      // to ensure you don't download bankdata from people who already payed
      $data = Paywall::get();

      for ($i = 0; $i < count($data); $i++){
          $excelRow = $i + 2;
          $sheet->setCellValue('A' . $excelRow, $data[$i]->IBAN);
          $sheet->setCellValue('B' . $excelRow, $data[$i]->BIC);
          $sheet->setCellValue('C' . $excelRow, $data[$i]->mandaatid);
          $sheet->setCellValue('D' . $excelRow, $data[$i]->mandaatdatum->todatestring());
          $sheet->setCellValue('E' . $excelRow, $data[$i]->bedrag);
          $sheet->setCellValue('F' . $excelRow, $data[$i]->naam);
          $sheet->setCellValue('G' . $excelRow, 'Monthly payment for you blog');
        }

      $writer = new Xlsx($spreadsheet);

      if(! $writer->save('./all_bank_data.xlsx')){

        return back()->withErrors([
          'message' => 'A new Excell file with all bank data was created.'
        ]);

      }

    }

}
