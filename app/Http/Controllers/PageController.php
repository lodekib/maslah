<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PageController extends Controller
{
  public function about(){
      return view('landing.about');
  }
  public function contact(){
      return view('landing.contact');
  }
  public function more(){
      $data = Property::latest()->paginate(3);
      return view('landing.more',compact('data'));
  }

  public function search(Request $request){
      $price_range = explode('-',$request->search_price);
      $properties = Property::with('images')->where('bedrooms',$request->search_bedroom)
          ->whereBetween('price',[$price_range[0],$price_range[1]])->limit(6)->get();

      return view('landing.index',compact('properties'));
  }
}
