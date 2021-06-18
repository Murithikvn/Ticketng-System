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
   //create function that returns contacts page
   public function contacts()
   {
       return view('contacts');
   }

    //create function that returns archives page
  public function archives()
  {
      return view('archives');
  }

}
