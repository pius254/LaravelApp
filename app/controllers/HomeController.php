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
		$painting = new Paintings;
		$painting->title = 'Do No Wrong';
		$painting->artist = 'PIUS';
		$painting-> year = 2016;
		$painting->save();
		
		return View::make('hello');
	}

}
