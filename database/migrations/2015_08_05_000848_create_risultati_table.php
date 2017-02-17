<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRisultatiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('risultati', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('test_id');
			$table->string('codice_scala',10);
			$table->tinyInteger('punteggio_grezzo');
			$table->tinyInteger('punteggio_t')->nullable;
			$table->tinyInteger('percentuale_risposte');
			$table->timestamps();

			$table->foreign('test_id')
			   	  ->references('id')
			      ->on('tests')
			      ->onDelete('cascade');

			$table->foreign('codice_scala')
				  ->references('codice')
				  ->on('scale')
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
		Schema::drop('risultati');
	}

}
