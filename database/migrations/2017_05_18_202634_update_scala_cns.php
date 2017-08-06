<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Scala as Scala;
use App\Models\Condizione as Condizione;
use App\Models\Risultato as Risultato;

class UpdateScalaCns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Crea la scala CNS se non esiste nel database
		if(Scala::where(['codice'=>'CNS'])->count()==0)
		{
			Scala::create(['id'=>0, 'codice'=>'CNS', 'ordine'=>0, 'gruppo_scala_id'=>1, 'descrizione'=>'Non so', 'media'=>0, 'deviazione_standard'=>0]);
		}

		// Rende le colonne nullable
		Schema::table('risultati', function (Blueprint $table) {
    		$table->boolean('punteggio_t')->nullable()->change();				// boolean come sinonimo di tinyInteger
    		$table->smallInteger('punteggio_grezzo')->nullable()->change();
    		$table->boolean('percentuale_risposte')->nullable()->change();		// boolean come sinonimo di tinyInteger
		});

		// Popola le condizioni (= valore 2, non ha risposto) - viene poi convertito da NULL a 2 in fase di salvataggio
		$start = 887;
		for($z = 1; $z <= 338; $z++)
		{
			Condizione::create(['id'=>$start+$z, 'codice_scala'=>'CNS', 'set'=>0, 'item_id'=>$z, 'valore_richiesto'=>2]);
		}

		// Aggiornamento DB con i risultati
        $risposte = DB::select('SELECT t.id as test_id, IFNULL(r.non_risp,0) as non_risp '.
								'FROM new.tests t ' .
								'LEFT JOIN ( '.
								'SELECT test_id, COUNT(*) as non_risp '.
							 	'FROM new.risposte '.
								'WHERE valore IS NULL '. 
							    'GROUP BY test_id '.
								') r ON r.test_id = t.id '.
        						'WHERE EXISTS(SELECT 1 from new.risultati where test_id = t.id)'
        );
        foreach ($risposte as $risposta) {
        		Risultato::create(['test_id'=>$risposta->test_id, 'codice_scala'=>'CNS', 'punteggio_grezzo'=>$risposta->non_risp, 'punteggio_t'=>NULL, 'percentuale_risposte'=>NULL]);
        }

        // Aggiornamento DB per le condizioni (FP-r)
        DB::statement('UPDATE new.condizioni set codice_scala = \'Fp-r\' where codice_scala = \'FP-r\'');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Elimina le voci
		Scala::destroy(0);
		Condizione::where(['codice_scala'=>'CNS'])->forceDelete();
		Risultato::where(['codice_scala'=>'CNS'])->forceDelete();

	}

}
