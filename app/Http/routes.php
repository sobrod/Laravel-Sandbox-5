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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', "WelcomeController@index");

Route::get('contact', 'WelcomeController@contact');

Route::get("about", "PagesController@about");

Route::get('people', 'PagesController@people');

/*
|--------------------------------------------------------------------------
| Article routes
|--------------------------------------------------------------------------
|
| Article routes
|
*/

Route::get('articles', 'ArticlesController@index'); //Articles home
Route::get('articles/{id}', 'ArticlesController@show'); //Show selected article
