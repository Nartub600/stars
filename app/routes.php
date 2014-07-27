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

Route::get('/', function(){
	return View::make('hello');
});

Route::get('tumblr', function(){
	return View::make('tumblr');
});

Route::get('twitter', function(){
	$tw = OAuth::consumer('Twitter');

	$reqToken = $tw->requestRequestToken();

	// get Authorization Uri sending the request token
	$url = $tw->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));

	// return to twitter login url
	return Redirect::to((string) $url);
});

Route::get('twitter_post', function(){
	echo('volvió de twitter');
});