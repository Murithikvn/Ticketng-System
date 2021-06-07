<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function dashboard()
  {
      # code...
      $content="The content of dashboard will appere here";
      return view('dashboard')->with(compact('content'));
  }
  //create function that returns tickets page
  public function tickets()
  {
      return view('ticket');
  }
}
