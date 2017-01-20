<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromises extends Migration {

	public function up() {
		Schema::create('promises', function($table){
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable();
			$table->text('text');
			$table->boolean('flagged')->default(false);
			$table->boolean('official')->default(false);
			$table->string('url');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down() {
		Schema::drop('promises');
	}

}