<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearUsuarios extends Migration {

	public function up() {
		Schema::create('usuarios', function($table){
			$table->increments('id');
			$table->string('nombre');
		});
	}

	public function down() {
		Schema::drop('usuarios');
	}

}