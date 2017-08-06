<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Interpretazione as Interpretazione;
use App\Models\Validita as Validita;

class InterpretazioneTableSeeder extends Seeder {
	public function run(){
		//Validita::truncate();
		Validita::create(array(
			'codice_scala' 	=> 'CNS'
			,'punti_min' 	=>	0
			,'punti_max'		=>	0
			,'minacce'		=>	'Nessuna'
			,'motivo'		=>	'Sono state fornite risposte conteggiabili a tutti i 338 item'
			,'implicazioni'	=>	'Il rispondente è stato cooperativo nei limiti in cui è implicata la sua disponibilità a rispondere agli item.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'CNS'
			,'punti_min' 	=>	1
			,'punti_max'	=>	14
			,'minacce'		=>	'I punteggi di alcune delle Scale più brevi potrebbero non essere validi',
			,'motivo'		=>	'Mancata risposta selettiva'
			,'implicazioni'	=>	'Esaminare il contenuto degli item non conteggiabili per rilevare possibili nuclei tematici. L\'impatto dipende '.
								'dalla scala. Per le Scale nelle quali è conteggiabile meno del 90% degli item, l\'assenza di elevazione non è '.
								'interpretabile. In tali Scale, i punteggi elevati potrebbero sottostimare la significatività o la gravità dei '.
								'problemi associati.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'CNS',
			,'punti_min' 	=>	15,
			,'punti_max'	=>	NULL,
			,'minacce'		=>	'I punteggi di alcune Scale potrebbero non essere validi',
			,'motivo'		=>	'Limiti nelle abilità di lettura o nel linguaggio \nPsicopatologia grave \nOssessività \nMancanza di insight '.
								'\nMancanza di cooperazione'
			,'implicazioni'	=>	'Esaminare il contenuto degli item non conteggiabili per rilevare possibili nuclei tematici. L\'impatto dipende '.
								'dalla scala. Per le Scale nelle quali è conteggiabile meno del 90% degli item, l\'assenza di elevazione non è '.
								'interpretabile. In tali Scale, i punteggi elevati potrebbero sottostimare la significatività o la gravità dei '.
								'problemi associati.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'VRIN-r'
			,'punti_min' 	=>	30
			,'punti_max'	=>	38
			,'minacce'		=>	'Evidenza di uno stile di risposta particolarmente coerente',
			,'motivo'		=>	'L\'esaminato ha avuto un approccio consapevole al test'
			,'implicazioni'	=>	'Il protocollo è interpretabile'
		));
		Validita::create(array(
			'codice_scala' 	=> 'VRIN-r'
			,'punti_min' 	=>	39
			,'punti_max'	=>	69
			,'minacce'		=>	'Evidenza di uno stile di risposta coerente',
			,'motivo'		=>	'L\'esaminato è stato in grado di comprendere e rispondere in modo pertinente agli item del test'
			,'implicazioni'	=>	'Il protocollo è interpretabile'
		));
		Validita::create(array(
			'codice_scala' 	=> 'VRIN-r'
			,'punti_min' 	=>	70
			,'punti_max'	=>	79
			,'minacce'		=>	'Il protocollo presenta incoerenza nellle risposte',
			,'motivo'		=>	'Limiti nell\'abilità di lettura o nel linguaggio \nDisabilità cognitiva \nErrori nella registrazione delle '.
								'risposte \nDisattenzione'
			,'implicazioni'	=>	'I punteggi alle Scale di Validità e alle Scale Sostanziali dovrebbero essere interpretati con qualche cautela'
		));
		Validita::create(array(
			'codice_scala' 	=> 'VRIN-r',
			,'punti_min' 	=>	80,
			,'punti_max'	=>	NULL,
			,'minacce'		=>	'Il protocollo non è valido per una eccessiva incoerenza delle risposte',
			,'motivo'		=>	'Limiti nell\'abilità di lettura o nel linguaggio \nDisabilità cognitiva \nErrori nella registrazione delle '.
								'risposte \nStile intenzionale di risposta casuale \nApproccio non cooperativo al test'
			,'implicazioni'	=>	'Il protocollo non è interpretabile'
		));
		Validita::create(array(
			'codice_scala' 	=> 'TRIN-r'
			,'punti_min' 	=>	NULL
			,'punti_max'	=>	20
			,'minacce'		=>	'Il protocollo non è valido per uno stile di risposta eccessivamente costante su "Falso" e incoerente rispetto al contenuto'
			,'motivo'		=>	'Approccio non cooperativo'
			,'implicazioni'	=>	'Il protocollo non è interpretabile'
		));
		Validita::create(array(
			'codice_scala' 	=> 'TRIN-r'
			,'punti_min' 	=>	21
			,'punti_max'	=>	30
			,'minacce'		=>	'Ci sono alcune evidenze di uno stile di risposta costante su "Falso" e incoerente rispetto al contenuto',
			,'motivo'		=>	'Approccio non cooperativo'
			,'implicazioni'	=>	'I punteggi alle Scale di Validità e alte Scale Sostanziali dovrebbero essere interpretati con qualche cautela'
		));
		Validita::create(array(
			'codice_scala' 	=> 'TRIN-r'
			,'punti_min' 	=>	31
			,'punti_max'	=>	69
			,'minacce'		=>	'Non ci sono evidenze di uno stile di risposta costante e incoerente rispetto al contenuto'
			,'motivo'		=>	''
			,'implicazioni'	=>	'Il protocollo è interpretabile'
		));
		Validita::create(array(
			'codice_scala' 	=> 'TRIN-r'
			,'punti_min' 	=>	70
			,'punti_max'	=>	79
			,'minacce'		=>	'Ci sono alcune evidenze di uno stile di risposta costante su "Vero" e incoerente rispetto al contenuto'
			,'motivo'		=>	'Limiti nell\'abilità di lettura o nel linguaggio \nDisabilità cognitiva \nErrori nella registrazione delle '.
								'risposte \nDisattenzione'
			,'implicazioni'	=>	'I punteggi alle Scale di Validità e alle Scale Sostanziali dovrebbero essere interpretati con qualche cautela'
		));
		Validita::create(array(
			'codice_scala' 	=> 'TRIN-r'
			,'punti_min' 	=>	80
			,'punti_max'	=>	NULL
			,'minacce'		=>	'Il protocollo non è valido per uno stile di risposta eccessivamente costante su "Vero" e incoerente rispetto al '.
								'contenuto'
			,'motivo'		=>	'Approccio non cooperativo'
			,'implicazioni'	=>	'Il protocollo non è interpretabile'
		));
		Validita::create(array(
			'codice_scala' 	=> 'F-r'
			,'punti_min' 	=>	NULL
			,'punti_max'	=>	78
			,'minacce'		=>	'Non vi sono indicazioni di esagerazione'
			,'motivo'		=>	''
			,'implicazioni'	=>	'Il protocollo è interpretabile.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'F-r'
			,'punti_min' 	=>	79
			,'punti_max'	=>	89
			,'minacce'		=>	'Possibile esagerazione di disfunzioni psicologiche indicata da un numero più ampio della media di risposte infrequenti'
			,'motivo'		=>	'Stile di risposta incoerente \nPsicopatologia significativa \nSignificativo distress emozionale \nEsagerazione'
			,'implicazioni'	=>	'Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale '.
								'VRIN-r e TRIN-r. '.
								'Se esclusa, occorre notare che questo livello di risposte infrequenti può manifestarsi in individui con reali '.
								'difficoltà psicologiche che riferiscono sintomi credibili. Tuttavia, se non vi sono evidenze di una storia '.
								'attuale o passata di disfunzioni, è probabile che si tratti di esagerazione.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'F-r'
			,'punti_min' 	=>	90
			,'punti_max'	=>	99
			,'minacce'		=>	'Possibile esagerazione di disfunzioni psicologiche indicata da un numero molto più ampio della media di risposte infrequenti'
			,'motivo'		=>	'Stile di risposta incoerente \nPsicopatologia significativa \nSignificativo distress emozionale \nEsagerazione'
			,'implicazioni'	=>	'Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale '.
								'VRIN-r e TRIN -r. Se esclusa, occorre notare che questo livello di risposte infrequenti può verificarsi in '.
								'individui con reali e significative difficoltà psicologiche che riferiscono sintomi credibili. '.
								'Tuttavia, se non vi sono evidenze di una storia attuale o passata di disfunzioni, è molto probabile che si tratti '.
								'di esagerazione. '
		));
		Validita::create(array(		
			'codice_scala' 	=> 'F-r'
			,'punti_min' 	=>	100
			,'punti_max'	=>	119
			,'minacce'		=>	'Il protocollo potrebbe non essere valido. L\'esagerazione delle disfunzioni psicologiche è indicata da un numero '.
								'considerevolmente ampio di risposte infrequenti'
			,'motivo'		=>	'Stile di risposta incoerente \nPsicopatologia grave \nGrave distress emozionale \nEsagerazione'
			,'implicazioni'	=>	'Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale VRIN-r e TRIN-r. Se esclusa, occorre notare '.
								'che questo livello di risposte infrequenti può verificarsi in individui con reali e gravi difficoltà psicologiche che riferiscono sintomi credibili. Comunque, '.
								'per coloro che non hanno una storia attuale o passata di disfunzioni, è estremamente probabile che si tratti di esagerazione.'
		));
		Validita::create(array(		
			'codice_scala' 	=> 'F-r'
			,'punti_min' 	=>	120
			,'punti_max'	=>	NULL
			,'minacce'		=>	'Il protocollo non è valido. L\'esagerazione è indicata da un eccessivo numero di risposte infrequenti'
			,'motivo'		=>	'Stile di risposta incoerente \nEsagerazione'
			,'implicazioni'	=>	'Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale '.
								'VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti è raro anche in individui '.
								'con gravi e reali difficoltà psicologiche che riferiscono sintomi credibili. I punteggi alle Scale Sostanziali '.
								'non dovrebbero essere interpretati.'
		));
		Validita::create(array(	
			'codice_scala' 	=> 'Fp-r'
			,'punti_min' 	=>	NULL
			,'punti_max'	=>	69
			,'minacce'		=>	'Non vi sono indicazioni di esagerazione'
			,'motivo'		=>	''
			,'implicazioni'	=>	'Il protocollo è interpretabile.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'Fp-r'
			,'punti_min' 	=>	70
			,'punti_max'	=>	79
			,'minacce'		=>	'Una possibile esagerazione è indicata dall\'affermazione di un numero più ampio della media di sintomi raramente '.
								'descritti da individui con una reale, grave psicopatologia'
			,'motivo'		=>	'Stile di risposta incoerente \nGrave psicopatologia \nEsagerazione'
			,'implicazioni'	=>	'Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale '.
								'VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti può verificarsi in '.
								'individui con reale e grave psicopatologia che riportano sintomi eredibili. Tuttavia, per coloro che non hanno '.
								'una storia attuale o passata di psicopatologia, è probabile che si tratti di esagerazione.'

		));
		Validita::create(array(
			'codice_scala' 	=> 'Fp-r'
			,'punti_min' 	=>	80
			,'punti_max'	=>	99
			,'minacce'		=>	'Una possibile esagerazione è indicata dall\'affermazione di un numero molto più ampio della media di sintomi '.
								'raramente descritti da individui con una reale, grave psicopatologia'
			,'motivo'		=>	'Stile di risposta incoerente \nGrave psicopatologia \nEsagerazione'
			,'implicazioni'	=>	'Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale '.
								'VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti può verificarsi in '.
								'individui con reale e grave psicopatologia che riportano sintomi credibili, ma può anche riflettere esagerazione. '.
								'Per coloro che non hanno una storia attuale o passata di psicopatologia, è molto probabile che si tratti di '.
								'esagerazione.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'Fp-r'
			,'punti_min' 	=>	100
			,'punti_max'	=>	NULL
			,'minacce'		=>	'Il protocollo non è valido. L\'esagerazione è indicata dall\'affermazione di un numero estremamente più ampio '.
								'della media di sintomi, raramente descritti da individui con una reale, grave psicopatologia'
			,'motivo'		=>	'Stile di risposta incoerente \nEsagerazione'
			,'implicazioni'	=>	'Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle '.
								'Scale VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti è estremamente '.
								'raro anche in individui con reale e grave psicopatologia, che riferiscono sintomi credibili. '.
								'I punteggi alle Scale Sostanziali non dovrebbero essere interpretati.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'Fs'
			,'punti_min' 	=>	NULL
			,'punti_max'	=>	79
			,'minacce'		=>	'Non vi sono indicazioni di esagerazione',
			,'motivo'		=>	''
			,'implicazioni'	=>	'Il protocollo è interpretabile.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'Fs'
			,'punti_min' 	=>	80
			,'punti_max'	=>	99
			,'minacce'		=>	'Una possibile esagerazione di sintomi somatici è indicata dall\'affermazione di un numero assai più ampio della '.
								'media di sintomi somatici raramente descritti da individui con reali problemi di tipo medico'
			,'motivo'		=>	'Stile di risposta incoerente \nSignificativi e/o molteplici problemi di natura medica '.
								'\nEsagerazione di lamentele somatiche'
			,'implicazioni'	=>	'Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale '.
								'VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti può verificarsi in '.
								'individui con condizioni mediche rilevanti che riportano sintomi credibili, ma può anche riflettere esagerazione.'.
								'Per coloro che non hanno una storia attuale o passata di problemi di salute fisica, questo indica probabilmente '.
								'che sono stati riferiti sintomi somatici non credibili. l punteggi alle Scale Somatiche dovrebbero essere '.
								'interpretati con cautela, alla luce di questa avvertenza.'
		));
		Validita::create(array(
			'codice_scala' 	=> 'Fs'
			,'punti_min' 	=>	100
			,'punti_max'	=>	NULL
			,'minacce'		=>	'I punteggi alle Scale Somatiche possono essere non validi. L\'esagerazione dei sin tomi somatici è indicata'.
								'dall\'affermazione di un numero estremamente più ampio della media di sintomi somatici raramente descritti da '.
								'individui con reali problemi di tipo medico'
			,'motivo'		=>	'Stile di risposta incoerente \nEsagerazione di lamentele somatiche'
			,'implicazioni'	=>	'Dovrebbe essere considerata la possibilità di uno stile di risposta incoerente, esaminando i punteggi alle Scale '.
								'VRIN-r e TRIN-r. Se esclusa, occorre notare che questo livello di risposte infrequenti è molto raro anche in '.
								'individui con considerevoli problemi di natura medica che riferiscono sintomi credibili. I punteggi alle Scale '.
								'Somatiche dovrebbero essere interpretati con cautela, alla luce di questa avvertenza.'
		));


		// TODO Preseguire con l'interpretazione
		// Interpretazione::create



	}

}

