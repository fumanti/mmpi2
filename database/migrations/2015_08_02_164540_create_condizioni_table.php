<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondizioniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('condizioni', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codice_scala',10);
			$table->smallInteger('set')->default(0);
			$table->unsignedInteger('item_id');
			$table->boolean('valore_richiesto');
			$table->tinyInteger('punteggio_assegnato')->default(1);

			$table->foreign('codice_scala')
				  ->references('codice')
				  ->on('scale')
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
		Schema::drop('condizioni');
	}

}
