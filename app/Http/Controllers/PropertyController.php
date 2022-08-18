<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Image;

class PropertyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


   public function show(){
       return view('new_property');
   }

    public function store(Request $request){
        $this->validate($request,[
            'property_name' => ['string','required'],
            'price'=> ['numeric','required','min:1'],
            'size'=> ['numeric','required','min:1'],
            'floor'=> ['string','required'],
            'discount' => ['numeric','required'],
            'description' => ['string','required'],
            'amenities'=> ['string','required'],
            'bedrooms' => ['numeric','required','min:1'],
            'images'=>['required','array'],
            'images.*'=>['image','mimes:jpg,png,jpeg']
        ]);


        if($request->has('images') && count($request->images) == 4){
            $property =  Property::create($request->only([
                'property_name','price','floor','size','discount','description','amenities','bedrooms'
            ]));

            foreach ($request->file('images') as $imageFile){
                $image =  new Image;
                $path = $imageFile->store('/uploads/resource',['disk'=>'my_files']);
                $image->url = $path;
                $image->property_id = $property->id;
                $image->save();
            }

            return back()->with('success','Property Uploaded Sucessfully');

        }else{
            return back()->with('error','Please select  four images of the property');
        }




    }

    public function delete($id){
        $property = Property::findOrFail($id);
        if($property->images()->delete()){
            $property->delete();

            return back();
        }
    }
}
