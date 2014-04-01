<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Eager Loading Testing–Uncomment to Log Eloquent Queries 
Event::listen('illuminate.query', function($sql, $bindings, $time){
  Log::info($sql);
  Log::info(implode($bindings, ', '));
});

// Routing Resource Controllers
Route::resource('posts', 'PostsController');

// Laravel greeting page
Route::get('/', 'HomeController@showWelcome');

// farewell message
Route::get('/bye', 'HomeController@sayGoodbye');

// Resumé page
Route::get('/resume', 'HomeController@showResume');

// Portfolio page
Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('orm-test', function () {
		$posts = Post::all();
		return $posts;
	});

		// Laravel greeting page
Route::get('/login', 'HomeController@showLogin');

// Laravel greeting page
Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

?>
