<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('name');
			$table->string('full_name');
			$table->string('session')->nullable();
			$table->string('reg');

			$table->string('phone')->nullable();
			$table->string('avatar_url')->nullable();
			$table->string('icon_url')->nullable();
			$table->string('remember_token')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
