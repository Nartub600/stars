<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	public function up() {
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('social_network');
			$table->bigInteger('social_network_id')->unsigned()->nullable();
			$table->string('name');
			$table->string('email');
			$table->string('ip_address');
			$table->timestamp('last_login');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down() {
		Schema::drop('users');
	}

}