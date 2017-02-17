<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSecondCounter extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('test_counter', function(Blueprint $table)
		{
			$table->increments('id')->first();
			$table->tinyInteger('calcoli')->after('test_id')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('test_counter', function(Blueprint $table)
		{
			//
		});
	}

}
