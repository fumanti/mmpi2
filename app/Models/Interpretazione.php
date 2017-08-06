<?php namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Interpretazione extends Collection {

	public static function getAll()
	{
		$i = 
		[
			0 => 'Il protocollo è interpretabile',
			1 => 'Cautela',
			2 => 'Alcune scale potrebbero non essere valide',
			3 => 'Il protocollo potrebbe non essere valido',
			4 => 'Il protocollo non è interpretabile'
		];
		return collect($i);
	} 

}

// 	var $validita = [
// 		"CNS" =>
// 		[
// 			[
// 				"range" => ["min" => 0, "max" => 0],
// 				'minacce'		=>	'Nessuna',
// 				'motivo'		=>	'Sono state fornite risposte conteggiabili a tutti i 338 item',
// 				'implicazioni'	=>	'Il rispondente è stato cooperativo nei limiti in cui è implicata la sua disponibilità a rispondere agli item.'
// 			],
// 			[
// 				"range" => ["min" => 1, "max" => 14],
// 				'minacce'		=>	'I punteggi di alcune delle Scale più brevi potrebbero non essere validi',
// 				'motivo'		=>	'Mancata risposta selettiva',
// 				'implicazioni'	=>	'Esaminare il contenuto degli item non conteggiabili per rilevare possibili nuclei tematici. L\'impatto dipende '.
// 									'dalla scala. Per le Scale nelle quali è conteggiabile meno del 90% degli item, l\'assenza di elevazione non è '.
// 									'interpretabile. In tali Scale, i punteggi elevati potrebbero sottostimare la significatività o la gravità dei '.
// 									'problemi associati.'
// 			],
// 			[
// 				"range" => ["min" => 15],
// 				'minacce'		=>	'I punteggi di alcune Scale potrebbero non essere validi',
// 				'motivo'		=>	'Limiti nelle abilità di lettura o nel linguaggio \nPsicopatologia grave \nOssessività \nMancanza di insight '.
// 									'\nMancanza di cooperazione',
// 				'implicazioni'	=>	'Esaminare il contenuto degli item non conteggiabili per rilevare possibili nuclei tematici. L\'impatto dipende '.
// 								'dalla scala. Per le Scale nelle quali è conteggiabile meno del 90% degli item, l\'assenza di elevazione non è '.
// 								'interpretabile. In tali Scale, i punteggi elevati potrebbero sottostimare la significatività o la gravità dei '.
// 								'problemi associati.'
// 			],
// 		],
// 		"VRIN-r" =>
// 		[
// 			[
// 				"range" => ["min"=>30, "max" => 38],
// 				'minacce'		=>	'Evidenza di uno stile di risposta particolarmente coerente',
// 				'motivo'		=>	'L\'esaminato ha avuto un approccio consapevole al test',
// 				'implicazioni'	=>	'Il protocollo è interpretabile'
// 			],
// 			[
// 				"range" => ["min" => 39, "max" => 69],
// 				'minacce'		=>	'Evidenza di uno stile di risposta coerente',
// 				'motivo'		=>	'L\'esaminato è stato in grado di comprendere e rispondere in modo pertinente agli item del test',
// 				'implicazioni'	=>	'Il protocollo è interpretabile'
// 			],
// 			[	
// 				"range" => ["min" => 70, "max" => 79],
// 				'minacce'		=>	'Il protocollo presenta incoerenza nellle risposte',
// 				'motivo'		=>	'Limiti nell\'abilità di lettura o nel linguaggio \nDisabilità cognitiva \nErrori nella registrazione delle '.
// 									'risposte \nDisattenzione',
// 				'implicazioni'	=>	'I punteggi alle Scale di Validità e alle Scale Sostanziali dovrebbero essere interpretati con qualche cautela'
// 			],
// 			[
// 				"range" => ["min" => 80],
// 				'minacce'		=>	'Il protocollo non è valido per una eccessiva incoerenza delle risposte',
// 				'motivo'		=>	'Limiti nell\'abilità di lettura o nel linguaggio \nDisabilità cognitiva \nErrori nella registrazione delle '.
// 									'risposte \nStile intenzionale di risposta casuale \nApproccio non cooperativo al test',
// 				'implicazioni'	=>	'Il protocollo non è interpretabile'
// 			]
// 		],
// 		// TODO Aggiungere le altre scale QUI  
// 	];

// 	var $interpretazioni = [

// 		"RCd" => 
// 		[	
// 			"personalita" =>
// 			[
// 				[
// 					"range" => ["max" => 38],
// 				 	"Riporta un morale e una soddisfazione di vita pi&ugrave; alti della media"
// 				],
// 				[
// 					"range" => ["min" => 65, "max" => 79],
// 					"Riporta:\n",
// 				 	"sensazione di tristezza e infelicit&agrave;\n",
// 									"insoddisfazione per le sue attuali circostanze di vita"
// 				]
// 			]
// 			[
				
