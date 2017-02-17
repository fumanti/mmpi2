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
use App\Models\TestCounter as TestCounter;
use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;
use Chumper\Zipper as Zipper;
use Excel;
use Auth;
use Request;
use Input;
use Session;

class TestController extends Controller {

	public function index()
	{
		// if (Request::ajax()){
		// 	$data = Input::all();
  //         	$id_user = $data['id_user'];
  //         	if (strlen($id_user)>0) {
		// 		$tests = Test::where('id_user', '=', $id_user)->paginate(5);
  //         	} else {
  //         		$tests = Test::with('user')->paginate(5);
		// 	}
		// 	return view ('test.grid', compact('tests'));
		// } else {
			// $id_user = 1;
			// if (Auth::user()->admin){
			// 	if (is_null($id_user)){
			// 		$tests = Test::with('user')->paginate(5);
			// 	} else {
			// 		$tests = Test::with('user')->where('id_user', '=', Auth::user()->id)->paginate(5);
			// 	}
			// } else {
			// 	$tests = Test::with('user')->where('id_user', '=', Auth::user()->id)->paginate(5);
			// }
			$tests = Test::with('user')->paginate(5);
			$filter = 'Tutti i test';
			session(['filter'=>$filter]);
			return view ('test.index', compact('tests', 'filter'));
		//}	
	}

	public function user(){
		$filter = 'I miei test';
		session(['filter'=>$filter]);
		$tests = Test::with('user')->where('id_user', '=', Auth::user()->id)->paginate(5);
		return view ('test.index', compact('tests', 'filter'));
	}

