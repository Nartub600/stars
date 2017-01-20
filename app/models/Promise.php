<?php

class Promise extends Eloquent {

	protected $table = 'promises';
	use SoftDeletingTrait;

	protected $fillable = array('user_id', 'text', 'official');

	public function user() {
		return $this->belongsTo('User', 'user_id', 'id');
	}

	public function shares() {
		return $this->hasMany('Share', 'promise_id', 'id');
	}

}