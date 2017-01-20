<?php

class Share extends Eloquent {

	protected $table = 'shares';
	use SoftDeletingTrait;

	protected $fillable = array('promise_id', 'social_network');

}