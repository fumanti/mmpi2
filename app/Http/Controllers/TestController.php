<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Test as Test;
use App\Models\Risposta as Risposta;
use App\Models\Risultato as Risultato;
use App\Models\Scala as Scala;
use App\Models\GruppoScala as GruppoScala;
use App\Models\Condizione as Condizione;
use App\Models\Item as Item;
use App\Models\Validita as Validita;
use App\Models\Profilo as Profilo;
use App\Models\Struttura as Struttura;
use App\Models\Interpretazione as Interpretazione;
use App\Models\TestCounter as TestCounter;
use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;
use Chumper\Zipper as Zipper;
use Excel;
use Auth;
use Request;
use Input;
use Session;
use Cache;

class TestController extends Controller {

	public function user()
	{
		session(['owner'=>'user']);
		return redirect('test'); // $this->index();
	}

	public function all()
	{
		session(['owner'=>'all']);
		return redirect('test'); //$this->index();
	}

	public function index()
	{
		if(Request::ajax()) {
          	return "";
		}

		$data = ['owner' => session('owner') ?:'user', 'search' => '', 'sort' => 'id', 'dir' => 'asc', 'page' => 1 ];

		$tests =  $this->getTests($data);
		$owner = $data['owner'];
		//session(['owner'=>$owner]);
		return view ('test.index', compact('tests', 'owner'));
	}

	public function getList()
	{
		if(Request::ajax()) {
          	$data = Input::all();		        
		}
		$tests =  $this->getTests($data); //($owner, $search, $sort, $dir, $page, $where);
		return view ('test.lista_test', compact('tests')); // , 'owner')); //, 'search', 'sort', 'dir'));
	}


	public function getTests($data)
	{
		$owner = 'user';
		$search = '';
		$sort = 'id';
		$dir = 'asc';
		$page = 1;

		$where = '';

		if (array_key_exists('owner', $data)) {
	  		$owner = $data['owner'];
        }

        if((array_key_exists('sort', $data) && !is_null($data['sort'])) 
		&&(array_key_exists('dir', $data) && !is_null($data['dir']))) 
        {
        	$sort = $data['sort'];
        	$dir = $data['dir'];
		}

		if(array_key_exists('search', $data) && !is_null($data['search']) && strlen($data['search'])>0) {
			$search = $data['search'];
		}
		
		$where = ($owner == 'user') ? 'id_user = '.Auth::user()->id : '';
		$where = $where.(strlen($where)>0 ? ' and ' : '').'(cognome like \''.$search.'%\' or nome like \''.$search.'%\')';

		// $tests = Test::with(['user' => function($u){$u->withTrashed();}])->whereRaw(strlen($where)>0?$where:'1 = 1')->orderBy($sort, $dir)->paginate(15);
		
		$tests = Test::joinWithUser()->whereRaw(strlen($where)>0?$where:'1 = 1')->select(['users.name as name', 'tests.*'])->orderBy($sort, $dir)->paginate(15);
		
		if (array_key_exists('page', $data)){
			$page = $data['page'];
		}

		session(['owner'=>$owner]);
		session(['search'=>$search]);
		session(['sort'=>$sort]);
		session(['dir'=>$dir]);
		session(['page'=>$page]);
		session(['where'=>$where]);

		return $tests;
	}

