<?php

Route::get('/', function(){
	return View::make('hello');
});

Route::get('facebook', 'FacebookController@loginHandler');

Route::get('tumblr', 'TumblrController@loginHandler');

Route::get('twitter', 'TwitterController@loginHandler');

Route::get('session', function(){
	if(!App::environment('local')) { echo('<pre>'); }
	var_dump(Session::all());
});

Route::get('migrate', function(){
	define('STDIN',fopen("php://stdin","r"));
	Artisan::call('migrate', ['--force' => true]);
});