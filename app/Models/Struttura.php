<?php namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Struttura extends Collection{

	public static function getAll()
	{
		$struttura = 
		[
			"Sezioni" =>
			[
				"I" => 
				[
					"Sezione" => "Validità del protocollo",
					"Sottosezioni" =>
					[
						"a" => 
						[
							"Sottosezione" => "Stile di risposta che non considera il contenuto",
							"Fonti" => 
							[
								0 => ["CNS"=>[], "VRIN-r"=>[], "TRIN-r"=>[]]
							]
						],
						"b" =>
						[
							"Sottosezione" => "Esagerazione",
							"Fonti" => 
							[
								0 => ["F-r"=>[], "Fp-r"=>[], "FS"=>[], "FBS-r"=>[], "RBS"=>[]]
							]
						],
						"c" =>
						[
							"Sottosezione" => "Minimizzazione dei sintomi",
							"Fonti" => 
							[
								0 => ["L-r"=>[], "K-r"=>[]]
							]
						]
					]
				],
				"II" => 
				[
					"Sezione" => "Interpretazione delle Scale Sostanziali",
					"Sottosezioni" => 
					[
						"a" => 
						[
							"Sottosezione" => "Disfunzioni Somatico/Cognitive",
							"Fonti" => [0 => ["RC1"=>[], "MLS"=>[], "GIC"=>[], "HPC"=>[], "NUC"=>[], "COG"=>[]]]
						],
						"b" => 
						[
							"Sottosezione" => "Disfunzioni emozionali",
							"Fonti" => 
							[
								1 => ["EID"=>[]], 
								2 => ["RCd"=>[], "SUI"=>[], "HLP"=>[], "SFD"=>[], "NFC"=>[]], 
								3 => ["RC2"=>[]], 
								4 => ["RC7"=>[], "STW"=>[], "AXY"=>[], "ANP"=>[], "BRF"=>[], "MSF"=>[]], 
								5 => ["NEGE-r"=>[], "INTR-r"=>[]]
							]
						],
						"c" => 
						[
							"Sottosezione" => "Disfunzioni del pensiero",
							"Fonti" => 
							[
								1 => ["THD"=>[]],
								2 => ["RC6"=>[]],
								3 => ["RC8"=>[]],
								4 => ["PSYC-r"=>[]]
							]
						],
						"d" => 
						[
							"Sottosezione" => "Disfunzioni comportamentali",
							"Fonti" => 
							[
								1 => ["BXD"=>[]],
								2 => ["RC4"=>[], "JCP"=>[], "SUB"=>[]],
								3 => ["RC9"=>[], "AGG"=>[], "ACT"=>[]],
								4 => ["AGGR-r"=>[], "DISC-r"=>[]]
							]
						],
						"e" => 
						[
							"Sottosezione" => "Funzionamento interpersonale",
							"Fonti" => 
							[
								1 => ["FML"=>[], "RC3"=>[], "IPP"=>[], "SAV"=>[], "SHY"=>[], "DSF"=>[]]
							]
						],
						"f" => 
						[
							"Sottosezione" => "Interessi",
							"Fonti" => 
							[
								1 => ["AES"=>[], "MEC"=>[]]
							]
						],
						"g" => 
						[
							"Sottosezione" => "Considerazioni diagnostiche",
							"Fonti" => 
							[
								1 => [""]
							]
						],
						"h" => 
						[
							"Sottosezione" => "Considerazioni per il trattamento",
							"Fonti" => 
							[
								1 => [""]
							]
						]
					]
				]
			]
		];
		return collect($struttura);
	}
}