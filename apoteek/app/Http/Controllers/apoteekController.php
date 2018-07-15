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
    $pdf->SetFont('Arial','',16);

    $header=array('Potentie','Antwoord');

    $pdf->Cell(0,10,'Apoteek', 0, 0 , 'C');


    //De beschrijving van de patient
    $beschrijvingpadding = 50;
    $hgtPadding = 8;
    $pdf->Ln(10);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Voornaam: ");
    $pdf->Cell(5,10, $request->input('fname'));
    $pdf->Ln(10);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Achternaam: ");
    $pdf->Cell(40,10, $request->input('lname'));//Bo
    $pdf->Ln(10);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Leeftijd: ");
    $pdf->Cell(40,10, $request->input('age'));
    $pdf->Ln(10);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"E-mail: ");
    $pdf->Cell(40,10, $request->input('emailJij'));
    $pdf->Ln(10);
    $pdf->Ln(10);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Uw arts: ");
    $pdf->Cell(40,10, $request->input('emailDoc'));






    //Exit function fpdf. En maak de pdf aan
    $pdf->Output();
    exit;






    // return Response::make(PDF::load('p', 'A4', 'portrait')->show($pdf->output()), 200, $headers);

    // header($pdf->Output());

    // return view('main');

  // public function redirect()
  // {
  //   return redirect('/apoteek');
  // }
  }
}
