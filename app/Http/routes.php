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


Route::get('/','PageController@Home');

Route::get('/like','PageController@Like');

Route::get('/dislike','PageController@Dislike');

Route::get('/community','PageController@Community');


Route::get('/login', 'PageController@Login');
Route::post('/login',"AdminController@Login");

Route::get('/kasba', 'PageController@Kasba');

Route::get('/mizaz', 'PageController@Mizaz');

Route::get('/ravish_ki_report', 'PageController@Mizaz');

Route::get('/hindi_patti', 'PageController@Hindi');

Route::get('/feedback', 'PageController@Feedback');
Route::post('/feedback',"PageController@postFeedback");

Route::get('/attach_files','PostController@Attach');
Route::post('/attach_files',"PostController@postAttach");

Route::get('/admin_kasba',"PostController@Kasba");
Route::post('/admin_kasba',"PostController@postKasba");

Route::get('/admin_mizaz',"PostController@Mizaz");
Route::post('/admin_mizaz',"PostController@postMizaz");

Route::get('/admin_ravish_ki_report',"PostController@Ravish");
Route::post('/admin_ravish_ki_report',"PostController@postKasba");

Route::get('/admin_hindi_patti',"PostController@Hindi");
Route::post('/admin_hindi_patti',"PostController@postHindi");

Route::get('/admin_nai_sadak',"AdminController@Home");
Route::post('/admin_nai_sadak',"AdminController@postHome");

Route::get('/admin',"AdminController@Admin");
Route::post('/admin',"AdminController@postAdmin");

Route::get('/post',"AdminController@Post");
Route::post('/post_status',"AdminController@Post");

Route::get('/post_status',"AdminController@Status");
Route::post('/post_status',"AdminController@postStatus");

Route::get('/event',"AdminController@Event");
Route::post('/event',"AdminController@postEvent");


Route::get('/logout','@Logout');
