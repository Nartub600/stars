<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	protected $table = 'users';

	protected $hidden = array('password', 'remember_token', 'email');

	protected $fillable = array('social_network', 'social_network_id', 'name', 'email', 'profile_picture', 'official');

	public function promise() {
		return $this->hasOne('Promise', 'user_id', 'id');
	}

	public function zipData() {
		return $this->hasOne('Zip', 'zip', 'zip');
	}

}