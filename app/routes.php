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

Route::get('/', function()
{
	return View::make('hello');
});

/*

Route::post('thanks', function(){
	$theEmail = Input::get('email');
	return View::make('thanks')->with('theEmail', $theEmail);
});*/

Route::get('/register', 'RegisterController@showRegister');

Route::post('/register', 'RegisterController@doRegister');

Route::get('/login', function(){
	return View::make('login');
});

Route::post('/login', function(){
	$credentials = Input::only('username', 'password');
	if(Auth::attempt($credentials)){
		return Redirect::intended('/');
	}
	return Redirect::to('login');
});

Route::get('/logout', function(){
	Auth::logout();
	return View::make('logout');
});

Route::get('signup', array(
	'before' => 'auth',
	function()
	{
	return View::make('signup');
}));