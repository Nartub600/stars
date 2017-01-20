<?php

Event::listen('auth.login', function($user){
	$user->last_login = new DateTime;
	$user->ip_address = Request::getClientIp();
	$user->save();
});