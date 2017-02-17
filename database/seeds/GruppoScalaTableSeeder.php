<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\GruppoScala as GruppoScala;

class GruppoScalaTableSeeder extends Seeder {
	public function run() {
		//GruppoScala::truncate();
		GruppoScala::create(['descrizione'=>'Scale di Validità']);
		GruppoScala::create(['descrizione'=>'Scale Sovraordinate (H-O)']);
		GruppoScala::create(['descrizione'=>'Scale Cliniche Ristrutturate (RC)']);
		GruppoScala::create(['descrizione'=>'Scale Somatico/Cognitive']);
		GruppoScala::create(['descrizione'=>'Scale di Internalizzazione']);
		GruppoScala::create(['descrizione'=>'Scale di Esternalizzazione']);
		GruppoScala::create(['descrizione'=>'Scale Interpersonali']);
		GruppoScala::create(['descrizione'=>'Scale di Interessi']);
		GruppoScala::create(['descrizione'=>'Scale PSY-5']);
	}

}
