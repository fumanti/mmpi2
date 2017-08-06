<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Scala as Scala;

class CreateInterpretazioneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Scale di validità 
		// Schema::create('validita', function(Blueprint $table)
		// {
		// 	$table->increments('id');
		// 	$table->string('codice_scala');
		// 	$table->tinyInteger('punti_min')->nullable();
		// 	$table->tinyInteger('punti_max')->nullable();
		// 	$table->string('minacce', 500)->nullable();
		// 	$table->string('motivo', 500)->nullable();
		// 	$table->string('implicazioni', 500)->nullable();

		// 	$table->foreign('codice_scala')
		// 	      ->references('codice')
		// 	      ->on('scale')
		// 	      ->onDelete('cascade');

		// });

		// // Scale Interpretazione
		// Schema::create('interpretazione', function(Blueprint $table)
		// {
		// 	$table->increments('id');
		// 	$table->string('codice_scala');
		// 	$table->tinyInteger('punti_min')->nullable();
		// 	$table->tinyInteger('punti_max')->nullable();
		// 	$table->string('sintomi', 500)->nullable();
		// 	$table->string('correlati', 500)->nullable();
		// 	$table->string('diagnosi', 500)->nullable();
		// 	$table->string('trattamento', 500)->nullable();

		// 	$table->foreign('codice_scala')
		// 	      ->references('codice')
		// 	      ->on('scale')
		// 	      ->onDelete('cascade');

		// });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::drop('interpretazione');
		// Schema::drop('validita');
	}

}
