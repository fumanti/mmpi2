<?php namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Validita extends Collection {

	public static function getAll()
    {
		$validita = 
		[
			"CNS" =>
			[
				[
					"range" 		=> 	["min" => 0, "max" => 0],
					"risultato"		=>	0,
					"minacce"		=>	["Nessuna minaccia alla validità del protocollo"],
					"motivo"		=>	["Sono state fornite risposte conteggiabili a tutti i 338 item"],
					"implicazioni"	=>	["Il rispondente è stato cooperativo nei limiti in cui è implicata la sua disponibilità a rispondere agli item."]
				],
				[
					"range" 		=> 	["min" => 1, "max" => 14],
					"risultato"		=>	2,
					"minacce"		=>	["I punteggi di alcune delle Scale più brevi potrebbero non essere validi"],
					"motivo"		=>	["Mancata risposta selettiva"],
					"implicazioni"	=>	["Esaminare il contenuto degli item non conteggiabili per rilevare possibili nuclei tematici. L'impatto dipende ".
										 "dalla scala. Per le Scale nelle quali è conteggiabile meno del 90% degli item, l'assenza di elevazione non è ".
										 "interpretabile. In tali Scale, i punteggi elevati potrebbero sottostimare la significatività o la gravità dei ".
										 "problemi associati."]
				],
				[
					"range" 		=> 	["min" => 15],
					"risultato"		=>	2,
					"minacce"		=>	["I punteggi di alcune Scale potrebbero non essere validi"],
					"motivo"		=>	["Limiti nelle abilità di lettura o nel linguaggio ","Psicopatologia grave ","Ossessività ","Mancanza di insight",
										 "Mancanza di cooperazione"],
					"implicazioni"	=>	["Esaminare il contenuto degli item non conteggiabili per rilevare possibili nuclei tematici. L'impatto dipende ".
										 "dalla scala. Per le Scale nelle quali è conteggiabile meno del 90% degli item, l'assenza di elevazione non è ".
										 "interpretabile. In tali Scale, i punteggi elevati potrebbero sottostimare la significatività o la gravità dei ".
										 "problemi associati."]
				],
			],

			"VRIN-r" =>
			[
				[
					"range" 		=> 	["min"=>30, "max" => 38],
					"risultato"		=>	0,
					"minacce"		=>	["Evidenza di uno stile di risposta particolarmente coerente"],
					"motivo"		=>	["L'esaminato ha avuto un approccio consapevole al test"],
					"implicazioni"	=>	["Il protocollo è interpretabile"]
				],
				[
					"range" 		=> 	["min" => 39, "max" => 69],
					"risultato"		=>	0,
					"minacce"		=>	["Evidenza di uno stile di risposta coerente"],
					"motivo"		=>	["L'esaminato è stato in grado di comprendere e rispondere in modo pertinente agli item del test"],
					"implicazioni"	=>	["Il protocollo è interpretabile"]
				],
				[	
					"range" 		=> 	["min" => 70, "max" => 79],
					"risultato"		=>	1,
					"minacce"		=>	["Il protocollo presenta incoerenza nellle risposte"],
					"motivo"		=>	["Limiti nell'abilità di lettura o nel linguaggio ", "Disabilità cognitiva ", "Errori nella registrazione delle risposte",
										 "Disattenzione"],
					"implicazioni"	=>	["I punteggi alle Scale di Validità e alle Scale Sostanziali dovrebbero essere interpretati con qualche cautela"]
				],
				[
					"range" 		=> 	["min" => 80],
					"risultato"		=>	4,
					"minacce"		=>	["Il protocollo non è valido per una eccessiva incoerenza delle risposte"],
					"motivo"		=>	["Limiti nell'abilità di lettura o nel linguaggio", "Disabilità cognitiva", "Errori nella registrazione delle risposte",
										 "Stile intenzionale di risposta casuale", "Approccio non cooperativo al test"],
					"implicazioni"	=>	["Il protocollo non è interpretabile"]
				]
			],

			"TRIN-r" =>
			[
				[
					"range" 		=> 	["max" => 20],
					"risultato"		=>	4,
					"minacce"		=>	["Il protocollo non è valido per uno stile di risposta eccessivamente costante su \"Falso\" e incoerente rispetto al contenuto"],
					"motivo"		=>	["Approccio non cooperativo"],
					"implicazioni"	=>	["Il protocollo non è interpretabile"]
				],
				[
					"range" 		=> 	["min" => 21, "max" => 30],
					"risultato"		=>	1,
					"minacce"		=>	["Ci sono alcune evidenze di uno stile di risposta costante su \"Falso\" e incoerente rispetto al contenuto"],
					"motivo"		=>	["Approccio non cooperativo"],
					"implicazioni"	=>	["I punteggi alle Scale di Validità e alle Scale Sostanziali dovrebbero essere interpretati con qualche cautela"]
				],
				[
					"range" 		=> 	["min" => 31, "max" => 69],
					"risultato"		=>	0,
					"minacce"		=>	["Non ci sono evidenze di uno stile di risposta costante e incoerente rispetto al contenuto"],
					"motivo"		=>	[""],
					"implicazioni"	=>	["Il protocollo è interpretabile"]
				],
				[
					"range" 		=> 	["min" => 70, "max" => 79],
					"risultato"		=>	1,
					"minacce"		=>	["Ci sono alcune evidenze di uno stile di risposta costante su \"Vero\" e incoerente rispetto al contenuto"],
					"motivo"		=>	["Limiti nell'abilità di lettura o nel linguaggio ", "Disabilità cognitiva ", "Errori nella registrazione delle risposte",
									 	 "Disattenzione"],
					"implicazioni"	=>	["I punteggi alle Scale di Validità; e alle Scale Sostanziali dovrebbero essere interpretati con qualche cautela"]
				],
				[	
					"range" 		=> 	["min" => 80],
					"risultato"		=>	4,
					"minacce"		=>	["Il protocollo non è valido per uno stile di risposta eccessivamente costante su \"Vero\" e incoerente rispetto al contenuto"],
					"motivo"		=>	["Approccio non cooperativo"],
					"implicazioni"	=>	["Il protocollo non è interpretabile"]
				]
			],

			"F-r" => 
			[
				[
					"range" 		=> 	["max" => 78],
					"risultato"		=>	0,
					"minacce"		=>	["Non vi sono indicazioni di esagerazione"],
					"motivo"		=>	[""],
					"implicazioni"	=>	["Il protocollo è interpretabile."]
				],
				[
					"range" 		=>	["min" => 79, "max" => 89],
					"risultato"		=>	1,
					"minacce"		=>	["Possibile esagerazione di disfunzioni psicologiche indicata da un numero più ampio della media di risposte infrequenti"],
					"motivo"		=>	["Stile di risposta incoerente", "Psicopatologia significativa", "Significativo distress emozionale ", "Esagerazione"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. ".
										"Se esclusa, occorre notare che questo livello di risposte infrequenti può manifestarsi in individui con reali difficoltà psicologiche ".
										"che riferiscono sintomi credibili. Tuttavia, se non vi sono evidenze di una storia attuale o passata di disfunzioni, è probabile che si tratti di esagerazione."]	
				],
				[
					"range" 		=> 	["min" => 90, "max" => 99],
					"risultato"		=>	2,
					"minacce"		=>	["Possibile esagerazione di disfunzioni psicologiche indicata da un numero molto più ampio della media di risposte infrequenti"],
					"motivo"		=>	["Stile di risposta incoerente", "Psicopatologia significativa", "Significativo distress emozionale", "Esagerazione"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN -r. ".
										"Se esclusa, occorre notare che questo livello di risposte infrequenti può verificarsi in individui con reali e significative difficoltà ".
										"psicologiche che riferiscono sintomi credibili. ".
										"Tuttavia, se non vi sono evidenze di una storia attuale o passata di disfunzioni, è molto probabile che si tratti di esagerazione. "]		
				],
				[
					"range" 		=> 	["min" => 100, "max" => 119],
					"risultato"		=>	3,
					"minacce"		=>	["Il protocollo potrebbe non essere valido. L'esagerazione delle disfunzioni psicologiche è indicata ".
										"da un numero considerevolmente ampio di risposte infrequenti"],
					"motivo"		=>	["Stile di risposta incoerente", "Psicopatologia grave", "Grave distress emozionale", "Esagerazione"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi ".
										"alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti può verificarsi ".
										"in individui con reali e gravi difficoltà psicologiche che riferiscono sintomi credibili. Comunque, per coloro che ".
										"non hanno una storia attuale o passata di disfunzioni, è estremamente probabile che si tratti di esagerazione."]
				],
				[
					"range" 		=> 	["min" => 120],
					"risultato"		=>	4,
					"minacce"		=>	["Il protocollo non è valido. L'esagerazione è indicata da un eccessivo numero di risposte infrequenti"],
					"motivo"		=>	["Stile di risposta incoerente ","Esagerazione"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare ".
										"che questo livello di risposte infrequenti è raro anche in individui con gravi e reali difficoltà psicologiche che riferiscono sintomi credibili. I punteggi ".
										"alle Scale Sostanziali non dovrebbero essere interpretati."]
				]
			],

			"Fp-r" => 
			[
				[
					"range" 		=> 	["max" => 69],
					"risultato"		=>	0,
					"minacce"		=>	["Non vi sono indicazioni di esagerazione"],
					"motivo"		=>	[""],
					"implicazioni"	=>	["Il protocollo è interpretabile."]
				],
				[
					"range" 		=> 	["min" => 70, "max" => 79],
					"risultato"		=>	1,
					"minacce"		=>	["Una possibile esagerazione è indicata dall'affermazione di un numero più ampio della media di sintomi raramente descritti da individui con una reale, grave psicopatologia"],
					"motivo"		=>	["Stile di risposta incoerente","Grave psicopatologia","Esagerazione"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale ".
										"VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti può verificarsi in individui ".
										"con reale e grave psicopatologia che riportano sintomi credibili, ma può anche riflettere esagerazione. Per coloro che ".
										"non hanno una storia attuale o passata di psicopatologia, è molto probabile che si tratti di esagerazione."
										]
				],
				[
					"range" 		=> 	["min" => 80, "max" => 99],
					"risultato"		=>	3,
					"motivo"		=>	["Stile di risposta incoerente ","Grave psicopatologia ","Esagerazione"],
					"minacce"		=>	["Una possibile esagerazione è indicata dall'affermazione di un numero molto più ampio della media di sintomi raramente descritti da individui con una reale, grave psicopatologia"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di ".
										"risposte infrequenti può verificarsi in individui con reale e grave psicopatologia che riportano sintomi credibili, ma può anche riflettere esagerazione. Per coloro che non hanno ".
										"una storia attuale o passata di psicopatologia, è molto probabile che si tratti di esagerazione."]
				],
				[
					"range" 		=> 	["min" => 100],
					"risultato"		=>	4,
					"minacce"		=>	["Il protocollo non è valido. L'esagerazione è indicata dall'affermazione di un numero estremamente più ampio della media di sintomi, raramente descritti da individui con una reale, grave psicopatologia"],
					"motivo"		=>	["Stile di risposta incoerente","Esagerazione"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di ".
										"risposte infrequenti è estremamente raro anche in individui con reale e grave psicopatologia, che riferiscono sintomi credibili. ".
										"I punteggi alle Scale Sostanziali non dovrebbero essere interpretati."]
				],
			],

			"FS" => 
			[
				[
					"range" 		=> 	["max" => 79],
					"risultato"		=>	0,
					"minacce"		=>	["Non vi sono indicazioni di esagerazione"],
					"motivo"		=>	[""],
					"implicazioni"	=>	["Il protocollo è interpretabile."],
				],
				[
					"range" 		=> 	["min" => 80, "max" => 99],
					"risultato"		=>	1,
					"minacce"		=>	["Una possibile esagerazione di sintomi somatici è indicata dall'affermazione di un numero assai più ampio della media di sintomi somatici raramente descritti da individui con reali problemi di tipo medico"],
					"motivo"		=>	["Stile di risposta incoerente", "Significativi e/o molteplici problemi di natura medica", "Esagerazione di lamentele somatiche"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti può verificarsi in individui con condizioni mediche rilevanti che riportano sintomi credibili, ma può anche riflettere esagerazione. Per coloro che non hanno una storia attuale o passata di problemi di salute fisica, questo indica probabilmente che sono stati riferiti sintomi somatici non credibili. l punteggi alle Scale Somatiche dovrebbero essere interpretati con cautela, alla luce di questa avvertenza."]
				],
				[
					"range" 		=> 	["min" => 100],
					"risultato"		=>	2,
					"minacce"		=>	["I punteggi alle Scale Somatiche possono essere non validi. L'esagerazione dei sintomi somatici è indicata dall'affermazione " .
										"di un numero estremamente più ampio della media di sintomi somatici raramente descritti da individui con reali problemi di tipo medico"],
					"motivo"		=>	["Stile di risposta incoerente","Esagerazione di lamentele somatiche"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti ".
										"è molto raro anche in individui con considerevoli problemi di natura medica che riferiscono sintomi credibili. I punteggi alle Scale Somatiche dovrebbero essere interpretati con cautela, alla luce di " . "questa avvertenza."]
				]
			],

			"FBS-r" =>
			[
				[
					"range" 		=> 	["max" => 79],
					"risultato"		=>	0,
					"minacce"		=>	["Non vi sono indicazioni di esagerazione"],
					"motivo"		=>	[""],
					"implicazioni"	=>	["Il protocollo è interpretabile."]
				],
				[
					"range" 		=> 	["min" => 80, "max" => 99],
					"risultato"		=>	1,
					"minacce"		=>	["Possibile esagerazione di sintomi somatici è indicata da un'insolita combinazione di risposte, associata con l'affermazione di sintomi somatici e/o cognitivi non credibili "],
					"motivo"		=>	["Stile di risposta incoerente","Significativi e/o molteplici problemi di natura medica","Esagerazione di lamentele somatiche e/o cognitive"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. ".
										"Se esclusa, occorre notare che questa combinazione di risposte può verificarsi in individui con considerevoli problemi di natura ".
										"medica che riportano sintomi credibili, ma può anche riflettere esagerazione. I punteggi alle Scale Somatiche e Cognitive dovrebbero ".
										"essere interpretati con cautela, alla luce di questa avvertenza."]
				],
				[
					"range" 		=> 	["min" => 100],
					"risultato"		=>	2,
					"minacce"		=>	["I punteggi alle Scale Somatiche e Cognitive possono essere non validi. L'esagerazione dei sintomi è indicata da una combinazione ".
										"molto insolita di risposte, associata all'affermazione di sintomi somatici e/o cognitivi non credibili"],
					"motivo"		=>	["Stile di risposta incoerente","Esagerazione di sintomi somatici e/o cognitivi"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRlN-r. " .
										"Se esclusa, occorre notare che questa combinazione di risposte è molto rara anche in individui con considerevoli problemi di natura ".
										"medica che riportano sintomi credibili. I punteggi alle Scale Somatiche e Cognitive dovrebbero essere interpretati con cautela, ".
										"alla luce di questa avvertenza. "]
				]
			],

			"RBS" =>
			[
				[
					"range" 		=> 	["max" => 79],
					"risultato"		=>	0,
					"minacce"		=>	["Non vi sono indicazioni di esagerazione."],
					"motivo"		=>	[""],
					"implicazioni"	=>	["Il protocollo è interpretabile."]
				],
				[
					"range" 		=> 	["min" => 80, "max" => 99],
					"risultato"		=>	1,
					"minacce"		=>	["Una possibile esagerazione è indicata da una combinazione insolita di risposte che è associata con lamentele mnestiche non credibili"],
					"motivo"		=>	["Stile di risposta incorente ","Considerevole disfunzione emozionale  ","Esagerazione di lamentele mnestiche"],
					"implicazioni"	=>	["Lo stile di risposta incoerente dovrebbe essere valutato prendendo in considerazione i punteggi nelle VRlN-r e TRIN-r. Se è escluso, occorre notare che questa combinazione di risposte può verificarsi in individui con considerevole disfunzione emozionale che riportano sintomi credibili, ma potrebbe anche riflettere esagerazione. I punteggi nella scala Lamentele Cognitive dovrebbero essere interpretati alla luce di questa avvertenza. "]
				],
				[
					"range" 		=> 	["min" => 100],
					"risultato"		=>	2,
					"minacce"		=>  ["I punteggi alle Scale Somatiche e Cognitive possono essere non validi. L'esagerazione dei sintomi è indicata da una combinazione " .
										 "molto insolita di risposte, associata all'affermazione di sintomi somatici e/o cognitivi non credibili"],
					"motivo"		=>	["Stile di risposta incoerente","Esagerazione di lamentele mnestiche"],
					"implicazioni"	=>	["Lo stile di risposta incoerente dovrebbe essere valutato prendendo in considerazione i punteggi nelle VRIN-r e TRIN-r. ".
										 "Se è escluso, occorre notare che questa combinazione di risposte è molto insolita anche in individui con ".
										 "considerevole disfunzione emozionale che riportano sin tomi credibili. I punteggi nella scala Lamentele Cognitive ".
										 " dovrebbero essere interpretati alla luce di questa avvertenza. "]
				]
			],

			"L-r" =>
			[
				[
					"range" 		=> 	["max" => 64],
					"risultato"		=>	0,
					"minacce"		=>	["Non vi sono indicazioni di minimizzazione "],
					"motivo"		=>	[""],
					"implicazioni"	=>	["Il protocollo è interpretabile. "]
				],
				[
					"range" 		=> 	["min" => 65, "max" => 69],
					"risultato"		=>	1,
					"minacce"		=>	["Possibile minimizzazione è indicata da una presentazione di sé in una luce positiva, negando alcuni piccoli difetti e colpe che la maggior parte delle persone ammette "],
					"motivo"		=>	["Stile di risposta incoerente", "Educazione di tipo tradizionale", "Minimizzazione"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di virtuosa presentazione di sé può riflettere un background fortemente caratterizzato da valori tradizionali. Un'eventuale assenza di elevazione alle Scale Sostanziali deve essere interpretata con cautela. Punteggi elevati alle Scale Sostanziali possono sottostimare i problemi misurati da tali scale. "]
				],
				[
					"range" 		=> 	["min" => 70, "max" => 79],
					"risultato"		=>	2,
					"minacce"		=>	["Possibile minimizzazione indicata da una presentazione di sé in una luce molto positiva negando vari piccoli difetti e colpe che la maggior parte delle persone ammette "],
					"motivo"		=>	["Stile di risposta incoerente", "Educazione di tipo tradizionale", "Minimizzazione"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di virtuosa presentazione di sé è raro, ma potrebbe in qualche misura riflettere un background fortemente caratterizzato da valori tradizionali. Un'eventuale assenza di elevazioni alle Scale Sostanziali deve essere interpretata con cautela. Punteggi elevati alle Scale Sostanziali possono sottostimare i problemi misurati da tali scale. "]
				],
				[
					"range" 		=> 	["min" => 80],
					"risultato"		=>	3,
					"minacce"		=>	["Il protocollo può non essere valido. La minimizzazione dei sintomi è indicata da una presentazione di sé in una luce estremamente positiva, negando molti piccoli difetti e colpe che la maggior parte delle persone ammette "],
					"motivo"		=>	["Stile di risposta incoerente", "Minimizzazione"],
					"implicazioni"	=>	["Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di virtuosa presentazione di sé è decisamente molto raro anche in individui cresciuti in un ambiente che aderiva con ferma convinzione ai valori tradizionali. Un'eventuale assenza di elevazioni alle Scale Sostanziali non è interpretabile. Punteggi elevati alle Scale Sostanziali possono sottostimare i problemi misurati da tali scale."]
				]
			],

			"K-r" =>
			[
				[
					"range" 		=> 	["max" => 59],
					"risultato"		=>	0,
					"minacce"		=>	["Non vi sono indicazioni di minimizzazione "],
					"motivo"		=>	[""],
					"implicazioni"	=>	["Il protocollo è interpretabile. "]
				],
				[
					"range" 		=> 	["min" => 60, "max" => 65],
					"risultato"		=>	1,
					"minacce"		=>	["Probabile minimizzazione indicata da una presentazione di sé come persona con buon adattamento "],
					"motivo"		=>	["Stile di risposta incoere n te Buon adattamento psico logico Minimizzazione"],
					"implicazioni"	=>	["Lo stile di risposta incoerente dovrebbe essere valutato prendendo in considerazione i punteggi alle Scale VRIN-r e TRIN-r. In persone che non hanno un buon adattamento, eventuale assenza di elevazione alle Scale Sostanziali deve essere interpretata con prudenza. Punteggi elevati alle Scale Sostanziali possono sottostimare i problemi misurati da tali scale."]
				],
				[
					"range" 		=> 	["min" => 66, "max" => 69],
					"risultato"		=>	1,
					"minacce"		=>	["Probabile minimizzazione indicata da una presentazione di sé come persona con livello di adattamento molto buono"],
					"motivo"		=>	["Stile di risposta incoerente Adattamento psicologico molto buono Minimizzazione "],
					"implicazioni"	=>	["Lo stile di risposta incoerente dovrebbe essere valutato prendendo in considerazione i punteggi alle Scale VRIN-r e TRI -r. Se esclusa, occorre notare che questo livello di adattamento psicologico è abbastanza raro nella popolazione generale. Per le persone che non hanno un adattamento particolarmente buono, un'eventuale assenza di elevazione alle Scale Sostanziali deve essere interpretata con prudenza. Punteggi elevati alle Scale Sostanziali possono sottostimare i problemi misurati da tali scale. "]
				],
				[
					"range" 		=> 	["min" => 70],
					"risultato"		=>	2,
					"minacce"		=>	["La minimizzazione è indicata da una presentazione di sé come persona con livello di adattamento notevolmente buono"],
					"motivo"		=>	["Stile di risposta incoerente Minimizzazione "],
					"implicazioni"	=>	["Lo stile di risposta incoerente dovrebbe essere valutato prendendo in considerazione i punteggi alle Scale VRIN-r e TRIN -r. Se esclusa, occorre notare che questo livello di adattamento psicologico è raro nella popolazione generale. Un'eventuale assenza di elevazione alle Scale Sostanziali deve essere interpretata con cautela. Punteggi elevati alle Scale Sostanziali possono sottostimare i problemi misurati da tali scale. "]
				]
			]
		];

		// Trasforma in collection
		$collValidita = collect($validita);
		return $collValidita;

    }

}

