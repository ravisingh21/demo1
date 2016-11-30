<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
| Here is where you can register all of the routes for an application.It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*front page routes*/

Route::get('/','PageController@index');
Route::get('/kasba','PageController@Kasba');
Route::get('/mizaz','PageController@Mizaz');
Route::get('/ravish_ki_report','PageController@Ravish');
Route::get('/hindi_patti','PageController@Hindi');
Route::get('/community','PageController@Community');
Route::get('/feedback','PageController@Feedback');
Route::post('/feedback','PageController@Feedback');

/*----------*/

Route::get('/login','PageController@Login');
Route::post('/login','AdminController@index');

/*
Admin routes
*/
Route::group(array('prefix' => 'admin'), function(){

  Route::get('/',"AdminController@index");

  Route::group(array('prefix' => 'posts'), function()
    {
      Route::get('/',"AdminController@getPost");

      Route::get('/create','PostController@Newpost');
    });

  Route::group(array('prefix' => 'category'), function()
    {
      Route::get('/',"AdminController@getCategory");

      /*--Manage category route--*/
      Route::get('/kasba',"CategoryController@Kasba");
      Route::get('/mizaz',"CategoryController@Mizaz");
      Route::get('/hindi_patti',"CategoryController@Hindi");
      Route::get('/ravish_ki_report',"CategoryController@Ravish");
      Route::get('/create',"CategoryController@Create");

      /*--new post route--*/

      Route::get('/add_kasba','NewpostController@Kasba');
      Route::get('/add_mizaz','NewpostController@Mizaz');
      Route::get('/add_hindi','NewpostController@Hindi');
      Route::get('/add_ravish','NewpostController@Ravish');
      Route::get('/firstpost','NewpostController@Firstpost');

    });

});

Route::get('/logout','@Logout');
