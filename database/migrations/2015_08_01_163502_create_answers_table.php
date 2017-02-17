<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('risposte', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('test_id');
			$table->unsignedInteger('item_id');
			$table->boolean('valore')->nullable();
		
			$table->foreign('test_id')
				  ->references('id')
				  ->on('tests')
				  ->onDelete('cascade');
		
			$table->foreign('item_id')
				  ->references('id')
				  ->on('items')
				  ->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('risposte');
	}

}