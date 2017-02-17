<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversioniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conversioni', function(Blueprint $table)
		{
			$table->string('codice_scala',10);
			$table->tinyInteger('punteggio_grezzo');
			$table->tinyInteger('punteggio_t');

			$table->primary(['codice_scala','punteggio_grezzo']);

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
		Schema::drop('conversioni');
	}

}
