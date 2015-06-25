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

/* Temporary routes */
Route::get('/', function()
{
	$data = [];
    return view('home', $data);
});

Route::get('dashboard', ['middleware' => 'auth', function()
{
	$data = [
		'name' => 'John Doe',
	];

    return view('dashboard', $data);
}]);

Route::get('browse', ['middleware' => 'auth',  function()
{
	$data = [];
    return view('browse', $data);
}]);

Route::get('forum', ['middleware' => 'auth', function()
{
	$data = [];
    return view('forum', $data);
}]);


Route::resource('decks', 'DeckController');

/* middleware is not working
Route::resource('flashcards', ['middleware' => 'auth', 'uses' => 'FlashcardController']);
Route::resource('notes', ['middleware' => 'auth', 'uses' => 'ForumController']);
Route::resource('comments', ['middleware' => 'auth', 'uses' => 'MessageController']);
Route::resource('posts', ['middleware' => 'auth', 'uses' => 'PostController']);
Route::resource('reviews', ['middleware' => 'auth', 'uses' => 'ReviewController']);
*/
// Authentication routes... 
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
