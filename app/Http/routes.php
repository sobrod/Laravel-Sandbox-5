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

Route::get('/', "Auth\AuthController@getLogin");

Route::get('contact', 'WelcomeController@contact');

Route::get("about", "PagesController@about");

Route::get('people', 'PagesController@people');

Route::get('home', 'ArticlesController@index');

/*
|--------------------------------------------------------------------------
| Authentication routes
|--------------------------------------------------------------------------
|
| Authentication routes
|
*/

Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);


/*
|--------------------------------------------------------------------------
| Article routes
|--------------------------------------------------------------------------
|
| Article routes
|
*/

//Note:  You cant create all the REST routes with Route::resource();
//Route::resource('articles', 'ArticlesController');

Route::get('articles', 'ArticlesController@index'); //Articles home
Route::get('articles/create', 'ArticlesController@create'); //Create a new article
//Post to the class when saving a new object and using REST.
Route::post('articles', 'ArticlesController@store');  //Save a new article.

//NOTE: Wild card routes should always be last since articles/create will match articles/{id}.
Route::get('articles/{id}', 'ArticlesController@show'); //Show selected article
Route::get('articles/{id}/edit', 'ArticlesController@edit');
Route::patch('articles/{id}/update', 'ArticlesController@update');


