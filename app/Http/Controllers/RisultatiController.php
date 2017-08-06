<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Risultato as Risultato;
use App\Models\Test as Test;
use App\Models\Scala as Scala;
use App\Models\GruppoScala as GruppoScala;
use App\Models\GruppoInterpretazione as GruppoInterpretazione;
use App\Models\Condizione as Condizione;
use App\Models\Conversione as Conversione;
use App\Models\Risposta as Risposta;
use App\Models\Item as Item;
use Request;
use Input;
use Log;

class RisultatiController extends Controller {

	// Lista di item critici
	var $item_critici = array();

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
    {
    	$test = Test::findOrFail($id);
        $gruppi_scale = GruppoScala::all();
        $scale = Scala::all(); //->orderBy('ordine');
        $risultati = Risultato::where('$test_id', '=', $id);
        
        return view('risultati.index', compact('test', 'gruppi_scale', 'scale', 'item_critici', 'cns'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		if(Request::ajax()) {
          	$data = Input::all();
          	$test = Test::findOrFail($data['test_id']);
          	if(!(array_key_exists('ordinamento', $data))){
          		
          		$this->CalcoloRisultati($test->id);
          	}
	        $gruppi_scale = GruppoScala::all();
        	$scale = Scala::orderBy('id')->get();
			if (array_key_exists('ordinamento', $data)){
			  $cns = $data['ordinamento']=='ordine2' ? 338 - count(Risposta::where('test_id', $test->id)->whereIn('valore', [0,1])->get()) : NULL;
	        }
		} 

		if(!(array_key_exists('ordinamento', $data))){
    		return view('risultati.index', compact('test', 'gruppi_scale', 'scale'));
      	}
      	
		if ($data['ordinamento']=='ordine1'){
			return view('risultati.index', compact('test', 'gruppi_scale', 'scale'));
		} else {
			return view('risultati.index2', compact('test', 'gruppi_scale', 'scale', 'cns'));
		}	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function item_critici()
	{
		if(Request::ajax()) {
          	$data = Input::all();
          	
          	$test = Test::findOrFail($data['test_id']);
            $scale = Scala::orderBy('id')->get();
	        $risultati = Risultato::where('test_id', $test->id)->get();
	        $item_critici = $this->getItemCritici($test->id, $risultati);
		}        
        return view('risultati.item_critici', compact('test', 'scale', 'risultati', 'item_critici')); //view('risultati.ajaxView')->with('risultati', $risultati);
	}

	public function store($id)
	{
      	$test = Test::findOrFail($id);
      	$this->CalcoloRisultati($test->id);

        $risultati = Risultato::where('test_id', $test->id)->get();
        $item_critici = $this->getItemCritici($test->id);
  		return view('test.show')->with([
			'test' => $test,
			'risposte' => Risposta::where('test_id', '=', $id),
			'risultati' => $risultati,
			'item_critici' => $item_critici
    	]);
	}

	public function CalcoloRisultati($test_id)
	{
		$counter = Test::find($test_id)->counter()->first();	
  		if($counter)
  		{
	  		if($counter->calcoli < 3)
			{
				$counter->calcoli = $counter->calcoli + 1;
				$counter->correzioni = 0;
				$counter->save();
			}
		}

		// Prima verifica che le risposte siano salvate
		$risposte = Risposta::where('test_id',$test_id);
		if($risposte->count()<338) {
			
			for($i = 1; $i<=338; $i++){
				//$r = $risposte->first('item_id',$i)->get();
				//if(!$r)
				//{
				//	$missing->push(new Risposta(['test_id'=>$test_id, 'item_id'=>$i, 'valore'=>null]));
				//}
				Risposta::firstOrCreate(['test_id'=>$test_id, 'item_id'=>$i]);
			}
			//$missing->save();
		}
		$scale = Scala::all();
		foreach ($scale as $scala) 
		{
  			
  			$codice_scala = $scala->codice;
  			if ($codice_scala=="FP-r")
  			{
  				exit;
  			}
  			$risultato = Risultato::firstOrNew(['test_id'=> $test_id, 'codice_scala'=> $codice_scala]);
  			      			
  			$risultato->punteggio_grezzo = $this->getPunteggio($test_id, $scala);
      		$risultato->punteggio_t = $scala != 'CNS' ? $this->getPuntiT($scala->codice, $risultato->punteggio_grezzo) : NULL;
      		$risultato->percentuale_risposte = $this->getPercRisposte($scala->codice, $test_id);

      		$risultato->save();
  		}
	  	
	}

	public function getPercRisposte($codice_scala, $test_id)
	{
		$domande_scala = Condizione::where(['codice_scala' => $codice_scala])->groupBy('item_id')->get();
		$risposte_date = Risposta::where('test_id', $test_id)->whereIn('item_id', $domande_scala->lists('item_id'))->whereIn('valore', [0,1])->get();

		return $risposte_date->count() * 100 / $domande_scala->count();		
	}

	public function getPuntiT($codice_scala, $punteggio_grezzo)
	{
		$punteggio_t = null;
		$conversione = Conversione::where(['codice_scala'=>$codice_scala, 'punteggio_grezzo'=>$punteggio_grezzo])->first(); 
		
		if ($conversione){
			// Minimo 30
			$punteggio_t = ($conversione->punteggio_t < 30) ? 30 : $conversione->punteggio_t;
		} else {
			// Assegna il valore massimo
			if($punteggio_grezzo > Conversione::where(['codice_scala'=>$codice_scala])->max('punteggio_grezzo')){
				$punteggio_t = Conversione::where(['codice_scala'=>$codice_scala])->max('punteggio_t');
			}
		}

		return $punteggio_t;
	}

	public function getPunteggio($test_id, $scala)
	{
		
		$punteggio_g = $scala->punteggio_base;
		$condizioni = Condizione::where(['codice_scala' => $scala->codice])->get();

		foreach($condizioni as $condizione) 
		{
			$risposta = Risposta::where(['test_id'=>$test_id, 'item_id'=>$condizione->item_id])->first();
			// Imposta a 2 il valore in caso di valore null
			$valoreRisposta = is_null($risposta->valore) ? 2 : $risposta->valore;

			if($risposta->valore == $condizione->valore_richiesto) 
			{
				if($condizione->set==0)
				{
					$punteggio_g += $condizione->punteggio_assegnato;
				}
				else
				{
					$id2 = $condizione->id + 1;
					$condizione2 = Condizione::where(['codice_scala' => $scala->codice, 'set'=>$condizione->set, 'id'=>$id2])->first();
					
					if(!(is_null($condizione2)))
					{
						$risposta2 = Risposta::where(['test_id'=> $test_id, 'item_id'=> $condizione2->item_id])->first();
						if( $risposta2->valore == $condizione2->valore_richiesto) 
						{
							$punteggio_g += $condizione->punteggio_assegnato;
						}
					}
				}
			}
		}

		return $punteggio_g;

	}

	public function getItemCritici($test_id, $risultati)
	{
		$item_critici = array();
		$condizioni = Condizione::whereIn('codice_scala', ['SUI','HLP','AXY','RC6','RC8','SUB','AGG'])->orderBy('item_id')->get();
		
		foreach($condizioni as $condizione) 
		{
			if($risultati->where('codice_scala',$condizione->codice_scala)->first()->punteggio_t >= 65){
				$risposta = Risposta::where(['test_id'=>$test_id, 'item_id'=>$condizione->item_id])->first();
				if($risposta->valore == $condizione->valore_richiesto) 
				{
					$item = Item::where(['id'=>$condizione->item_id])->first();
					$item_critici[] = ['codice'=> $condizione->codice_scala, 'item_id' => $condizione->item_id, 'testo'=>$item->testo, 'risposta'=> $risposta->valore>0?'V':'F'];
				}
			}
		}

		return $item_critici;
	}

}
