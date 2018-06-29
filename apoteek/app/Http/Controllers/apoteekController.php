<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FPDF;
use Response;
use PDF;
// require('fpdf181/fpdf.php');

class apoteekController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      return view('apoteek');
  }

  public function maakPdf(Request $request){
    require('fpdf181/fpdf.php');
    header('Content-type: application/pdf');
    $pdf = new FPDF('p', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Apoteek');
    $pdf->Output();
    exit;

    // return Response::make(PDF::load('p', 'A4', 'portrait')->show($pdf->output()), 200, $headers);

    // header($pdf->Output());

    // return view('main');

  }
}
