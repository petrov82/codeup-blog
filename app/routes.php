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

// farewell message
Route::get('/bye', function()
{
	return ('Goodbye!');
});

// sayHello with array logic
Route::get('/sayhello/{name}', 'HomeController@sayHello');

// say hello logic practice
// Route::get('/sayhello', function()
// {
//     return "Hello, Codeup!";
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     return "Hello, $name!";
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris")
//     {
//         return Redirect::to('/');
//     }
//     else
//     {
//         return "Hello, $name!";
//     }
// });

// Resumé page
Route::get('/resume', function()
{
    return View::make('resume');
});

// Portfolio page
Route::get('/portfolio', function()
{
	return View::make('portfolio');
});


// two dice game variants w/ or w/o bootstrap
Route::get('/rolldice/{guess?}', function($guess = null)
{

	$roll = mt_rand(1, SIDES_OF_DICE);

	$didroll = "Have";

	$result = "";

	if (is_null($guess) || (!is_numeric($guess)))
	{
		$didroll = "Have Not";
		$result = "You must guess a number, or be cast into the gorge of eternal peril! You could have guessed $roll!";
	}
	elseif ($guess == $roll) 
	{
		$result = "You have guessed correctly, padawan! $guess is the correct number!";
	}
	else
	{
		$result = "You have chosen $guess unwisely. The correct answer is $roll.";
	}


	$data = array(
		'guess' => $guess,
		'result' => $result,
		'roll' => $roll,
		'didroll' => $didroll
	);

	return View::make('rolldice')->with($data);
});

Route::get('/rollagain/{guess?}', function($guess = null)
{

	$roll = mt_rand(1, SIDES_OF_DICE);

	$didroll = "Have";

	$result = "";

	if (is_null($guess) || (!is_numeric($guess)))
	{
		$didroll = "Have Not";
		$result = "You must guess a number, or be cast into the gorge of eternal peril! You could have guessed $roll!";
	}
	elseif ($guess == $roll) 
	{
		$result = "You have guessed correctly, padawan! $guess is the correct number!";
	}
	else
	{
		$result = "You have chosen $guess unwisely. The correct answer is $roll.";
	}


	$data = array(
		'guess' => $guess,
		'result' => $result,
		'roll' => $roll,
		'didroll' => $didroll
	);

	return View::make('rollagain')->with($data);
});
