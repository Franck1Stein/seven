<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UserController@index');

Route::post('/upload', function(Request $request) {
  $request->image->store('images', 'public');
  // dd( $request->hasFile('image') );
  return 'Uploaded';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