    /**
     * Mostra un test per indice
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    	$test = Test::find($id);

    	if (is_null($test) || (($test->id_user != Auth::user()->id) && !Auth::user()->admin ))
    	{
    		// qui mettere la view con le risposte da riempire
    		return redirect('test');
    	}
    	
    	$risposte = Risposta::where('test_id', '=', $test->id)->get();
    	if($risposte->count()<338){
				for($i = 1; $i<=338; $i++){
				if(!$risposte->where('item_id',$i)->first()){
                    $risposte->push(new Risposta(['test_id'=>$test->id, 'item_id'=>$i, 'valore'=>null]));
                }
			}
    	}

        return view('test.show')->with([
			'test' => $test,
			'test_counter' => $test->counter(),
			'gruppi_scale' => GruppoScala::all(),
			'scale' => Scala::orderBy('id')->get(),
		    'risposte' => $risposte,
			'risultati' => Risultato::where('test_id', $test->id)->get(),
			'item_critici' => $this->getItemCritici($id)
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
		$condizioni = Condizione::whereIn('codice_scala', ['SUI','HLP','AXY','RC6', 'RC8','SUB','AGG'])->orderBy('item_id')->get();
		$risultati = Risultato::where('test_id', $test_id)->get();
		if ($risultati->count() > 0)
		{	
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
		}
		return $item_critici;
	}

	public function export($id) {
		$test = Test::with('user')->findOrFail($id);
        $gruppi_scale = GruppoScala::all();
        $scale = Scala::all(); //->orderBy('ordine');
        $risultati = Risultato::where('test_id', $id)->get();
        $item_critici = $this->getItemCritici($test->id);
		$risposte = Risposta::where('test_id', $id)->get();

        // Legge il template
		$fileName = public_path().'/template.xlsx';
        $Reader = \PHPExcel_IOFactory::createReader('Excel2007');
        $Reader->setIncludeCharts(TRUE);
		$excel = $Reader->load($fileName);

    	// 1 Prima pagina
    	$sheet = $excel->getSheet(0);
    	
    	$sheet->setCellValue('H18', 'Correzione manuale effettuata da '.$test->user->name);
    	$sheet->setCellValue('H29', $test->cognome);
    	$sheet->setCellValue('H31', $test->nome);
    	//$sheet->setCellValue('H33', $test->cognome[0].$test->nome[0].$test->id);
    	$sheet->setCellValue('H35', $test->sesso);
    	$sheet->setCellValue('H37', $test->data_somministrazione);
    	$sheet->setCellValue('K67','Correzione manuale effettuata da '.$test->user->name.' e profilo grafico tramite Excel realizzato da ITCI © e concesso in uso ai membri');
		// Piedipagina
    	$sheet->setCellValue('A65', 'Pagina 1 di '.(count($item_critici)>0?'8':'7'));

		// 2 Profilo delle Scale di validità
		$sheet = $excel->getSheet(1);
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
		$sheet = $excel->getSheet(2);
	   	$this->set_header($sheet, $test);
    	// Valori
    	$this->set_values($sheet, 'B', $test, $scale->where('gruppo_scala_id', 2), $risultati);
		$this->set_values($sheet, 'F', $test, $scale->where('gruppo_scala_id', 3), $risultati);
		// Piedipagina
		$sheet->setCellValue('A67', 'Pagina 3 di '.(count($item_critici)>0?'8':'7'));

		// 4 Profilo delle Scale Somatico/Cognitive e Internalizzazione
		$sheet = $excel->getSheet(3);
	   	$this->set_header($sheet, $test);
    	// Valori
    	$this->set_values($sheet, 'B', $test, $scale->where('gruppo_scala_id', 4), $risultati);
		$this->set_values($sheet, 'H', $test, $scale->where('gruppo_scala_id', 5), $risultati);
		// Piedipagina
		$sheet->setCellValue('A74', 'Pagina 4 di '.(count($item_critici)>0?'8':'7'));

		// 5 Profilo delle Scale di Esternalizzazione, Interpersonali e Interessi
		$sheet = $excel->getSheet(4);
	   	$this->set_header($sheet, $test);
    	// Valori
    	$this->set_values($sheet, 'B', $test, $scale->where('gruppo_scala_id', 6), $risultati);
		$this->set_values($sheet, 'G', $test, $scale->where('gruppo_scala_id', 7), $risultati);
		$this->set_values($sheet, 'M', $test, $scale->where('gruppo_scala_id', 8), $risultati);
		// Piedipagina
		$sheet->setCellValue('A69', 'Pagina 5 di '.(count($item_critici)>0?'8':'7'));

		// 6 Profilo delle Scale di Esternalizzazione, Interpersonali e Interessi
		$sheet = $excel->getSheet(5);
	   	$this->set_header($sheet, $test);
    	// Valori
    	$this->set_values($sheet, 'C', $test, $scale->where('gruppo_scala_id', 9), $risultati);	
		// Piedipagina
		$sheet->setCellValue('A67', 'Pagina 6 di '.(count($item_critici)>0?'8':'7'));

		// 7 Matrice delle Risposte
		$sheet = $excel->getSheet(6);
	   	$this->set_header($sheet, $test);
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
		// Piedipagina
		$sheet->setCellValue('A63', 'Pagina 7 di '.(count($item_critici)>0?'8':'7'));
		
		// 8 Item Critici
		if (count($item_critici)>0) {
			$sheet = $excel->getSheet(7);
			$this->set_header($sheet, $test);
		
			$row=10;
			// Valori
			foreach($scale as $scala) {
		 		if(($scala->codice =='SUI') || ($scala->codice =='HLP')|| ($scala->codice =='AXY')|| ($scala->codice =='RC6')|| ($scala->codice =='RC8')|| ($scala->codice =='SUB')|| ($scala->codice =='AGG')) {
			 		if( $risultati->where('codice_scala',$scala->codice)->first()->punteggio_t >= 65) {	  
					  	$sheet->getStyle('B'.$row)->getFont()->setBold(TRUE);
					  	$sheet->setCellValue('B'.$row, $scala->codice.' - '.$scala->descrizione);
					  	$row++;
			          foreach($item_critici as $item_critico) {
				      	if($item_critico['codice'] == $scala->codice) {
			              $sheet->setCellValue('A'.$row, $item_critico['item_id']);
			              $sheet->setCellValue('B'.$row, $item_critico['testo'].' ('.$item_critico['risposta'].')');
			              $row++;
			            }
			          }
			          $row++;
					}
				}
    		}	
			// Piedipagina
			$sheet->setCellValue('A69', 'Pagina 8 di '.(count($item_critici)>0?'8':'7'));
		} else {
			$excel->removeSheetByIndex(7);
		}

		$outputfilename = 'test_'.$test->cognome[0].$test->nome[0].$test->id.'.xlsx';
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"".$outputfilename."\"");
		header("Cache-Control: max-age=0");

		$writer = \PHPExcel_IOFactory::createWriter($excel, 'Excel2007');   
		$writer->setIncludeCharts(TRUE);
		$writer->save("php://output");
		exit;
	}

	var $STYLE_BOLD_LEFT = array(
	    'font' => array('bold' => true, 'size'=> 14,),
	    'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_LEFT,),
    );

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
