<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scale', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codice',10);
			$table->unsignedInteger('gruppo_scala_id');
			$table->tinyInteger('ordine');
			$table->string('descrizione', 200);
			$table->decimal('media',4,2);
			$table->decimal('deviazione_standard',4,2);
			$table->tinyInteger('punteggio_base')->default(0);

			$table->unique('codice');
			
			$table->foreign('gruppo_scala_id')
			      ->references('id')
			      ->on('gruppi_scale')
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
		Schema::drop('scale');
	}

}
