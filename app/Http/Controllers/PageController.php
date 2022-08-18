<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function about(){
      return view('landing.about');
  }
  public function contact(){
      return view('landing.contact');
  }
}
