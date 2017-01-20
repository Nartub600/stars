<?php

class Entry extends Eloquent {

	protected $table = 'entries';
	use SoftDeletingTrait;

	protected $fillable = array('first_name', 'last_name', 'email', 'address', 'state', 'zip', 'subscription');

}