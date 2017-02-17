<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestCounter extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('test_counter', function(Blueprint $table)
		{
			$table->unsignedInteger('user_id');
			$table->unsignedInteger('test_id')->nullable();
			$table->tinyInteger('correzioni')->nullable();
					
			$table->foreign('test_id')
	  		  	->references('id')
		  	  	->on('tests')
		  	  	->onDelete('set null');
			$table->foreign('user_id')
	  		  	->references('id')
		  	  	->on('users');
	  		
	  		$timestamps = false;	  		

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('test_counter');
	}

}
