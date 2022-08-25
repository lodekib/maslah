<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PageController;
use App\Models\Property;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $properties = Property::with('images')->limit(6)->get();

    return view('landing.index',compact('properties'));
});

Auth::routes();


Route::controller(UnitController::class)->group(function(){
    Route::get('/details/{id}','details')->name('details');
    Route::get('/properties/all','properties')->name('properties.all');
    Route::get('/home','home')->name('home');
});



Route::controller(PropertyController::class)->group(function(){
    Route::get('/property/new','show')->name('property.new');
    Route::post('/new/property','store')->name('new.post');
    Route::delete('/delete/property/{id}','delete')->name('remove.property');
});

Route::controller(PageController::class)->group(function(){
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
    Route::get('/more/units','more')->name('more');
    Route::post('/search','search')->name('search');

});

Route::get('/send-notification',[NotificationController::class,'sendNotification']);

