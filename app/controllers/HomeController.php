<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function redirectWP()
	{
		return Redirect::to('http://peterrhodes.net');
	}

	public function sayGoodbye()
	{
		return ('Goodbye!');
	}

	public function helloCodeup()
	{
		return "Hello, CodeUp!";
	}

	public function sayHello($name)
	{
		$data = array('name' => $name);

		return View::make('my-first-view')->with($data);
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function rollDice($guess = null)
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
	}

}
