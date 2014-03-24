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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/bye', function()
{
	return ('Goodbye!');
});

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

Route::get('/resume', function()
{
    return "This is my resumé.";
});

Route::get('/portfolio', function()
{
    return "This is my portfolio!";
});

Route::get('/sayhello/{name}', function($name)
{
	$data = array('name' => $name,
	);

	return View::make('my-first-view')->with('name', $name);
});

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
