<?php

namespace App\Http\Controllers;
use App\Models\Property;

use Illuminate\Http\Request;

class UnitController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function home(){
        $two = Property::where('bedrooms',2)->count();
        $three = Property::where('bedrooms',3)->count();
        $four = Property::where('bedrooms',4)->count();
        $total = Property::count();
        return view('home',['two'=>$two,'three'=>$three,'four'=>$four,'total'=>$total]);
    }

    public function details($id){
        $property = Property::with('images')->findOrFail($id);
      return view('landing.details',compact('property'));
   }


    public function properties(){
        $properties = Property::with('images')->get();
        return view('uploads',compact('properties'));
    }
}
