<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tests', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('cognome', 100);
			$table->string('nome', 100);
			$table->string('data_nascita', 100);
			$table->string('sesso', 1);
			$table->string('data_somministrazione');
			$table->unsignedInteger('id_user')->nullable();
			
			$table->foreign('id_user')
			      ->references('id')
			      ->on('users')
			      ->onDelete('set null');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tests');
	}

}