// 				"personalita" => 	
// 				"correlati" =>
// 				[
// 					[
// 						"range" => ["scala" => ["SUI","HLP"], "min" => 65],
// 						"&Egrave; a rischio di ideazione suicidaria" 
// 					],
					
// 					"Lamentele per depressione o ansia\n".
// 					"Si sente senza speranza e pessimista per il futuro\n".
// 					"Non affronta efficacemente lo stress\n".
// 					"Ha bassa autostima\n".
// 					"Sente di non essere capace di gestire le attuali circostanze di vita\n".
// 					"Ha difficolt&agrave; di concentrazione\n".
// 					"&Egrave; propenso alla preoccupazione e alla ruminazione\n".
// 					"Si sente triste\n".
// 					"&Egrave; pessimista\n".
// 					"Si sente insicuro"
					
// 				],
// 				"diagnosi" =>
// 				[
// 					"Valutare la presenza di un disturbo dell'area della depressione"
// 				],
// 				"trattamento" =>
// 				[	
// 					[
// 						"range" => ["scala" => ["SUI", "HLP"], "min" => 65],
// 						"Valutare il rischio di comportamenti autolesivi"
// 					],

// 					"Le difficolt&agrave; emozionali potrebbero motivarlo al trattamento",
// 				 	"Alleviamento del distress psicologico come obiettivo iniziale dell'intervento"
					
// 				]
// 			],
// 			[	
// 				"range" => ["min" => 80],
// 				"personalita" => 	"Riferisce di:".
// 									"vivere una significativa agitazione emozionale\n".
// 									"sentirsi sopraffatto\n".
// 									"essere estremamente infelice, triste e insoddisfatto della sua vita\n",
// 				"correlati" =>
// 				[
// 					[
// 						"range" => ["scala" => ["SUI","HLP"], "min" => 65],
// 						"&Egrave; a rischio di ideazione suicidaria" 
// 					],
					
// 					"Lamentele per depressione o ansia\n".
// 					"Si sente senza speranza e pessimista per il futuro\n".
// 					"Non affronta efficacemente lo stress\n".
// 					"Ha bassa autostima\n".
// 					"Sente di non essere capace di gestire le attuali circostanze di vita\n".
// 					"Ha difficolt&agrave; di concentrazione\n".
// 					"&Egrave; propenso alla preoccupazione e alla ruminazione\n".
// 					"Si sente triste\n".
// 					"&Egrave; pessimista\n".
// 					"Si sente insicuro"	

// 				],
// 				"diagnosi" => "Valutare la presenza di un disturbo dell'area della depressione",
// 				"trattamento" =>
// 				[	
// 					[
// 						"range" => ["scala" => ["SUI", "HLP"], "min" => 65],
// 						"Valutare il rischio di comportamenti autolesivi"
// 					],	
// 					"Le difficolt&agrave; emozionali potrebbero motivarlo al trattamento",
// 				 	"Alleviamento del distress psicologico come obiettivo iniziale dell'intervento"
// 				]
// 			]
// 		],

// 		"SUI" =>
// 		[
// 			[
// 				"range" => ["min" => 65, "max" => 99],
// 				"personalita" => "Riferisce una storia di ideazione suicidaria e/o effettivi tentativi di suicidio",
// 				"correlati" => 
// 				[
// 					"Ha preoccupazioni legate alla morte e al suicidio",
// 					"&Egrave; a rischio di tentativi di suicidio",
// 					[
// 						"range" => ["scala" => ["BXD", "RC4", "RC9", "DISC-r", "SUB"], "min" => 65],
// 						"(il rischio è aumentato dalla presenza di uno scarso controllo degli impulsi)"
// 					],
// 					"Ha recenti tentativi di suicidio",
// 					"Impotenza e disperazione"
// 				],
// 				"diagnosi" => "Nessuna",
// 				"trattamento" => "Il rischio di suicidio deve essere immediatamente preso in considerazione"
// 			]
// 		]

// 	];

// 	public function newCollection(array $models = [])
// 	{
// 		return collect($this->interpretazione);
// 	}

// 	// /**
// 	// *
// 	// * @var string
// 	// */
// 	// public $table = 'interpretazione';
	
// 	// /**
//  //     * Indicates if the model should be timestamped.
//  //     *
//  //     * @var bool
//  //     */
// 	// public $timestamps = false;

//  //    public $fillable = ['codice_scala', 'punti_min', 'punti_max', 'sintomi', 'correlati', 'diagnosi', 'trattamento'];


// 	// public function scala()
//  //    {
//  //        return $this->belongsTo('App\Models\Scala');
//  //    }

// }