    /**
     * Mostra un test per indice
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    	// Elimina dati sessione per la ricerca
    	session()->forget('search');
    	session()->forget('sort');
    	session()->forget('dir');
    	session()->forget('page');

    	$test = Test::find($id);

    	if (is_null($test) || (($test->id_user != Auth::user()->id) && !Auth::user()->admin ))
    	{
    		// qui mettere la view con le risposte da riempire
    		return redirect('test');
    	}

		// Mette nella cache per sempre scale e gruppi di scale 	
		$scale = Cache::rememberForever('scale', function() {
	        return Scala::orderBy('id')->get();
	    });
		$gruppi_scale = Cache::rememberForever('gruppi_scale', function() {
	        return GruppoScala::all();
	    });
		
		// Verifica che siano presenti tutte le risposte per un test
    	$risposte = Risposta::where('test_id', '=', $test->id)->orderBy('item_id')->get();
    	if($risposte->count()<338){
				for($i = 1; $i<=338; $i++){
				if(!$risposte->where('item_id',$i)->first()){
                    $risposte->push(new Risposta(['test_id'=>$test->id, 'item_id'=>$i, 'valore'=>null]));
                }
			}
    	}

    	// Crea la struttura
    	// Metodo unico
    	// $result = ["Sezioni" => Struttura::getAll()["Sezioni"]];
    	// // Compila la sezione validita
    	// $result = $this->getValidita($id, $result);
    	// // Compila la sezione profilo
    	// $result = $this->getProfilo($id, $result);

        return view('test.show')->with([
			'test' => $test,
			'test_counter' => $test->counter(),
			'gruppi_scale' => $gruppi_scale ?: GruppoScala::all(),
			'scale' => $scale ?: Scala::orderBy('id')->get(),
		    'risposte' => $risposte,
			'risultati' => Risultato::where('test_id', $test->id)->get(),
			'item_critici' => $this->getItemCritici($id),
			'validita' => $this->getValidita($id),
			'profilo' => $this->getProfilo($id)
    	]);
    }

	public function nuovo()
	{
		return view('test/nuovo');
	}

	public function edit($id)
	{
		$test = Test::findOrFail($id);
		return view('test.edit', compact('test'));
	}

	public function store()
	{	
		$input = Request::all();
		if(Auth::user()->can_make_new() )
		{
			$test = Test::create($input);
			if(Auth::user()->has_max_test())
			{
				TestCounter::create(['user_id'=>Auth::user()->id, 'test_id' => $test->id, 'calcoli' => 0, 'correzioni' => 0]);
			}
			return redirect('test/'.$test->id); //redirect('test/'.$test->id.'/risposte');
		}
		else
		{
			return redirect('home');
		}
	}

	public function update($id)
	{
		//if(Request::ajax()) {
          	$data = Request::all(); // Input::all();
          	
          	$test = Test::findOrFail($id);
          	$test->cognome = $data['cognome'];
          	$test->nome = $data['nome'];
          	$test->sesso = $data['sesso'];
          	$test->data_nascita = $data['data_nascita'];
          	$test->data_somministrazione = $data['data_somministrazione'];
          	          	
	        $test->save();

	        // $gruppi_scale = GruppoScala::all();
        	// $scale = Scala::all(); //->orderBy('ordine');
	        // $risultati = Risultato::where('test_id', $test->id)->get();
		//}        
        return redirect('test/'.$id); //, compact('test')); //view('test.header')->with('test', $test);
	}

	// public function edit($id)
	// {
	// 	$test = Test::findOrFail($id);
	// 	return view('test/edit', compact('test'));
	// }

	public function elimina($id)
	{	
		$test = Test::findOrFail($id);
		$test->delete();
		
		return redirect('test');
	}

	public function getItemCritici($test_id)
	{
		$item_critici = array();
		$condizioni = Condizione::whereIn('codice_scala', ['SUI','HLP','AXY','RC6','RC8','SUB','AGG'])->orderBy('item_id')->get();
		$risultati = Risultato::where('test_id', $test_id)->where('codice_scala','<>','CNS')->get();
		$scala = Scala::all();

		if ($risultati->count() > 0)
		{	
			foreach($condizioni as $condizione)
			{

				if($risultati->where('codice_scala',$condizione->codice_scala)->first()->punteggio_t >= 65){
					$risposta = Risposta::where(['test_id'=>$test_id, 'item_id'=>$condizione->item_id])->first();
					if($risposta->valore == $condizione->valore_richiesto) 
					{
						$item = Item::where(['id'=>$condizione->item_id])->first();
						// if(!in_array($condizione->codice_scala, $item_critici))
						// {
						// 	$item_critici[]	= ['descrizione'=> $scala->where('codice', $condizione->codice_scala)->first()->descrizione,'codice'=> $condizione->codice_scala];
						// }
						$item_critici[] = ['codice'=> $condizione->codice_scala, 'descrizione'=> $scala->where('codice', $condizione->codice_scala)->first()->descrizione,'item_id' => $condizione->item_id, 'testo'=>$item->testo, 'risposta'=> $risposta->valore>0?'V':'F'];
					}
				}
			}
		}
		// $return = collect($item_critici)->groupBy('codice');
		return $item_critici;
	}

	

	public function getValidita($test_id) //, $result)	// ex metodo unico
	{
		// Risultati del test
		$risultati_test = Risultato::where('test_id', $test_id)
		->whereIn("codice_scala", ['CNS', 'VRIN-r', 'TRIN-r', 'F-r', 'Fp-r', 'Fs', 'FBS-r', 'RBS', 'L-r', 'K-r'])
		->get();
		
		$scale = Scala::all();
		$struttura = Struttura::getAll();
		$result = ["Sezioni" => $struttura["Sezioni"]];
		
		$validita = Validita::getAll();
		$interpretazione = Interpretazione::getAll();
		$found_res = array();
		


		foreach ($validita as $scala => $item) 
		{
		 	$p = $risultati_test->where('codice_scala', $scala)->first();
		 	if($p != null)
		 	{
			 	$punteggio = $scala != "CNS" ? $p->punteggio_t : $p->punteggio_grezzo;
				
				foreach ($item as $i) 
				{
					// if($i["range"]["min"] <= $punteggio && $i["range"]["max"] >= $punteggio)
					if((!array_key_exists("min", $i["range"]) || $i["range"]["min"] <= $punteggio) 
					&& (!array_key_exists("max", $i["range"]) || $i["range"]["max"] >= $punteggio))
					{						
						$found_res[$scala] = 
						[
							"descrizione" => $scale->where('codice',$scala)->first()->descrizione,
							"punteggio" => $punteggio, 
							"risultato" => $i["risultato"],
							"minacce" => $i["minacce"], 
							"motivo" => $i["motivo"],
							"implicazioni" => $i["implicazioni"] 
						];
						break;
					}
				}
			}
		}
		
		foreach ($struttura["Sezioni"]["I"]["Sottosezioni"] as $key => $value) {
			$max = 0;
			foreach ($value["Fonti"] as $gruppi => $g) {
				foreach ($g as $k => $v) {
					if(array_key_exists($k, $found_res)) {
						$result["Sezioni"]["I"]["Sottosezioni"][$key]["Fonti"][$gruppi][$k] = $found_res[$k];
						$max = ($found_res[$k]["risultato"] > $max) ? $found_res[$k]["risultato"] : $max;
					}
				}
			}

			// Prende sempre il valore massimo
			$result["Sezioni"]["I"]["Sottosezioni"][$key]["interpretazione"] = $max;
			
			// Aggiorna il messaggio per ogni sottosezione
			$result["Sezioni"]["I"]["Sottosezioni"][$key]["messaggio"] = $interpretazione[$max];
		}

		// Messaggio generale - da terminare
		foreach ($result["Sezioni"]["I"]["Sottosezioni"] as $key => $value) {
			if(!array_key_exists("messaggio", $result["Sezioni"]["I"]))
				$result["Sezioni"]["I"]["messaggio"] = array();
				array_push($result["Sezioni"]["I"]["messaggio"], $value["messaggio"]);			
		}

		return $result;
	}

	public function getProfilo($test_id) //, $result)	// ex metodo unico
	{
		// Impostare le scale appropriate
		$risultati_test = Risultato::where('test_id', $test_id)->get();
		
		$found_res = array();
		
		$scale = Scala::all();
		$struttura = Struttura::getAll();
		$result = ["Sezioni" => $struttura["Sezioni"]];		

		foreach (Profilo::getAll() as $scala => $item)
		{

		 	$p = $risultati_test->where('codice_scala', $scala)->first();

		 	if(isset($p)) 
		 	{
			 	$punteggio = $p->punteggio_t;
			 				
			 	//
				$personalita = $this->search_profile($item["personalita"], $test_id, $scala);
				$correlati = $this->search_profile($item["correlati"], $test_id, $scala);
				$diagnosi = $this->search_profile($item["diagnosi"], $test_id, $scala);
				$trattamento = $this->search_profile($item["trattamento"], $test_id, $scala);
				
				if ( (isset($personalita) && count($personalita)) || (isset($correlati) && count($correlati)) || 
					 (isset($diagnosi) && count($diagnosi)) || (isset($trattamento) && count($trattamento)) )
				{
					$found_res[$scala] = array(
						"descrizione" => $scale->where('codice',$scala)->first()->descrizione,
						"punteggio" => $punteggio, 
						"personalita" => $personalita, 
						"correlati" => $correlati,
						"diagnosi" => $diagnosi,
						"trattamento" => $trattamento
					);
				}
			}
		}

		foreach ($struttura["Sezioni"]["II"]["Sottosezioni"] as $key => $value) {
			$keep = false;
			foreach ($value["Fonti"] as $gruppi => $g) {
				foreach ($g as $k => $v) {
					if(array_key_exists($k, $found_res)){
						$result["Sezioni"]["II"]["Sottosezioni"][$key]["Fonti"][$gruppi][$k] = $found_res[$k];
						$keep = true;
					}
				}
			}
			// Cancella la sottosezione se nessuna scala è stata valorizzata
			if(!$keep)
				unset($result["Sezioni"]["II"]["Sottosezioni"][$key]);

		}

		return $result;
	}



	public function search_profile($input, $test_id, $scala)
	{
		$output = array();
		if($input != null)
		foreach ($input as $value) 
		{
			if (is_array($value) && array_key_exists("range", $value))
			{
				if((array_key_exists("min", $value["range"])))
				{
					if(array_key_exists("max", $value["range"]))
					{
						$result = Risultato::where('test_id', $test_id)
						->where('codice_scala', $scala)
						->where('punteggio_t', '>=', $value["range"]["min"])
						->where('punteggio_t', '<=', $value["range"]["max"])
						->get();
					}
					else
					{
						$result = Risultato::where('test_id', $test_id)
						->where('codice_scala', $scala)
						->where('punteggio_t', '>=', $value["range"]["min"])->get();
					}

					if($result != null && $result->count())
					{
						// Aggiunge i testi relativi
						foreach ($value as $v) 
						{
							if(!is_array($v))
							{
								$output[] = $v;
							}
							else
							{
								if (array_key_exists("range", $v) && array_key_exists("min", $value["range"]))
								{
									// if((array_key_exists("min", $value["range"])))
									// {
									// 	if(array_key_exists("max", $value["range"]))
									// 	{
									// 		$result = Risultato::where('test_id', $test_id)
									// 		->whereIn('codice_scala', $v["range"]["scala"])
									// 		->where('punteggio_t', '>=', $v["range"]["min"])
									// 		->where('punteggio_t', '<=', $v["range"]["max"])
									// 		->get();
									// 	}
									// 	else
									// 	{
											$result = Risultato::where('test_id', $test_id)
											->whereIn('codice_scala', $v["range"]["scala"])
											->where('punteggio_t', '>=', $v["range"]["min"])->get();
									// 	}
									// }

									// Se vi sono risultati
									if(count($result))
									{
										// Aggiunge le scale che hanno determinato il punteggio
										$scale = '';
										foreach ($result as $key => $rr) 
										{
											$scale = $scale . ($key > 0 ? ', ' : '') . $rr->codice_scala . ': ' . $rr->punteggio_t;
										}

										foreach ($v as $vv) 
										{
											if(!is_array($vv))
											{
												$output[] = $vv . ' ('. $scale .')';
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}

		return $output;
	}

	var $excel;
	
	public function export($id) {
		$this->excel($id,1);

/*		$test = Test::with('user')->findOrFail($id);
        $gruppi_scale = GruppoScala::all();
        $scale = Scala::all(); //->orderBy('ordine');
        $risultati = Risultato::where('test_id', $id)->get();
        $item_critici = $this->getItemCritici($test->id);
		$risposte = Risposta::where('test_id', $id)->orderby('item_id')->get();

        // Legge il template
		$fileName = public_path().'/template1.xlsx';
        $Reader = \PHPExcel_IOFactory::createReader('Excel2007');
        $Reader->setIncludeCharts(TRUE);
		//$excel = $Reader->load($fileName);
		$this->excel = new \PHPExcel();
		$this->excel = $Reader->load($fileName);
    	
    	// 1 Prima pagina
    	$sheet = $this->excel->getSheetByName('Cover');

		// 2 Profilo delle Scale di validità
		$sheet = $this->excel->getSheet(1);
	   	$this->set_header($sheet, $test);
    	// Valori
    	$this->set_values($sheet, 'B', $test, $scale->where('gruppo_scala_id', 1), $risultati);
    	// Risposte Vero/Falso (solo scale di validità)
		//$domande_scale_validita = Condizione::whereIn('codice_scala', ['VRIN-r','TRIN-r','F-r','Fp-r','FS','FBS-r','L-r','K-r'])->groupBy('item_id')->get();
		$risposte_date = Risposta::where('test_id', $test->id)->whereIn('valore', [0,1])->get();
		$perc_risposte_vero = round($risposte_date->where('valore',1)->count() * 100 / count($risposte_date),0);
		$perc_risposte_falso = round($risposte_date->where('valore',0)->count() * 100 / count($risposte_date),0);
		$risposte_non_so = 338 - count($risposte_date);
		//Valori
    	$sheet->setCellValue('B51',$risposte_non_so);
    	$sheet->setCellValue('G51',$perc_risposte_vero);
    	$sheet->setCellValue('G52',$perc_risposte_falso);
		// Piedipagina
		$sheet->setCellValue('A64', 'Pagina 2 di '.(count($item_critici)>0?'8':'7'));
	    
		// 3 Profilo delle Scale Sovraordinate e Cliniche Ristrutturate
		$sheet = $this->excel->getSheet(2);
	   	$this->set_header($sheet, $test);
    	// Valori
    	$this->set_values($sheet, 'B', $test, $scale->where('gruppo_scala_id', 2), $risultati);
		$this->set_values($sheet, 'F', $test, $scale->where('gruppo_scala_id', 3), $risultati);
		// Piedipagina
		$sheet->setCellValue('A67', 'Pagina 3 di '.(count($item_critici)>0?'8':'7'));

		// 4 Profilo delle Scale Somatico/Cognitive e Internalizzazione
		$sheet = $this->excel->getSheet(3);
	   	$this->set_header($sheet, $test);
    	// Valori
    	$this->set_values($sheet, 'B', $test, $scale->where('gruppo_scala_id', 4), $risultati);
		$this->set_values($sheet, 'H', $test, $scale->where('gruppo_scala_id', 5), $risultati);
		// Piedipagina
		$sheet->setCellValue('A74', 'Pagina 4 di '.(count($item_critici)>0?'8':'7'));

		// 5 Profilo delle Scale di Esternalizzazione, Interpersonali e Interessi
		$sheet = $this->excel->getSheet(4);
	   	$this->set_header($sheet, $test);
    	// Valori
    	$this->set_values($sheet, 'B', $test, $scale->where('gruppo_scala_id', 6), $risultati);
		$this->set_values($sheet, 'G', $test, $scale->where('gruppo_scala_id', 7), $risultati);
		$this->set_values($sheet, 'M', $test, $scale->where('gruppo_scala_id', 8), $risultati);
		// Piedipagina
		$sheet->setCellValue('A69', 'Pagina 5 di '.(count($item_critici)>0?'8':'7'));

		// 6 Profilo delle Scale di Esternalizzazione, Interpersonali e Interessi
		$sheet = $this->excel->getSheet(5);
	   	$this->set_header($sheet, $test);
    	// Valori
    	$this->set_values($sheet, 'C', $test, $scale->where('gruppo_scala_id', 9), $risultati);	
		// Piedipagina
		$sheet->setCellValue('A67', 'Pagina 6 di '.(count($item_critici)>0?'8':'7'));

		// Scrive la matrice delle Risposte
		$this->writeMatrix($risposte);
		
		// Item critici
		$this->writeItemCritici($item_critici);

		// Scrive la Validita
		$this->writeValidita($this->getValidita($id));

		// Scrive il Profilo
		$this->writeProfilo($this->getProfilo($id));
		
		// Scrive la cover
		$this->writeCover($test);

		$this->excel->setActiveSheetIndexByName('Cover');

		$outputfilename = 'test_'.$test->cognome[0].$test->nome[0].$test->id.'.xlsx';
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"".$outputfilename."\"");
		header("Cache-Control: max-age=0");

		$writer = \PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');   
		$writer->setIncludeCharts(TRUE);
		$writer->save("php://output");
		exit;*/
	}

	public function export2($id) {
		$this->excel($id,2);
	}

	public function excel($id, $tipo) {
		$test = Test::with('user')->findOrFail($id);
        $gruppi_scale = GruppoScala::all();
        $scale = Scala::all(); //->orderBy('ordine');
        $risultati = Risultato::where('test_id', $id)->get();
        $item_critici = $this->getItemCritici($test->id);
		$risposte = Risposta::where('test_id', $id)->orderby('item_id')->get();

        // Legge il template
		$fileName = public_path().'/template2.xlsx';
        $Reader = \PHPExcel_IOFactory::createReader('Excel2007');
        $Reader->setIncludeCharts(TRUE);
		$this->excel = new \PHPExcel();
		$this->excel = $Reader->load($fileName);

		if($tipo == '2')
		{
			$this->excel->removeSheetByIndex(6);
			$this->excel->removeSheetByIndex(5);
			$this->excel->removeSheetByIndex(4);
			$this->excel->removeSheetByIndex(3);
			$this->excel->removeSheetByIndex(2);
		}
		if($tipo == '1')
		{
			$this->excel->removeSheetByIndex(14);
			$this->excel->removeSheetByIndex(13);
			$this->excel->removeSheetByIndex(12);
			$this->excel->removeSheetByIndex(11);
			$this->excel->removeSheetByIndex(10);
			$this->excel->removeSheetByIndex(9);
			$this->excel->removeSheetByIndex(8);
			$this->excel->removeSheetByIndex(7);
		}

		// Scrive intestazione e piedipagina
		$this->writeHeader($test);
		$this->writeFooter();

		// Scrive la matrice delle Risposte
		$this->writeMatrix($risposte);
		
		// Scrive i dati sul foglio Dati
		$this->writeDataResults($risultati);
		
		// Item critici
		$this->writeItemCritici($item_critici);

		// Scrive la Validita
		$this->writeValidita($this->getValidita($id));

		// Scrive il Profilo
		$this->writeProfilo($this->getProfilo($id));
		
		// Risposte date Vero Falso
		$risposte_date = Risposta::where('test_id', $test->id)->whereIn('valore', [0,1])->get();
		$this->writeTrueFalsePerc($risposte_date);

		// Scrive la cover
		$this->writeCover($test);

		$this->excel->setActiveSheetIndexByName('Cover');

		$outputfilename = 'test_'.mb_strtoupper($test->cognome[0].$test->nome[0],'UTF-8').$test->id;
		header("Content-Type: application/vnd.ms-excel");
		header('Content-Disposition: attachment; filename="'.$outputfilename.'.xlsx"');
		header("Cache-Control: max-age=0");

		$writer = \PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
		$writer->setIncludeCharts(TRUE);
		$writer->save("php://output");
		exit;
	}

	public function writeCover($test)
	{
    	$sheet = $this->excel->getSheetByName('Cover');
    	
    	$sheet->setCellValue('G17','Correzione manuale effettuata da '.$test->user->name);
		$sheet->setCellValue('G43', mb_strtoupper($test->cognome, 'UTF-8').', '.$test->nome);
    	$sheet->setCellValue('G45', $test->data_somministrazione);
    	$sheet->setCellValue('G47', $test->user->name);
    	$sheet->setCellValue('A68', 'Correzione manuale effettuata da '. $test->user->name .' e profilo grafico tramite Excel realizzato da ITCI © e concesso in uso ai membri');
	}

	public function writeHeader($test)
	{
		$sheet = $this->excel->getSheetByName('Matrice');

		$left = utf8_encode("MMPI-2-RF\rprofilo grafico");
		$right = utf8_encode('Nominativo: '.mb_strtoupper($test->cognome, 'UTF-8').' '.$test->nome."\r".$test->data_somministrazione);

		$string = (isset($left) ? '&L&B&16 '.$left: "").(isset($right) ? '&R&B&12 '.$right: "");

		foreach($this->excel->getSheetNames() as $sheetName) 
		{
			if($sheetName == 'Cover')
				continue;
			$this->excel->getSheetByName($sheetName)->getHeaderFooter()->setOddHeader($string);
			$this->excel->getSheetByName($sheetName)->getHeaderFooter()->setEvenHeader($string);
        }
	}

	public function writeFooter()
	{
		foreach($this->excel->getSheetNames() as $sheetName) 
		{
			if($sheetName == 'Cover')
				continue;
			$this->excel->getSheetByName($sheetName)->getHeaderFooter()->setOddFooter('&L&B&14  Pagina &P di &N');
			$this->excel->getSheetByName($sheetName)->getHeaderFooter()->setEvenFooter('&L&B&14 Pagina &P di &N');
        }
	}

	public function writeValidita($validita){

		$sheet = $this->excel->getSheetByName('Validita');
		
		$row = 4;
		foreach($validita["Sezioni"]["I"]["Sottosezioni"] as $s){
			
			// Titolo sottolineato
			$sheet->setCellValue('B'.$row, $s["Sottosezione"]);
			$this->font($sheet->getStyle('B'.$row), ['size'=> 14, 'bold'=> true]);
			$this->border($sheet->getStyle('B'.$row.":C".$row), "bottom", "medium");
			$this->align($sheet->getStyle('B'.$row.":C".$row), "topleft");

			$firstLine = true;
			foreach($s["Fonti"] as $gruppi){
				foreach($gruppi as $key => $value){
					// riga vuota
					$row++;
					// Imposta altezza
					$sheet->getRowDimension($row)->setRowHeight(8);

					// se non è la prima mette un separatore
					if(!$firstLine)
					{
						$this->border($sheet->getStyle("C".$row), "top", "hair");
					}
					// Scala
					$row++;
					
					$this->align($sheet->getStyle('C'.$row), "topleft");
					$text = new \PHPExcel_RichText();
					
					// Codice scala					
					// Bold
					$objBold = $text->createTextRun($key);
					$objBold->getFont()->setBold(true);
					$objBold->getFont()->setSize(13);
					// Nome Scala e punteggio
					$normal = $text->createTextRun("  −  ".$value["descrizione"].(array_key_exists("punteggio", $value)?' ('.$value['punteggio'].')':''));
					$normal->getFont()->setSize(13);

					$sheet->getCell('C'.$row)->setValue($text);


					// Glyph validità
					$row++;
					if(array_key_exists("risultato", $value)){
						//$sheet->mergeCells('B'.($row-1).":B".$row);
						$glyph = html_entity_decode($value["risultato"]==0?"&#x2714;":($value["risultato"]==4?"&#x1F6AB;":"&#x26A0;"),ENT_QUOTES,'UTF-8');
						$sheet->setCellValue('B'.$row, $glyph."  "); //'✔');
						$range = $sheet->getStyle('B'.$row);
						$this->align($range, "topright");
						$this->font($range, ["size"=>($value["risultato"]==0?16:20)]);
					}
					
					// Messaggio
					if(array_key_exists("minacce", $value))
					{
						$messaggio = "";
						foreach($value["minacce"] as $i)
							$messaggio .= $i; //."\r";
						$sheet->setCellValue('C'.$row, $messaggio);
						// Testo a capo
						$sheet->getStyle('C'.$row)->getAlignment()->setWrapText(true);
						$this->font($sheet->getStyle('C'.$row), ['size'=> 12]);
  					}

  					if(array_key_exists("risultato", $value) && $value["risultato"])
  					{
        				$row++; $sheet->getRowDimension($row)->setRowHeight(8);
        				$row++;
						$sheet->setCellValue('C'.$row, "Implicazioni per l'interpretazione");
						$this->font($sheet->getStyle('C'.$row), ['size'=> 12, 'bold'=> true]);
        				$row++;

						$messaggio = "";
						foreach($value["implicazioni"] as $i)
							$messaggio .= $i; //."\r";
						$sheet->setCellValue('C'.$row, $messaggio);	
						// Testo a capo
						$sheet->getStyle('C'.$row)->getAlignment()->setWrapText(true);
					}

					// Riga vuota
					$row++;
					// Imposta altezza
					$sheet->getRowDimension($row)->setRowHeight(8);

					// Righe successive
					$firstLine = false;
				}
			}


			$row++;
		}
	}

	public function writeProfilo($profilo)
	{
		 $sheet = $this->excel->getSheetByName('Profilo');

		// Riga iniziale
		$row = 3;

		foreach($profilo["Sezioni"]["II"]["Sottosezioni"] as $s)
		{
			// Titolo 
			$sheet->setCellValue('A'.$row, mb_strtoupper($s["Sottosezione"], 'UTF-8'));
			$this->font($sheet->getStyle('A'.$row), ["size"=>14, "bold"=>true]);

			$row++;
			$row++;
			// Contenuto scale
			foreach($s["Fonti"] as $gruppi) 
			{
				foreach($gruppi as $key => $value)
				{
					if((isset($value["personalita"]) && count($value["personalita"])) 	|| 
					   (isset($value["correlati"]) && count($value["correlati"])) 		|| 
					   (isset($value["diagnosi"]) && count($value["diagnosi"])) 		|| 
					   (isset($value["trattamento"]) && count($value["trattamento"])) 	)
					{
						// Scala
						$scala = mb_strtoupper($key, 'UTF-8')."  −  ".mb_strtoupper($value["descrizione"], 'UTF-8')." (".mb_strtoupper($value['punteggio'], 'UTF-8').")";
						$sheet->setCellValue('B'.$row, $scala);
						$this->font($sheet->getStyle('B'.$row), ["bold"=>true]);
						$this->border($sheet->getStyle('B'.$row.":C".$row), "bottom", "medium");
						$row++;

						// Sintomi clinici, tendenze comportamentali e caratteristiche di personalità
						if(count($value["personalita"]))
						{
							$row++;
							$sheet->setCellValue('B'.$row, "Sintomi clinici, tendenze comportamentali e caratteristiche di personalità\r");	
							$sheet->getStyle('B'.$row)->getFont()->setBold(true);
							$sheet->getStyle('B'.$row)->getAlignment()->setWrapText(true);
							$this->align($sheet->getStyle('B'.$row), "topleft");

							$messaggio = "";
							foreach($value["personalita"] as $i)
								$messaggio .= $i."\r";
							$sheet->setCellValue('C'.$row, $messaggio);	
							// Testo a capo
							$sheet->getStyle('C'.$row)->getAlignment()->setWrapText(true);
							$this->align($sheet->getStyle('C'.$row), "topleft");
							
							//$this->border($sheet->getStyle('B'.$row.":C".$row), "bottom", "hair");
							$row++;
						}

						// Correlati Empirici
						if(count($value["correlati"]))
						{
							$row++;
							$sheet->setCellValue('B'.$row, "Correlati Empirici\r");	
							$sheet->getStyle('B'.$row)->getFont()->setBold(true);
							$sheet->getStyle('B'.$row)->getAlignment()->setWrapText(true);
							$this->align($sheet->getStyle('B'.$row), "topleft");

							$messaggio = "";
							foreach($value["correlati"] as $i)
								$messaggio .= $i."\r";
							$sheet->setCellValue('C'.$row, $messaggio);	
							// Testo a capo
							$sheet->getStyle('C'.$row)->getAlignment()->setWrapText(true);
							$this->align($sheet->getStyle('C'.$row), "topleft");
							
							//$this->border($sheet->getStyle('B'.$row.":C".$row), "bottom", "hair");
							$row++;
						}

						// Considerazioni diagnostiche
						if(count($value["diagnosi"]))
						{
							$row++;
							$sheet->setCellValue('B'.$row, "Considerazioni diagnostiche\r");	
							$sheet->getStyle('B'.$row)->getFont()->setBold(true);
							$sheet->getStyle('B'.$row)->getAlignment()->setWrapText(true);
							$this->align($sheet->getStyle('B'.$row), "topleft");

							$messaggio = "";
							foreach($value["diagnosi"] as $i)
								$messaggio .= $i."\r";
							$sheet->setCellValue('C'.$row, $messaggio);	
							// Testo a capo
							$sheet->getStyle('C'.$row)->getAlignment()->setWrapText(true);
							$this->align($sheet->getStyle('C'.$row), "topleft");
							
							//$this->border($sheet->getStyle('B'.$row.":C".$row), "bottom", "hair");
							$row++;
						}

						// Considerazioni per il trattamento
						if(count($value["trattamento"]))
						{
							$row++;
							$sheet->setCellValue('B'.$row, "Considerazioni per il trattamento\r");	
							$sheet->getStyle('B'.$row)->getFont()->setBold(true);
							$sheet->getStyle('B'.$row)->getAlignment()->setWrapText(true);
							$this->align($sheet->getStyle('B'.$row), "topleft");

							$messaggio = "";
							foreach($value["trattamento"] as $i)
								$messaggio .= $i."\r";
							$sheet->setCellValue('C'.$row, $messaggio);	
							// Testo a capo
							$sheet->getStyle('C'.$row)->getAlignment()->setWrapText(true);
							$this->align($sheet->getStyle('C'.$row), "topleft");
							
							$row++;
						}						
					}

				}
			}
		}
	}

	public function writeMatrix($risposte){
		
		$sheet = $this->excel->getSheetByName('Matrice'); 
    	
    	// Valori
    	$column='C';
    	$maxColumn='V';
    	$row=9;
		
		foreach($risposte as $risposta){
			if($column <= $maxColumn){
				$sheet->setCellValue($column.$row, (is_null($risposta->valore) ? 0 :($risposta->valore==0?2:1)) );
				$column++;
			}
			if($column>$maxColumn){
				$column = 'C';
				$row++;
			}
		}
	}

	public function writeDataResults($risultati) {
		$sheet = $this->excel->getSheetByName('Dati');

		foreach ($risultati as $risultato) {
			$col = $this->getCol($risultato->codice_scala, $sheet);

			// Punteggio grezzo
			$sheet->setCellValue($col.'2', $risultato->punteggio_grezzo);
			// Punteggio T
			$sheet->setCellValue($col.'3', $risultato->punteggio_t);
			// Percentuale risposte
			$sheet->setCellValue($col.'4', $risultato->percentuale_risposte);
		}

		$sheet->setSheetState(\PHPExcel_Worksheet::SHEETSTATE_HIDDEN);
	}


	public function getCol($value, $sheet) {
		$row = 1;
		$lastColumn = $sheet->getHighestColumn();
		$lastColumn++;
		for ($column = 'A'; $column != $lastColumn; $column++) {
		    $cell = $sheet->getCell($column.$row);
		  	if($cell->getValue() == $value){
		  		return $column;
		  	}
		}
	}


	public function writeItemCritici($item_critici){
		
		$sheet = $this->excel->getSheetByName('Item critici');

		if (count($item_critici)>0) {
			$row=10;

			// Valori
			foreach(array_unique(array_pluck($item_critici, 'codice')) as $scala) { 		
			  	$sheet->getStyle('B'.$row)->getFont()->setBold(TRUE);
			  	$sheet->setCellValue('B'.$row, $scala.' - '.$item_critici[array_search($scala,array_fetch($item_critici,'codice'))]['descrizione']);
			  	$row++;
	          foreach($item_critici as $item_critico) {
		      	if($item_critico['codice'] == $scala) {
	              $sheet->setCellValue('A'.$row, $item_critico['item_id']);
	              $sheet->setCellValue('B'.$row, $item_critico['testo'].' ('.$item_critico['risposta'].')');
	              $row++;
	            }
	          }
	          $row++;
    		}	
			// Piedipagina
			$sheet->setCellValue('A69', 'Pagina 8 di '.(count($item_critici)>0?'8':'7'));
		}
	}

	public function writeTrueFalsePerc($risposte_date)
	{
		// $sheet = $this->excel->getSheetByName('1');
		$sheet = $this->excel->getSheet(2);
		// Percentuale risposte Vero
    	$sheet->setCellValue('G48', round($risposte_date->where('valore',1)->count() * 100 / count($risposte_date),0));
    	// Percentuale risposte Falso
    	$sheet->setCellValue('G49', round($risposte_date->where('valore',0)->count() * 100 / count($risposte_date),0));
	}

	// var $STYLE_BOLD_LEFT = array(
	//     'font' => array('bold' => true, 'size'=> 14,),
	//     'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_LEFT,),
 //    );

	public function align($range, $style)
	{
		if($style == "topleft")
			$styleArray = ["horizontal" => \PHPExcel_Style_Alignment::HORIZONTAL_LEFT, "vertical"=> \PHPExcel_Style_Alignment::VERTICAL_TOP];
		else if($style == "topright")
			$styleArray = ["horizontal" => \PHPExcel_Style_Alignment::HORIZONTAL_RIGHT, "vertical"=> \PHPExcel_Style_Alignment::VERTICAL_TOP];
		else if ($style == "center")
			$styleArray = ["horizontal" => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER, "vertical"=> \PHPExcel_Style_Alignment::VERTICAL_BOTTOM];
		$range->applyFromArray(['alignment' => $styleArray]);
	}

	public function border($range, $border, $style)
	{
		if($style == "hair")
			$set = \PHPExcel_Style_Border::BORDER_HAIR;
		else if ($style == "thick")
			$set = \PHPExcel_Style_Border::BORDER_THICK;
		else if ($style == "medium")
			$set = \PHPExcel_Style_Border::BORDER_MEDIUM;

		$range->applyFromArray(['borders' => [$border => ['style' => $set ]]]);
	}

	public function font($range, $array)
	{
		$range->applyFromArray(['font' => $array]);
	}

	private function set_header($sheet, $test) {
	   	$sheet->setCellValue('F1', utf8_encode('Nominativo: '.$test->cognome.' '.$test->nome)); //.' ('.$test->cognome[0].$test->nome[0].$test->id.')'));
	    $sheet->setCellValue('F2', utf8_encode($test->data_somministrazione));
	}

	function set_values($sheet, $start_column, $test, $scale, $risultati) {
		$column = $start_column;
		foreach($scale as $scala){
		  $sheet->setCellValue($column.'46', $test->risultati->where('codice_scala',$scala->codice)->first()->punteggio_grezzo);
		  $sheet->setCellValue($column.'47', $test->risultati->where('codice_scala',$scala->codice)->first()->punteggio_t);
		  $sheet->setCellValue($column.'48', $test->risultati->where('codice_scala',$scala->codice)->first()->percentuale_risposte);
		  $column++;
		}
	}

}
