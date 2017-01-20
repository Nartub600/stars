<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntries extends Migration {

	public function up() {
		Schema::create('entries', function($table){
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('address');
			$table->string('state');
			$table->string('zip');
			$table->boolean('subscription');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down() {
		Schema::drop('entries');
	}

}