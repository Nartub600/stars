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

Route::get('facebook', 'FacebookController@loginHandler');

Route::get('tumblr', 'TumblrController@loginHandler');

Route::get('twitter', 'TwitterController@loginHandler');

Route::get('regreso', function(){
	$code = Input::get( 'code' );
	$token = Input::get( 'oauth_token' );
    $verify = Input::get( 'oauth_verifier' );
    var_dump($code);
    var_dump($token);
    var_dump($verify);
});