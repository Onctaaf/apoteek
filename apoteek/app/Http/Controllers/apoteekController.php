<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

  public function redirect()
  {
    return redirect('/apoteek');
  }
}
