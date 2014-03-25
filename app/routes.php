<?php

define ('SIDES_OF_DICE', 6);

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

// Laravel greeting page
Route::get('/', 'HomeController@showWelcome');

// redirect to WP
Route::get('/blog', 'HomeController@redirectWP');

// farewell message
Route::get('/bye', 'HomeController@sayGoodbye');

// sayHello with array logic
Route::get('/sayhello/{name}', 'HomeController@sayHello');

// say hello logic practice
Route::get('/codeup', 'HomeController@helloCodeup');

// Resumé page
Route::get('/resume', 'HomeController@showResume');

// Portfolio page
Route::get('/portfolio', 'HomeController@showPortfolio');

// two dice game variants w/ or w/o bootstrap
Route::get('/rolldice/{guess?}', 'HomeController@rollDice');
