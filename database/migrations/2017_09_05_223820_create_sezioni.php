<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Sezione as Sezione;
use App\Models\Scala as Scala;


class CreateSezioni extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sezioni', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descrizione',200);
		});

		Sezione::create(['id'=>1, 'descrizione'=>'Stile di risposta che non considera il contenuto']);
		Sezione::create(['id'=>2, 'descrizione'=>'Esagerazione']);
		Sezione::create(['id'=>3, 'descrizione'=>'Minimizzazione dei sintomi']);
		Sezione::create(['id'=>4, 'descrizione'=>'Disfunzioni Somatico/Cognitive']);
		Sezione::create(['id'=>5, 'descrizione'=>'Disfunzioni emozionali']);
		Sezione::create(['id'=>6, 'descrizione'=>'Disfunzioni del pensiero']);
		Sezione::create(['id'=>7, 'descrizione'=>'Disfunzioni comportamentali']);
		Sezione::create(['id'=>8, 'descrizione'=>'Funzionamento interpersonale']);
		Sezione::create(['id'=>9, 'descrizione'=>'Interessi']);

		Schema::table('scale', function($table) {
        	$table->unsignedInteger('sezione_id')->after('gruppo_scala_id');
    	});	

		Scala::whereIn('codice', ["CNS", "VRIN-r", "TRIN-r"])->update(['sezione_id'=> 1]);
		Scala::whereIn('codice', ["F-r", "Fp-r", "FS", "FBS-r", "RBS"])->update(['sezione_id'=> 2]);
		Scala::whereIn('codice', ["L-r", "K-r"])->update(['sezione_id'=> 3]);
		Scala::whereIn('codice', ["RC1", "MLS", "GIC", "HPC", "NUC", "COG"])->update(['sezione_id'=> 4]);
		Scala::whereIn('codice', ["EID", "RCd", "SUI", "HLP", "SFD", "NFC", "RC2", "RC7", "STW", "AXY", "ANP", "BRF", "MSF", "NEGE-r", "INTR-r"])->update(['sezione_id'=> 5]);
		Scala::whereIn('codice', ["THD", "RC6", "RC8", "PSYC-r"])->update(['sezione_id'=> 6]);
		Scala::whereIn('codice', ["BXD", "RC4", "JCP", "SUB", "RC9", "AGG", "ACT", "AGGR-r", "DISC-r"])->update(['sezione_id'=> 7]);
		Scala::whereIn('codice', ["FML", "RC3", "IPP", "SAV", "SHY", "DSF"])->update(['sezione_id'=> 8]);
		Scala::whereIn('codice', ["AES", "MEC"])->update(['sezione_id'=> 9]);

		Schema::table('scale', function(Blueprint $table) {
		    $table->foreign('sezione_id')->references('id')->on('sezioni');
    	});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('scale', function($table) {
        	$table->dropColumn('sezione_id');
    	});

		Schema::drop('sezioni');
	}

}
