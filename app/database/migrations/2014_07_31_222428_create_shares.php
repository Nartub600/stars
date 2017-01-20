<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShares extends Migration {

	public function up() {
		Schema::create('shares', function($table){
			$table->increments('id');
			$table->integer('promise_id')->unsigned();
			$table->string('social_network');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down() {
		Schema::drop('shares');
	}

}