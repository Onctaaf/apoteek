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
      //$this->middleware('auth');
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
    $pdf->SetFont('Arial','',12);

    $header=array('Potentie','Antwoord');

    $pdf->Cell(0,10,'Apoteek', 0, 0 , 'C');


    //De beschrijving van de patient
    $beschrijvingpadding = 50;
    $hgtPadding = 8;
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Voornaam: ");
    $pdf->Cell(5,$hgtPadding, $request->input('fname'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Achternaam: ");
    $pdf->Cell(40,$hgtPadding, $request->input('lname'));//Bo
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Leeftijd: ");
    $pdf->Cell(40,$hgtPadding, $request->input('age'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"E-mail: ");
    $pdf->Cell(40,$hgtPadding, $request->input('emailJij'));
    $pdf->Ln($hgtPadding);
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Uw arts: ");
    $pdf->Cell(40,$hgtPadding, $request->input('emailDoc'));
    $pdf->Image('https://c.o0bg.com/rf/image_835w/Boston/2011-2020/2017/07/14/BostonGlobe.com/Metro/Images/06252007_25tick-5985597.jpg',120,20,-300);


    $pdf->Ln($hgtPadding);
    $pdf->Ln($hgtPadding);
    $beschrijvingpadding = 40;
    $hgtPadding = 6;
    $pdf->SetFont('Arial','',10);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Hoofdpijn: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('hoofdpijn'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Soort hoofdpijn: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('wathoofdpijn'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Moe: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('moe'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Opgemerkt: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('opgemerkt'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Verweiderd: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('verweiderd'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Huidafwijkingen: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Pijn gewrichten: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring1'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Koorts: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring2'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Gewichtsverandering: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring3'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Haarverlies: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring4'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Pijnlijke keel: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring5'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Opgezette klieren: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring6'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Pijn testikels: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring7'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Blaasfunctie: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring8'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Maagpijnen: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring9'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Hartkloppingen: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring12'));
    $pdf->Ln($hgtPadding);
    $pdf->Cell($beschrijvingpadding,$hgtPadding,"Slaapproblemen: ");
    $pdf->Cell($beschrijvingpadding,$hgtPadding, $request->input('kring19'));
    $pdf->Ln($hgtPadding);





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
