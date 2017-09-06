<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SezioniTableSeeder extends Seeder {
	public function run() {
		Sezione::create(['id'=>1, 'descrizione'=>'Stile di risposta che non considera il contenuto']);
		Sezione::create(['id'=>2, 'descrizione'=>'Esagerazione']);
		Sezione::create(['id'=>3, 'descrizione'=>'Minimizzazione dei sintomi']);
		Sezione::create(['id'=>3, 'descrizione'=>'Disfunzioni Somatico/Cognitive']);
		Sezione::create(['id'=>3, 'descrizione'=>'Disfunzioni emozionali']);
		Sezione::create(['id'=>3, 'descrizione'=>'Disfunzioni del pensiero']);
		Sezione::create(['id'=>3, 'descrizione'=>'Disfunzioni comportamentali']);
		Sezione::create(['id'=>3, 'descrizione'=>'Funzionamento interpersonale']);
		Sezione::create(['id'=>3, 'descrizione'=>'Interessi']);
	}
}