<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','PageController@index');

Route::get('/like','PageController@Like');

Route::get('/dislike','PageController@Dislike');

Route::get('/community','PageController@Community');




/*
Admin routes
*/
Route::group(array('prefix' => 'admin'), function(){
  Route::get('/',"AdminController@index");

  Route::get('/posts',"AdminController@getPost");
  Route::get('/category',"AdminController@getCategory");

});

Route::get('/logout','@Logout');
