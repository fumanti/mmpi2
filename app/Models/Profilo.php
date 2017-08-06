<?php namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Profilo extends Collection {

	public static function getAll()
	{
		$profilo = 
		[
			'EID' => 
			[	
				"personalita" => 
				[
					[
						"range" => ["max" => 38],
						"Le risposte indicano un livello di adattamento emozionale migliore della media."
					],
					[
						"range"	=>	["min" => 65, "max" => 79],
						"Le risposte indicano presenza di distress emozionale significativo."
					],
					[
						"range"	=>	["min" => 80],
						"Le risposte indicano un considerevole distress emozionale che probabilmente viene percepito come una crisi."
					]
				],
				"correlati" => 
				[ 
					[
						"range" => ["min" => 65],
						"Un'ampia varietà di sintomi e difficoltà associati con demoralizzazione, bassa emotività positiva, esperienze emozionali negative (ad esempio: morale basso, depressione, ansia, sensazione di essere sopraffatto, disperazione, pessimismo). Specifiche manifestazioni di disfunzioni emozionali/internalizzanti potranno essere caratterizzate da punteggi elevati alle Scale RCd, RC2, RC7, SUI, HLP, SFD, NFC, STW, AXY, ANP, BRF, MSF, NEGE-r e INTR-r."
					]
				],
				"diagnosi" => 
				[ 
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi internalizzanti."
					]
				],
				"trattamento" => 
				[ 
					[
						"range" => ["min" => 65],
						"Le difficoltà emozionali potrebbero motivare al trattamento."
					]
				]
			],

			'THD' => 
			[	
				"personalita" => 
				[
					[
						"range"	=>	["min" => 65, "max" => 79],
						"Le risposte indicano la presenza di una significativa disfunzione del pensiero."
					],
					[
						"range"	=>	["min" => 80],
						"Le risposte indicano la presenza di grave disfunzione del pensiero."
					],
				],
				"correlati" => 
				[ 
					[
						"range" => ["min" => 65],
						"Un'ampia varietà di sintomi e difficoltà associati con disturbo del pensiero ".
						"(ad esempio: deliri paranoidi e non paranoidi, allucinazioni visive e uditive, pensiero irrealistico).".
						"Specifiche manifestazioni di disfunzione del pensiero potranno essere caratterizzate dai punteggi in RC6, RC8 e PSYC-r."
					]
				],
				"diagnosi" => 
				[ 
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi associati a disfunzione del pensiero."
					]
				],
				"trattamento" => 
				[ 
					[
						"range" => ["min" => 65],
						"Potrebbe essere necessario un ricovero per disfunzioni del pensiero.",
						"Dovrebbe essere valutata la necessità di trattamento farmacologico di tipo antipsicotico."
					]
				]
			],

			'BXD' => 
			[	
				"personalita" => 
				[
					[
						"range" => ["max" => 38],
						"Le sue risposte indicano un livello più alto della media di controllo comportamentale. È improbabile che assuma comportamenti caratterizzati da esternalizzazione e acting out."
					],
					[
						"range"	=>	["min" => 65, "max" => 79],
						"Le risposte indicano una significativa presenza di un comportamento caratterizzato da esternalizzazione e acting out che probabilmente lo ha portato ad avere difficoltà."
					],
					[
						"range"	=>	["min" => 80],
						"Le sue risposte indicano una marcata presenza di un comportamento caratterizzato da esternalizzazione e acting out ".
						"che, molto probabilmente, ha come conseguenza una condotta notevolmente disfunzionale e l'aggravamento di molte difficoltà."
					],
				],
				"correlati" => 
				[ 
					[
						"range" => ["min" => 65],
						"Un'ampia varietà di difficoltà e comportamenti associati con scarso controllo comportamentale (ad esempio: ".
						"abuso di sostanze, un passato di comportamento criminale, comportamento violento e offensivo, scarso controllo degli impulsi). ",
						"Specifiche manifestazioni di disfunzioni comportamentali/esternalizzanti saranno indicate da elevati punteggi in RC4, RC9, JCP, SUB, AGG, ACT, AGGR-r e DISC-r."
					]
				],
				"diagnosi" => 
				[ 
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi di esternalizzazione."
					]
				],
				"trattamento" => 
				[ 
					[
						"range" => ["min" => 65],
						"È improbabile che sia interiormente motivato al trattamento.",
						"Rischio significativo di scarsa adesione al trattamento.",
						"Scarso controllo di sé come obiettivo dell'intervento."
					]
				]
			],

			"RCd" => 
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riporta un morale e una soddisfazione di vita pi&ugrave; alti della media."
					],
					[	
						"range" => ["min" => 65, "max" => 79],
						"Riporta:",
					 	" sensazione di tristezza e infelicità",
						" insoddisfazione per le sue attuali circostanze di vita"
					],
					[
						"range" => ["min" => 80],
						"Riferisce di:",
						" vivere una significativa agitazione emozionale",
						" sentirsi sopraffatto",
						" essere estremamente infelice, triste e insoddisfatto della sua vita"						
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min"=>65],
						[
							"range" => ["scala" => ["SUI","HLP"], "min" => 65],
							"È a rischio di ideazione suicidaria" 
						],
						"Lamentele per depressione o ansia.",
						"Si sente senza speranza e pessimista per il futuro.",
						"Non affronta efficacemente lo stress.",
						"Ha bassa autostima.",
						"Sente di non essere capace di gestire le attuali circostanze di vita.",
						"Ha difficoltà di concentrazione.",
						"È propenso alla preoccupazione e alla ruminazione.",
						"Si sente triste.",
						"È pessimista.",
						"Si sente insicuro."
					]	
				],
				"diagnosi" =>
				[
					[
						"range" => ["min"=>65],
						"Valutare la presenza di un disturbo dell'area della depressione."
					]
				],
				"trattamento" =>
				[	
					[
						"range" => ["min"=>65],
						[
							"range" => ["scala" => ["SUI", "HLP"], "min" => 65],
							"Valutare il rischio di comportamenti autolesivi"
						],
						"Le difficoltà emozionali potrebbero motivarlo al trattamento.",
				 		"Alleviamento del distress psicologico come obiettivo iniziale dell'intervento."
					]
				]
			],

			"RC1"  => 
			[	
				"personalita" => 
				[
					[
						"range" => ["max" => 38],
						"Riporta un senso di benessere."
					],
					[
						"range"	=>	["min" => 65, "max" => 79],
						"Riporta molteplici lamentele somatiche che potrebbero includere mal di testa e sintomi neurologici e gastrointestinali."
					],
					[
						"range"	=>	["min" => 80],
						"Riporta un diffuso insieme di lamentele somatiche che coinvolgono differenti apparati corporei e che probabilmente includono mal di testa e sintomi neurologici e gastrointestinali."
					],
				],
				"correlati" => 
				[ 
					[
						"range" => ["min" => 65],	
						"È preoccupato per i suoi problemi fisici.",
						"È predisposto a sviluppare sintomi fisici in risposta allo stress.",
						"Le sue lamentele somatiche hanno una componente psicologica.",
						"Si sente affaticato.",
						"Presenta molteplici lamentele somatiche."
					]
				],
				"diagnosi" => 
				[ 
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi somatoformi.",
						[
							"range" => ["scala" => ['RC3', 'SHY'], "min" => 39],
							"Valutare un disturbo di conversione."
						]
					]
				],
				"trattamento" => 
				[ 
					[
						"range" => ["min" => 65],
						"È probabile che rifiuti interpretazioni psicologiche delle proprie lamentele somatiche."
					]
				]
			],

			"RC2"  => 
			[	
				"personalita" => 
				[
					[
						"range" => ["max" => 38],
						"Riferisce:",
						" • un alto livello di benessere psicologico",
						" • un'ampia varietà di esperienze emozionali positive",
						" • di sentirsi fiducioso e pieno di energia"
					],
					[
						"range"	=>	["min" => 65],
						"Riferisce:",
						" • una carenza di esperienze emozionali positive", 
						" • rilevante anedonia",
						" • mancanza di interessi "
					]
				],
				"correlati" => 
				[ 
					[
						"range" => ["max" => 38],
						"È ottimista.", 
						"È estroverso.",
						"È coinvolto socialmente."
					],
					[
						"range" => ["max" => 38],
						"È pessimista.", 
						"È socialmente introverso.", 
						"Non è coinvolto socialmente.", 
						"Manca di energia.",
						"Mostra sintomi vegetativi di depressione."
					]
				],
				"diagnosi" => 
				[ 
					[
						"range" => ["min" => 65, "max" => 79],
						"Valutare la presenza di un disturbo dell'area della depressione."
					],
					[
						"range" => ["min" => 80],
						"Valutare la presenza di un disturbo dell'area della depressione, probabilmente depressione maggiore."
					]
				],
				"trattamento" => 
				[ 
					[
						"range" => ["min" => 65, "max" => 74],
						"Dovrebbe essere valutata la necessità di un trattamento farmacologico antidepressivo.",
						"La presenza di scarse emozioni positive potrebbe interferire con l'impegno nel trattamento.",
						"Anedonia come obiettivo dell'intervento."
					],
					[
						"range" => ["min" => 75],
						"Potrebbe essere necessario un ricovero per presenza di rilevante depressione."
					]
				]
			],

			"RC3"  => 
			[	
				"personalita" => 
				[
					[
						"range" => ["max" => 38],
						"Descrive gli altri come ben intenzionati e affidabili e respinge credenze ciniche.",
						"È possibile che sia iperfiducioso."
					],
					[
						"range"	=>	["min" => 65],
						"Riferisce di: ", 
						" • avere credenze ciniche ", 
						" • non fidarsi degli altri ",
						" • credere che gli altri si preoccupino solo dei propri interessi "
					]
				],
				"correlati" => 
				[ 
					[
						"range" => ["min" => 65],
						"È ostile verso gli altri e si sente escluso.",
						"È diffidente verso gli altri.",
						"Ha esperienze interpersonali negative."
					]
				],
				"diagnosi" => 
				[ 
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi di personalità che implicano diffidenza e ostilità verso gli altri."
					]
				],
				"trattamento" => 
				[ 
					[
						"range" => ["min" => 65],
						"Il cinismo può interferire nella formazione di una relazione terapeutica.",
						"Mancanza di fiducia interpersonale come obiettivo dell'intervento."
					]
				]
			],
			
			"RC4"  => 
			[	
				"personalita" => 
				[
					[
						"range" => ["max" => 38],
						"Riferisce un livello al di sotto della media di comportamenti antisociali in passato."
					],
					[
						"range"	=>	["min" => 65],
						"Riporta una storia significativa di comportamento antisociale."
					]
				],
				"correlati" => 
				[ 
					[
						"range" => ["min" => 65],
						"Ha avuto problemi con la legge.",
						"Non è in grado di conformarsi alle norme e alle aspettative della società.",
						"Ha difficoltà con le persone che occupano una posizione di autorità.",
						"Vive relazioni interpersonali conflittuali.",
						"È impulsivo.",
						"Quando è annoiato, ha comportamenti di acting out.",
						"Ha caratteristiche antisociali.",
						"Ha una storia di delinquenza giovanile.",
						"Fa abuso di sostanze.",
						"Ha problemi familiari.",
						"È aggressivo con gli altri."
					]
				],
				"diagnosi" => 
				[ 
					[
						"range" => ["min" => 65],
						"Valutare la presenza di un disturbo di personalità antisociale, di disturbi da abuso di sostanze e di altri disturbi di esternalizzazione."
					]
				],
				"trattamento" => 
				[ 
					[
						"range" => ["min" => 65],
						"Le tendenze verso l'acting out possono comportare una mancanza di aderenza al trattamento e interferire ".
						"con lo sviluppo di una relazione terapeutica.",
						"Inadeguato controllo di sé come obiettivo del trattamento."
					]
				]
			],

			"RC6"   => 
			[	
				"personalita" => 
				[
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce ideazione persecutoria significativa, quale la credenza che gli altri cerchino di danneggiarlo."
					],
					[
						"range"	=>	["min" => 80],
							"Riferisce ideazione persecutoria pronunciata che probabilmente arriva a livello di deliri paranoidi."
					]
				],
				"correlati" => 
				[ 
					[
						"range" => ["min" => 65, "max" => 79],
						"È sospettoso nei confronti degli altri e isolato da essi","Ha difficoltà interpersonali come risultato della propria sospettosità.",
						"Manca di insight.",
						"Incolpa gli altri delle proprie difficoltà."
					],
					[
						"range" => ["min" => 80],
						"Ha episodi di pensiero delirante paranoide."
					]				
				],
				"diagnosi" => 
				[ 
					[
						"range" => ["min" => 65, "max" => 79],
						"Valutare la presenza di disturbi che implicano ideazione persecutoria."
					],
					[
						"range" => ["min" => 80],
						"Valutare la presenza di disturbi che implicano pensiero delirante paranoide."
					]				
				],
				"trattamento" => 
				[ 
					[
						"range" => ["min" => 65, "max" => 79],
						"La ideazione persecutoria può interferire con la formazione di una relazione terapeutica e con la aderenza al trattamento.",
						"Ideazione persecutoria come obiettivo dell'intervento."
						
					],
					[
						"range" => ["min" => 80],
						"Potrebbe essere necessario un ricovero per pensiero delirante paranoide.",
						"Dovrebbe essere valutata la necessità di un trattamento farmacologico antipsicotico."
					]
				]
			],

			"RC7"   => 
			[	
				"personalita" => 
				[
					[
						"range" => ["max" => 38],
						"Riporta un numero inferiore alla media di esperienze emozionali negative."
					],
					[
						"range"	=>	["min" => 65],
						"Riporta varie esperienze emozionali negative incluse ansia, rabbia e paura."
					]
				],
				"correlati" => 
				[ 
					[
						"range" => ["min" => 65],
						"È inibito nei comportamenti a causa delle proprie emozioni negative.",
						"Ha esperienza di ideazione intrusiva.",
						"È predisposto alla rabbia.",
						"È vulnerabile agli stressor.",
						"Presenta problemi con il sonno (inclusi incubi).",
						"Si preoccupa eccessivamente.",
						"Presenta ruminazione ossessiva.",
						"Percepisce gli altri come eccessivamente critici.",
						"È critico nei confronti di se stesso e predisposto a provare sensi di colpa."
					]			
				],
				"diagnosi" => 
				[ 
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi dello spettro ansioso."
					]			
				],
				"trattamento" => 
				[ 
					[
						"range" => ["min" => 65, "max" => 79],
						"Le difficoltà emotive potrebbero motivarlo al trattamento.",
						"Le emozioni negative disfunzionali sono l'obiettivo dell'intervento."
					],
					[
						"range" => ["min" => 80],
						"Le difficoltà emotive potrebbero motivarlo al trattamento.",
						"Le emozioni negative disfunzionali sono l'obiettivo dell'intervento.",
						"Dovrebbe essere valutata la necessità di un trattamento farmacologico ansiolitico."
					]
				]
			],

			"RC8" =>
			[
				"personalita" => 
				[
					[
						"range" => ["min"=>65, "max"=>74],
						"Riferisce vari pensieri e processi percettivi insoliti."
					],
					[
						"range" => ["min"=>75],
						"Riferisce un ampio numero di pensieri e percezioni insolite."
					]
				],
				"correlati" => 
				[
					[
						"range" => ["min"=>65],
						"Presenta disorganizzazione del pensiero.",
						"Pensiero irrealistico.",
						"Crede di avere abilità percettivo-sensoriali non comuni.",
						[
							"range" => ["scala" => ["RCl","HPC","NUC"], "min" => 65],
							"Le sue esperienze anomale potrebbero includere deliri somatici."
						],
						[
							"range" => ["scala" => ["SUB"], "min" => 65],
							"Le sue esperienze anomale potrebbero essere indotte da sostanze."
						],
						[
							"range" => ["scala" => ["RC8"], "min" => 80],
							"Le sue esperienze anomale potrebbero includere allucinazioni uditive e/o visive e deliri non persecutori quali trasmissione e lettura del pensiero.",
							"L'esame di realtà potrebbe essere significativamente compromesso.",
							"Presenta una significativa compromissione nel funzionamento interpersonale e lavorativo."
						]
					]
				],
				"diagnosi" => 
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi:",
						"che includono sintomi di tipo psicotico ",
						[
							"range" => ["scala" => ["RC6"], "min" => 70],
							"(inclusa la schizofrenia di tipo paranoide)"
						],
						"di personalità che includono pensieri e percezioni anomale"
					]
				],
				"trattamento" => 
				[
					[
						"range" => ["min" => 65],
						"La compromissione del pensiero può causare interruzione o abbandono del trattamento.",
						"Necessità di aiuto nell'aumento di consapevolezza delle proprie disfunzioni del pensiero.",
						[
							"range" => ["scala" => ["RC8"], "min" => 75],
							"Potrebbe essere necessario un ricovero per il pensiero disorganizzato.",
							"Dovrebbe essere valutata la necessità di un trattamento farmacologico antipsicotico.",
							"È probabile che il pensiero significativamente compromesso causi interruzione del trattamento.",
							"Potrebbe avere bisogno di un trattamento stabilizzante per attuare l'intervento con successo.",
							"I sintomi psicotici come obiettivo dell'intervento."
						]
					]
				]
			],	

			"RC9" =>
			[
				"personalita" => 
				[
					[ 
						"range" => ["max" => 38],
						"Riferisce un livello al di sotto della media di attivazione e impegno nel proprio ambiente."
					],
					[
						"range" => ["min"=>65, "max"=>74],
						"Riferisce un livello al di sopra della media di attivazione e impegno nel proprio ambiente."
					],
					[
						"range" => ["min"=>75],
						"Riferisce un livello considerevolmente al di sopra della media di attivazione e impegno nel proprio ambiente."
					]
				],
				"correlati" => 
				[	
					[
						"range" => ["max" => 34],
						"Ha un livello di energia molto basso.",
						"È distaccato dal proprio ambiente."
					],
					[
						"range" => ["min"=>65],
						"È irrequieto e facilmente annoiato.",
						"È iperattivato come si rileva da:",
						" • scarso controllo degli impulsi",
						" • aggressività",
						" • instabilità del tono dell'umore",
						" • euforia",
						" • eccitabilità",
						" • ricerca di sensazioni forti, assunzione di rischio e altre forme di comportamento scarsamente controllato.",
						"",
						"Presenta aspetti di personalità narcisistica.",
						"Potrebbe avere una storia di sintomi associati a episodi maniacali e ipomaniacali."
					]
				],
				"diagnosi" => 
				[
					[
						"range" => ["min" => 65, "max" => 74],
						"Valutare la presenza di un disturbo narcisistico di personalità."
					],
					[
						"range" => ["min" => 75],
						"Valutare la presenza di:",
						" • disturbo ciclotimico",
						" • episodi maniacali o ipomaniacali",
						[
							"range" => ["scala" => ["RC6", "RC8"], "min" => 70],
							" • disturbo schizoaffettivo"
						]
					],
				],
				"trattamento" => 
				[
					[
						"range" => ["min" => 75],
						"La eccessiva attivazione comportamentale può interferire con il trattamento.",
						"Stabilizzazione dell'umore nelle fasi iniziali del trattamento come obiettivo dell'intervento.",
						"Potrebbe essere necessario un ricovero per ipomania.",
						"Dovrebbe essere valutata la necessità di un trattamento farma cologico volto a stabilizzare il tono dell'umore."
					]
				]
			],	

			"MLS" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce un senso generale di benessere fisico."
					],
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce cattive condizioni di salute e di sentirsi debole o stanco."
					],
					[
						"range" => ["min" => 80],
						"Riferisce un generale senso di malessere che si manifesta con cattive condizioni di salute e con la sensazione di essere stanco, debole e fisicamente menomato."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"È preoccupato per la sue cattive condizioni di salute.",
						"È probabile che lamenti:",
						" • disturbi del sonno",
						" • affaticamento",
						" • scarsa energia",
						" • disfunzioni sessuali"
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Se è stata esclusa una causa organica, deve essere valutata la presenza di un disturbo somatoforme."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Il malessere potrebbe ostacolare la sua volontà o capacità di impegnarsi nel trattamento."
					]					
				]
			],

			"GIC" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 89],
						"Riferisce un certo numero di lamentele gastrointestinali."
					],
					[
						"range" => ["min" => 90],
						"Riferisce un ampio numero di lamentele gastrointestinali quali lo scarso appetito, nausea, vomito e ricorrente mal di stomaco."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha una storia di problemi gastrointestinali.",
						"È preoccupato per la propria salute."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Se è stata esclusa una causa organica, deve essere valutata la presenza di un disturbo somatoforme."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Riduzione dello stress associato alle lamentele gastrointestinali, se legate allo stress."
					]					
				]
			],

			"HPC" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce mal di testa."
					],
					[
						"range" => ["min" => 80],
						"Riferisce diffuso dolore alla testa e al collo, mal di testa ricorrente e la tendenza a sviluppare mal di testa quando è agitato."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Presenta molteplici lamentele somatiche.",
						"È predisposto a sviluppare sintomi fisici in risposta allo stress.",
						"È preoccupato per problemi di salute fisica.",
						"Si lamenta per:",
						" • mal di testa",
						" • dolore cronico",
						" • difficoltà di concentrazione"
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Se è stata esclusa una causa fisica per le lamentele relative al mal di testa, deve essere valutata la presenza di un disturbo somatoforme."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Gestione delle lamentele relative al mal di testa come obiettivo dell'intervento."
					]					
				]
			],

			"NUC" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 91],
						"Riferisce vaghe lamentele neurologiche."
					],
					[
						"range" => ["min" => 92],
						"Riferisce un ampio numero di varie lamentele neurologiche ".
						"(ad esempio: vertigini, perdita di equilibrio, intorpidimento, debolezza e paralisi ". 
						"e perdita di controllo sui movimenti, inclusi quelli involontari)."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Presenta varie lamentele somatiche.",
						"È preoccupato per la propria salute fisica.",
						"È predisposto a sviluppare sintomi fisici in risposta allo stress.",
						"È probabile che presenti: ",
						" • vertigini",
						" • difficoltà di coordinazione",
						" • problemi sensoriali"
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Se è stata esclusa una causa fisica delle lamentele neurologiche, deve essere valutata la presenza di un disturbo somatoforme.",
						[
							"range" => ["scala" => ["RC3","SHY"], "min" => 39],
							"Valutare il disturbo da conversione."
						]
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Se è stata individuata l'origine fisica delle lamentele neurologiche, va indirizzato verso un intervento medico e/o riabilitativo."
					]					
				]
			],

			"COG" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 80],
						"Riferisce una varietà di difficoltà cognitive."
					],
					[
						"range" => ["min" => 81],
						"Riferisce una varietà di difficoltà cognitive inclusi problemi di memoria, difficoltà di concentrazione, deficit intellettivi e stati confusivi."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Lamentele circa la memoria.",
						"Scarsa tolleranza alla frustrazione.",
						"Riferisce difficoltà di concentrazione."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Nessuna"
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Dovrebbe essere approfondita l'origine delle lamentele cognitive. Questo potrebbe richiedere un accertamento neuropsicologico."
					]					
				]
			],

			"SUI" =>
			[	
				"personalita" => 
				[
					[
						"range" => ["min" => 65, "max" => 90],
						"Riferisce una storia di ideazione suicidaria e/o effettivi tentativi di suicidio."
					],
					[
						"range" => ["min" => 100],
						"Riferisce attuale ideazione suicidaria e una storia di ideazione/tentativi di suicidio."
					]
				],
				"correlati" => 
				[
					[
						"range" => ["min" => 65],
						"Ha preoccupazioni legate alla morte e al suicidio.",
						"È a rischio di tentativi di suicidio.",
						[
							"range" => ["scala" => ["BXD", "RC4", "RC9", "DISC-r"], "min" => 65],
							"Il rischio è aumentato dalla presenza di uno scarso controllo degli impulsi."
						],
						[
							"range" => ["scala" => ["SUB"], "min" => 65],
							"Il rischio è aumentato dalla presenza di abuso di sostanze."
						],
						"Ha recenti tentativi di suicidio.",
						"Impotenza e disperazione."
					]
				],	
				"diagnosi" => [],
				"trattamento" => 
				[
					[
						"range" => ["min" => 65],
						"Il rischio di suicidio deve essere immediatamente preso in considerazione."
					]
				]
			],

			"HLP" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce di sentirsi disperato e pessimista."
					],
					[
						"range" => ["min" => 80],
						"Riferisce di pensare di non essere in grado di cambiare e superare i suoi problemi ".
						"ed è incapace di raggiungere i suoi obiettivi di vita."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Si sente disperato e pessimista.",
						"Si sente sopraffatto e sente la vita come una fatica.",
						"Crede di non poter essere aiutato.",
						"Ritiene di essere trattato in modo iniquo dalla vita.",
						"Non è motivato a cambiare."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Nessuna"
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Perdita di speranza e sensazione di disperazione come primi obiettivi dell'intervento."
					]					
				]
			],

			"SFD" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 69],
						"Riferisce dubbi sul Sé."
					],
					[
						"range" => ["min" => 70],
						"Riferisce di mancare di fiducia in sé e di sentirsi inutile."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Si sente inferiore e insicuro.",
						"È autodenigratorio.",
						"È propenso alla ruminazione.",
						"È intrapunitivo.",
						"Si presenta con mancanza di fiducia e sensazione di inutilità."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Nessuna"
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Mancanza di autostima e altre manifestazione di dubbi sul Sé come obiettivi dell'intervento."
					]					
				]
			],

			"NFC" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Non ha segnato item che indicano indecisione e inefficacia."
					],
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce di:",
						" • essere passivo, indeciso e inefficace",
						" • credere di essere incapace di fare fronte alle attuali difficoltà"
					],
					[
						"range" => ["min" => 80],
						"Riferisce di:",
						" • essere molto indeciso e inefficace",
						" • essere incapace di prendere decisioni e di fronteggiare efficacemente le crisi",
						" • avere difficoltà a fronteggiare questioni piccole e insignificanti"
					]
				],
				"correlati" =>
				[						
					[
						"range" => ["max" => 38],
						"È probabile che abbia fiducia in sé e che sia orientato al potere."
					],
					[
						"range" => ["min" => 65],
						"È improbabile che abbia fiducia in sé.",
						"È passivo."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Nessuna"
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"L'indecisione può interferire con la definizione degli obiettivi e con i progressi del trattamento."
					]					
				]
			],

			"STW" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 39],
						"Riferisce un livello di stress e preoccupazione inferiori alla media."
					],				
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce un livello di stress e preoccupazione superiore alla media."
					],
					[
						"range" => ["min" => 80],
						"Riferisce molteplici problemi che implicano esperienza di stress e preoccupazione, ".
						"incluse inquietudini dovute a delusioni, difficoltà legate all'urgenza degli impegni e ".
						"specifiche preoccupazioni circa possibili disgrazie e problemi finanziari."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"È vulnerabile agli stressor.",
						"È propenso alla preoccupazione.",
						"Presenta ruminazione ossessiva."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi che implicano stress e preoccupazione eccessivi quale il disturbo ossessivo-compulsivo."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Gestione di stress e eccessiva preoccupazione e ruminazione come obiettivi dell'intervento."
					]					
				]
			],

			"AXY" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 99],
						"Riferisce di sentirsi ansioso"
					],
					[
						"range" => ["min" => 100],
						"Riferisce di sentirsi costantemente ansioso, di sentire spesso che qualcosa di terribile sta per accadere, di essere quotidianamente spaventato da qualcosa e di avere frequenti incubi."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha esperienze di:",
						" • ansia significativa e problemi associati all'ansia",
						" • ideazione intrusiva",
						" • difficoltà nel sonno, inclusi incubi",
						" • distress post-traumatico"
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi associati all'ansia, incluso il disturbo post-traumatico da stress."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Ansia come obiettivo dell'intervento.",
						[
							"range" => ["scala" => ["AXY"], "min" => 80],
							"Dovrebbe essere valutata la necessità di un trattamento farmacologico ansiolitico."
						]
					]					
				]
			],

			"ANP" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce di essere predisposto ad arrabbiarsi."
					],
					[
						"range" => ["min" => 80],
						"Riferisce di agitarsi facilmente, di essere impaziente con gli altri, di arrabbiarsi con facilità e di essere talvolta sopraffatto dalla rabbia."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha problemi di:",
						" • rabbia",
						" • irritabilità",
						" • scarsa tolleranza alla frustrazione",
						"Serba rancore.",
						"Ha scatti di ira.",
						"È polemico."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi associati alla rabbia."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Gestione della rabbia come obiettivo dell'intervento."
					]					
				]
			],

			"BRF" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 89],
						"Riferisce molteplici paure che limitano significativamente le sue normali attività fuori e dentro casa."
					],
					[
						"range" => ["min" => 90],
						"Riferisce molteplici paure che inibiscono in modo significativo il suo normale funzionamento fuori e dentro casa, ".
						"incluse la paura di allontanarsi da casa, degli spazi aperti, degli spazi angusti, del buio, dello sporco, ".
						"degli oggetti appuntiti e di maneggiare il denaro."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Agorafobia",
						"Paure immotivate."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi d'ansia, in particolare l'agorafobia."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Paure che inibiscono il comportamento come obiettivo dell'intervento."
					]					
				]
			],

			"MSF" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce un numero al di sotto della media di paure specifiche."
					],				
					[
						"range" => ["min" => 65, "max" => 77],
						"Riferisce molteplici paure specifiche di alcuni animali e fenomeni naturali."
					],
					[
						"range" => ["min" => 78],
						"Riferisce molteplici paure specifiche nei confronti ad esempio di sangue, fuoco, ".
						"tuoni, acqua, disastri naturali, ragni, topi e altri animali."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Evita il rischio.",
						"Evita il pericolo."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza dì fobie specifiche."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Le fobie specifiche come obiettivi dell'intervento."
					]					
				]
			],

			"JCP" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce una storia di comportamento problematico a scuola."
					],
					[
						"range" => ["min" => 80],
						"Riferisce una storia di problemi giovanili di condotta qualì comportamento problematico ".
						"a scuola, furti e di essere stato negativamente influenzato dai compagni."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha un passato di delinquenza giovanile e comportamento criminale e antisociale.",
						"Vive relazioni interpersonalì conflittuali.",
						"Ha comportamenti di acting out.",
						"Ha difficoltà con le persone che occupano posizioni di autorità.",
						"Ha difficoltà a fidarsi degli altri."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi di esternalizzazione, in modo particolare il disturbo antisociale di personalità."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Nessuna"
					]					
				]
			],

			"SUB" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce un rilevante abuso passato e attuale di sostanze."
					],
					[
						"range" => ["min" => 80],
						"Riferisce:",
						" • una rilevante storia di abuso di sostanze",
						" • attuale abuso di sostanze",
						" • uso frequente di alcool e droghe",
						" • di usare l'alcool per \"rilassarsi e aprirsi\""
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha una storia di uso problematico di alcool e droghe.",
						"Ha avuto problemi legali come conseguenza dell'abuso di sostanze.",
						"Ricerca sensazioni forti."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi legati all'uso di sostanze."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Riduzione o cessazione dell'abuso di sostanze come obiettivo dell'intervento."
					]					
				]
			],

			"AGG" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce un livello sotto la media di comportamenti aggressivi."
					],
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce di essere fisicamente aggressivo, di avere comportamenti violenti e di perdere il controllo."
					],
					[
						"range" => ["min" => 80],
						"Riferisce di essere fisicamente aggressivo, di avere comportamenti violenti inclusi ".
						"comportamento esplosivo e scontri fisici e prova piacere a intimidire gli altri."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha un passato di comportamento violento verso gli altri.",
						"È oltraggioso.",
						"Ha problemi legati alla rabbia."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi associati con l'aggressivìtà interpersonale."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Riduzione del comportamento aggressivo verso gli altri come obiettivo dell'intervento."
					]					
				]
			],

			"ACT" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce un livello di energia e attivazione al di sotto della media."
					],
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce esperienze di eccitazione e di accentuati livelli di energia."
					],
					[
						"range" => ["min" => 80],
						"Riferisce esperienze di eccitazione e di accentuati livelli di energia, ".
						" incontrollabili oscillazioni del tono dell'umore e mancanza di sonno."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha esperienza di eccessiva attivazione.",
						[
							"range" => ["scala" => ["ACT"], "min" => 80],
							"Ha una storia di episodi maniacali o ipomaniacali."
						]
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di episodi maniacali o ipomaniacali o altre condizioni ".
						"associate con un eccesso di energia e attivazione."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Dovrebbe essere valutata la necessità di trattamento farmacologico stabilizzatore del tono dell'umore.",
						"L'eccessiva attivazione comportamentale può interferire con il trattamento."
					]					
				]
			],

			"FML" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce un ambiente familiare passato e attuale relativamente libero da conflitti."
					],
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce relazioni familiari conflittuali e mancanza di sostegno da parte dei membri della famiglia."
					],
					[
						"range" => ["min" => 80],
						"Riferisce relazioni familiari conflittuali e mancanza di sostegno da parte dei membri della famiglia. ".
						"Atteggiamenti ed esperienze familiari negative includono frequenti litigi, antipatia verso i membri della ". 
						"famiglia, la sensazione di non essere apprezzato e di non poter contare sui propri familiari in caso di bisogno."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha conflitti familiari.",
						"Ha esperienze di un funzionamento familiare scadente.",
						"Ha sentimenti fortemente negativi nei confronti dei familiari.",
						"Incolpa i membri della famiglia per le proprie difficoltà."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Nessuna"
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Problemi familiari come obiettivi dell'intervento."
					]
				]
			],

			"IPP" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Si descrive come una persona:",
						" • che ha forti opinioni",
						" • che si fa valere",
						" • assertiva e diretta",
						" • capace di guidare gli altri"
					],
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce di non essere assertivo."
					],
					[
						"range" => ["min" => 80],
						"Riferisce di:",
						" • non essere assertivo e essere sottomesso.",
						" • rifiutare le responsabilità.",
						" • non essere in grado di farsi valere.",
						" • essere incline a cedere agli altri."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["max" => 38],
						"Ritiene di avere capacità di leadership, ma è probabile che sia visto dagli altri come ".
						"dominante, centrato su di sé e probabilmente portato ad attribuirsi troppa importanza."
					],
					[
						"range" => ["min" => 65],
						"È passivo e sottomesso nelle relazioni interpersonali.",
						"È ipercontrollato."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["max" => 38],
						"Valutare la presenza di caratteristiche associate al disturbo di personalità narcisistico."
					],					
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi caratterizzati da comportamento passivo-sottomesso quale il disturbo di personalità dipendente."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Riduzione del comportamento passivo e sottomesso come obiettivo dell'intervento."
					]					
				]
			],

			"SAV" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce di amare le situazioni e gli eventi sociali."
					],
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce di non apprezzare gli eventi sociali e di evitare le situazioni sociali."
					],
					[
						"range" => ["min" => 80],
						"Riferisce di non apprezzare gli eventi sociali e di evitare le situazioni sociali, incluse ".
						"le feste e altri eventi nei quali è probabile che molte persone si riuniscano."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["max" => 38],
						"È probabile che sia considerato estroverso e socievole."
					],
					[
						"range" => ["min" => 65],
						"È introverso",
						"Ha difficoltà a instaurare relazioni intime",
						"È emotivamente inibito"
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi associati con l'evitamento sociale quale il disturbo di personalità evitante."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Difficoltà associate con l'evitamento sociale come obiettivo dell'intervento."
					]					
				]
			],

			"SHY" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce poca o nessuna ansia sociale."
					],
					[
						"range" => ["min" => 65],
						"Riferisce di essere timido, di imbarazzarsi facilmente e di sentirsi a disagio insieme agli altri."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"È socialmente introverso e inibito.",
						"È ansioso e nervoso in situazioni sociali.",
						"È generalmente ansioso."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di fobia sociale."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Ansia nelle situazioni sociali come obiettivo dell'intervento."
					]					
				]
			],

			"DSF" =>
			[
				"personalita" =>
				[
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce di non apprezzare le persone e la loro compagnia."
					],
					[
						"range" => ["min" => 80, "max" => 99],
						"Riferisce di non apprezzare le persone, la loro compagnia e di preferire stare da solo."
					],
					[
						"range" => ["min" => 100],
						"Riferisce di non apprezzare le persone, la loro compagnia, di preferire stare da solo e di non aver mai avuto una relazione intima."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"È asociale."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 100],
						"Valutare la presenza di disturbo schizoide di personalità."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"La sua avversione alle relazioni strette potrebbe creare difficoltà alla formazione di una alleanza terapeutica e al conseguimento di progressi nel trattamento."
					]					
				]
			],

			"AES" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce di non avere interesse per le attività o le occupazioni di natura estetica o letteraria (ad esempio: scrittura, musica, o teatro)."
					],
					[
						"range" => ["min" => 65],
						"Riferisce di avere un interesse superiore alla media per le attività o le occupazioni di natura estetica o letteraria (ad esempio: scrittura, musica, o teatro)."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"È empatico.",
						"È sensibile."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Nessuna"
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["scala" => ["AES", "MEC"], "max" => 38],
						"Mancanza di interessi verso l'ambiente circostante come obiettivo dell'intervento."
					]					
				]
			],

			"MEC" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce di non avere interesse per le attività e le occupazioni di natura meccanica o fisica (ad esempio: la costruzione e la riparazione di oggetti, le attività all'aria aperta e gli sport)."
					],
					[
						"range" => ["min" => 65, "max" => 77],
						"Riferisce di avere un interesse superiore alla media per le attività e le occupazioni di natura meccanica o fisica (ad esempio: la costruzione e la riparazione di oggetti, le attività all'aria aperta e gli sport)."
					],
					[
						"range" => ["min" => 78],
						"Riferisce di avere un interesse molto superiore alla media per le attività e le occupazioni di natura meccanica o fisica (ad esempio: la costruzione e la riparazione di oggetti, le attività all'aria aperta e gli sport)."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"È una persona che cerca l'avventura.",
						"È una persona che ricerca sensazioni forti."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Nessuna"
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["scala" => ["AES", "MEC"], "max" => 38],
						"Mancanza di interessi verso l'ambiente circostante come obiettivo dell'intervento."
					]				
				]
			],

			"AGGR-r" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce di essere passivo e sottomesso nelle relazioni interpersonali."
					],
					[
						"range" => ["min" => 65],
						"Riferisce di essere assertivo e aggressivo nelle relazioni interpersonali."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["max" => 38],
						"È passivo e sottomesso nelle relazioni interpersonali."
					],
					[
						"range" => ["min" => 65],
						"È eccessivamente assertivo e dominante.",
						"Ha comportamenti aggressivi di tipo strumentale.",
						"Crede di avere capacità di leadership.",
						"È percepito dagli altri come prepotente."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi di personalità del cluster B."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Riduzione del comportamento aggressivo nei rapporti interpersonali come obiettivo dell'intervento."
					]					
				]
			],

			"PSYC-r" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce di non avere esperienza di disturbi del pensiero."
					],
					[
						"range" => ["min" => 65],
						"Riferisce varie esperienze associate con i disturbi del pensiero."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha processi di pensiero e fenomeni percettivi insoliti.",
						"È isolato socialment.e",
						"Ha un pensiero irrealistico.",
						"Presenta un esame di realtà alterato."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi di personalità del cluster A."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Disfunzioni del pensiero come obiettivo dell 'intervento."
					]					
				]
			],

			"DISC-r" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce un comportamento eccessivamente controllato."
					],
					[
						"range" => ["min" => 65, "max" => 79],
						"Riferisce varie manifestazioni di comportamento sca rsamente controllato."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Ha comportamenti scarsamente controllati.",
						"Ha comportamenti di acting out.",
						"Agisce in modo impulsivo.",
						"Ricerca sensazioni forti e situazioni eccitanti."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi di personalità del cluster B."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"È improbabile che sia intrinsicamente motivato al trattamento.",
						"È a rischio considerevole di non aderenza al trattamento.",
						"Inadeguato controllo degli impulsi come obiettivo del trattamento."
					]					
				]
			],

			"NEGE-r" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce un livello al di sotto della media di esperienze emozionali negative."
					],
					[
						"range" => ["min" => 65],
						"Riferisce varie esperienze emozionali negative."
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Prova varie emozioni negative incluse:",
						" • ansia",
						" • insicurezza",
						" • preoccupazione",
						"È inibito nei comportamenti a causa delle emozioni negative.",
						"È autocritico e predisposto a provare senso di colpa.",
						"Ha ideazione intrusiva."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi di personalità del cluster C."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Le difficoltà emozionali possono motivarlo al trattamento.",
						"Dovrebbe essere valutata la necessità di un trattamento farmacologico di tipo ansiolitico.",
						"L'esclusiva focalizzazione sulle informazioni negative come obiettivo dell'intervento."
					]					
				]
			],

			"INTR-r" =>
			[
				"personalita" =>
				[
					[
						"range" => ["max" => 38],
						"Riferisce di sentirsi pieno di energia e di avere molte esperienze emozionali positive."
					],
					[
						"range" => ["min" => 65],
						"Riferisce:",
						" • una carenza di esperienze emozionali positive",
						" • di evitare le situazioni sociali"
					]
				],
				"correlati" =>
				[
					[
						"range" => ["min" => 65],
						"Assenza di esperienze emozionali positive.",
						"Ha considerevoli problemi di anedonia.",
						"Lamenta depressione.",
						"Manca di interessi.",
						"È pessimista.",
						"È socialmente introverso."
					]
				],
				"diagnosi" =>
				[
					[
						"range" => ["min" => 65],
						"Valutare la presenza di disturbi di personalità del cluster C."
					]					
				],
				"trattamento" =>
				[
					[
						"range" => ["min" => 65],
						"Dovrebbe essere valutata la necessità di trattamento farmacologico di tipo antidepressivo.",
						"La mancanza di emozioni positive potrebbe interferire con l'impegno nella terapia."
					]					
				]
			]
		];

		//return $profilo;
		//Collection
		return collect($profilo);
	}

}