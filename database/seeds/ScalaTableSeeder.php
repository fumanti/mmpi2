<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scala as Scala;

class ScalaTableSeeder extends Seeder {
	public function run() {
		//Scala::truncate();
		
		// GruppoScala 1
		Scala::create(['codice'=>'CNS', 	'ordine'=>0,	'gruppo_scala_id'=>1, 	'descrizione'=>'Non so' 	      									, 'media'=>NULL, 'deviazione_standard'=>NULL ]);
		Scala::create(['codice'=>'VRIN-r', 	'ordine'=>1,	'gruppo_scala_id'=>1, 	'descrizione'=>'Incoerenza nelle Risposte' 	      					, 'media'=>03.34, 'deviazione_standard'=>02.07 ]);
		Scala::create(['codice'=>'TRIN-r', 	'ordine'=>2,	'gruppo_scala_id'=>1, 	'descrizione'=>'Incoerenza nelle Risposte "Vero"'					, 'media'=>11.01, 'deviazione_standard'=>01.33, 'punteggio_base'=>11]);
		Scala::create(['codice'=>'F-r',    	'ordine'=>3,	'gruppo_scala_id'=>1, 	'descrizione'=>'Frequenza'											, 'media'=>01.68, 'deviazione_standard'=>02.20 ]);
		Scala::create(['codice'=>'Fp-r',   	'ordine'=>4,	'gruppo_scala_id'=>1, 	'descrizione'=>'Frequenza-psicopatologia'							, 'media'=>00.89, 'deviazione_standard'=>01.17 ]);
		Scala::create(['codice'=>'FS',     	'ordine'=>5,	'gruppo_scala_id'=>1, 	'descrizione'=>'Frequenza Risposte Somatiche'						, 'media'=>01.00, 'deviazione_standard'=>01.23 ]);
		Scala::create(['codice'=>'FBS-r',  	'ordine'=>6,	'gruppo_scala_id'=>1, 	'descrizione'=>'Validità dei Sintomi'								, 'media'=>07.62, 'deviazione_standard'=>03.15 ]);
		Scala::create(['codice'=>'RBS',    	'ordine'=>7,	'gruppo_scala_id'=>1, 	'descrizione'=>'Risposte Bias Scale'								, 'media'=>04.95, 'deviazione_standard'=>02.37 ]);
		Scala::create(['codice'=>'L-r',    	'ordine'=>8,	'gruppo_scala_id'=>1, 	'descrizione'=>'Virtù Rare'											, 'media'=>02.61, 'deviazione_standard'=>02.07 ]);
		Scala::create(['codice'=>'K-r',    	'ordine'=>9,	'gruppo_scala_id'=>1, 	'descrizione'=>'Validità dell\'Adattamento'							, 'media'=>07.45, 'deviazione_standard'=>02.91 ]);

		// GruppoScala 2
		Scala::create(['codice'=>'EID',    	'ordine'=>1,	'gruppo_scala_id'=>2, 	'descrizione'=>'Disfunzione Emozionale/Internalizzante'				, 'media'=>10.28, 'deviazione_standard'=>06.78]);
		Scala::create(['codice'=>'THD', 	'ordine'=>2,	'gruppo_scala_id'=>2, 	'descrizione'=>'Disfunzione del Pensiero'							, 'media'=>01.91, 'deviazione_standard'=>02.20]);
		Scala::create(['codice'=>'BXD',    	'ordine'=>3,	'gruppo_scala_id'=>2, 	'descrizione'=>'Disfunzione Comportamentale/Esternalizzante'		, 'media'=>05.98, 'deviazione_standard'=>03.87]);

		// GruppoScala 3	
		Scala::create(['codice'=>'RCd',   	'ordine'=>1,	'gruppo_scala_id'=>3, 	'descrizione'=>'Demoralizzazione'									, 'media'=>04.72, 'deviazione_standard'=>04.79 ]);
		Scala::create(['codice'=>'RC1',     'ordine'=>2,	'gruppo_scala_id'=>3, 	'descrizione'=>'Lamentele Somatiche'								, 'media'=>03.48, 'deviazione_standard'=>03.32 ]);
		Scala::create(['codice'=>'RC2',  	'ordine'=>3,	'gruppo_scala_id'=>3, 	'descrizione'=>'Bassa Emotività Positiva'							, 'media'=>04.01, 'deviazione_standard'=>02.61 ]);
		Scala::create(['codice'=>'RC3',    	'ordine'=>4,	'gruppo_scala_id'=>3, 	'descrizione'=>'Cinismo'											, 'media'=>05.82, 'deviazione_standard'=>03.57 ]);
		Scala::create(['codice'=>'RC4',    	'ordine'=>5,	'gruppo_scala_id'=>3, 	'descrizione'=>'Comportamento Antisociale'							, 'media'=>04.64, 'deviazione_standard'=>03.42 ]);
		Scala::create(['codice'=>'RC6',    	'ordine'=>6,	'gruppo_scala_id'=>3, 	'descrizione'=>'Idee di Persecuzione'								, 'media'=>00.81, 'deviazione_standard'=>01.39 ]);
		Scala::create(['codice'=>'RC7',    	'ordine'=>7,	'gruppo_scala_id'=>3, 	'descrizione'=>'Emozioni Negative Disfunzionali'					, 'media'=>06.22, 'deviazione_standard'=>04.39 ]);
		Scala::create(['codice'=>'RC8',    	'ordine'=>8,	'gruppo_scala_id'=>3, 	'descrizione'=>'Esperienze Aberranti'								, 'media'=>02.03, 'deviazione_standard'=>02.24 ]);
		Scala::create(['codice'=>'RC9',    	'ordine'=>9,	'gruppo_scala_id'=>3, 	'descrizione'=>'Attivazione Ipomaniacale'							, 'media'=>11.61, 'deviazione_standard'=>04.88 ]);

		// GruppoScala 4
		Scala::create(['codice'=>'MLS',   	'ordine'=>1,	'gruppo_scala_id'=>4, 	'descrizione'=>'Malessere'											, 'media'=>01.78, 'deviazione_standard'=>01.61 ]);
		Scala::create(['codice'=>'GIC',     'ordine'=>2,	'gruppo_scala_id'=>4, 	'descrizione'=>'Lamentele Gastrointestinali'						, 'media'=>00.32, 'deviazione_standard'=>00.80 ]);
		Scala::create(['codice'=>'HPC',		'ordine'=>3,	'gruppo_scala_id'=>4, 	'descrizione'=>'Mal di Testa'										, 'media'=>00.95, 'deviazione_standard'=>01.29 ]);
		Scala::create(['codice'=>'NUC',    	'ordine'=>4,	'gruppo_scala_id'=>4, 	'descrizione'=>'Lamentele Neurologiche'								, 'media'=>01.01, 'deviazione_standard'=>01.33 ]);
		Scala::create(['codice'=>'COG',    	'ordine'=>5,	'gruppo_scala_id'=>4, 	'descrizione'=>'Lamentele Cognitive'								, 'media'=>01.46, 'deviazione_standard'=>01.71 ]);

		// GruppoScala 5
		Scala::create(['codice'=>'SUI',    	'ordine'=>1,	'gruppo_scala_id'=>5, 	'descrizione'=>'Ideazione Suicidaria/di Morte'						, 'media'=>00.24, 'deviazione_standard'=>00.56 ]);
		Scala::create(['codice'=>'HLP',    	'ordine'=>2,	'gruppo_scala_id'=>5, 	'descrizione'=>'Impotenza/Disperazione'								, 'media'=>00.94, 'deviazione_standard'=>01.04 ]);
		Scala::create(['codice'=>'SFD',    	'ordine'=>3,	'gruppo_scala_id'=>5, 	'descrizione'=>'Dubbio sul Sé'										, 'media'=>00.99, 'deviazione_standard'=>01.24 ]);
		Scala::create(['codice'=>'NFC',    	'ordine'=>4,	'gruppo_scala_id'=>5, 	'descrizione'=>'Inefficacia'										, 'media'=>02.78, 'deviazione_standard'=>02.23 ]);
		Scala::create(['codice'=>'STW',    	'ordine'=>5,	'gruppo_scala_id'=>5, 	'descrizione'=>'Stress/Preoccupazione'								, 'media'=>02.46, 'deviazione_standard'=>01.71 ]);
		Scala::create(['codice'=>'AXY',    	'ordine'=>6,	'gruppo_scala_id'=>5, 	'descrizione'=>'Ansia'												, 'media'=>00.43, 'deviazione_standard'=>00.76 ]);
		Scala::create(['codice'=>'ANP',    	'ordine'=>7,	'gruppo_scala_id'=>5, 	'descrizione'=>'Propensione alla Rabbia'							, 'media'=>01.97, 'deviazione_standard'=>01.86 ]);
		Scala::create(['codice'=>'BRF',    	'ordine'=>7,	'gruppo_scala_id'=>5, 	'descrizione'=>'Paure che Inibiscono il Comportamento' 				, 'media'=>00.66, 'deviazione_standard'=>01.02 ]);
		Scala::create(['codice'=>'MSF',    	'ordine'=>9,	'gruppo_scala_id'=>5, 	'descrizione'=>'Molteplici Paure Specifiche'						, 'media'=>03.39, 'deviazione_standard'=>02.44 ]);


		// GruppoScala 6
		Scala::create(['codice'=>'JCP',    	'ordine'=>1,	'gruppo_scala_id'=>6, 	'descrizione'=>'Problemi Giovanili di Comportamento'				, 'media'=>01.17, 'deviazione_standard'=>01.33 ]);
		Scala::create(['codice'=>'SUB',    	'ordine'=>2,	'gruppo_scala_id'=>6, 	'descrizione'=>'Abuso di Sostanze'									, 'media'=>01.26, 'deviazione_standard'=>01.43 ]);
		Scala::create(['codice'=>'AGG',    	'ordine'=>3,	'gruppo_scala_id'=>6, 	'descrizione'=>'Aggressione'										, 'media'=>01.96, 'deviazione_standard'=>01.69 ]);
		Scala::create(['codice'=>'ACT',    	'ordine'=>4,	'gruppo_scala_id'=>6, 	'descrizione'=>'Attivazione'										, 'media'=>03.21, 'deviazione_standard'=>01.76 ]);
		
		// GruppoScala 7
		Scala::create(['codice'=>'FML',    	'ordine'=>1,	'gruppo_scala_id'=>7, 	'descrizione'=>'Problemi Familiari'									, 'media'=>02.35, 'deviazione_standard'=>01.97 ]);		
		Scala::create(['codice'=>'IPP',    	'ordine'=>2,	'gruppo_scala_id'=>7, 	'descrizione'=>'Passività Interpersonale'							, 'media'=>03.95, 'deviazione_standard'=>02.43 ]);		
		Scala::create(['codice'=>'SAV',    	'ordine'=>3,	'gruppo_scala_id'=>7, 	'descrizione'=>'Evitamento Sociale'									, 'media'=>03.13, 'deviazione_standard'=>02.55 ]);		
		Scala::create(['codice'=>'SHY',    	'ordine'=>4,	'gruppo_scala_id'=>7, 	'descrizione'=>'Timidezza'											, 'media'=>02.80, 'deviazione_standard'=>02.15 ]);		
		Scala::create(['codice'=>'DSF',    	'ordine'=>5,	'gruppo_scala_id'=>7, 	'descrizione'=>'Isolamento'											, 'media'=>00.47, 'deviazione_standard'=>00.00 ]);		
	
		// GruppoScala 8	
		Scala::create(['codice'=>'AES',    	'ordine'=>1, 	'gruppo_scala_id'=>8, 	'descrizione'=>'Interessi Estetico-Letterari'						, 'media'=>02.92, 'deviazione_standard'=>01.76 ]);
		Scala::create(['codice'=>'MEC',    	'ordine'=>2, 	'gruppo_scala_id'=>8, 	'descrizione'=>'Interessi Meccanico-Fisici'							, 'media'=>02.66, 'deviazione_standard'=>02.23 ]);

		// GruppoScala 9
		Scala::create(['codice'=>'AGGR-r',  'ordine'=>1, 	'gruppo_scala_id'=>9, 	'descrizione'=>'Aggressività Rivista'								, 'media'=>08.42, 'deviazione_standard'=>03.44 ]);
		Scala::create(['codice'=>'PSYC-r',  'ordine'=>2, 	'gruppo_scala_id'=>9, 	'descrizione'=>'Psicoticismo Rivista'								, 'media'=>02.05, 'deviazione_standard'=>02.26 ]);
		Scala::create(['codice'=>'DISC-r',  'ordine'=>3, 	'gruppo_scala_id'=>9, 	'descrizione'=>'Alterazione dell\'Autocontrollo Rivista' 			, 'media'=>06.33, 'deviazione_standard'=>03.62 ]);
		Scala::create(['codice'=>'NEGE-r',  'ordine'=>4, 	'gruppo_scala_id'=>9, 	'descrizione'=>'Emozionalità Negativa/Nevroticismo Rivista'			, 'media'=>06.26, 'deviazione_standard'=>03.75 ]);		
		Scala::create(['codice'=>'INTR-r',  'ordine'=>5, 	'gruppo_scala_id'=>9, 	'descrizione'=>'Introversione/Bassa Emozionalità Positiva Rivista' 	, 'media'=>06.10, 'deviazione_standard'=>03.57 ]);		

		
	}

}
