<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Risposta as Risposta;
use App\Models\Test as Test;
use App\Models\TestCounter as TestCounter;
use Request;
use Input;
use Illuminate\Pagination;

class RisposteController extends Controller {

    public function index($id)
    {
        $test = Test::findOrFail($id);
        //$risposte = $test->risposte;
        $risposte = Risposta::where('test_id', $test->id)->get();
        if($risposte->count()<338){
            for($i = 1; $i<=338; $i++){
                if(!$risposte->where('item_id',$i)->first()){
                    $risposte->push(new Risposta(['test_id'=>$test->id, 'item_id'=>$i, 'valore'=>null]));
                }
            }
        }
        return view('risposte.index', compact('test', 'risposte'));
    }

    // public function nuovo($id)
    // {
    // 	$test = Test::findOrFail($id)]);
    // 	return view('risposte/inserisci', compact('test'));	
    // }

    // public function inserisci($id)
    // {
    // 	$test = Test::findOrFail($id);
    // 	return view('risposte/inserisci', compact('test'));
    // }

    // public function store()
    // {
    //     $risposte = Request::all();
    // }

    // public function update()
    // {
    //     // Getting all post data
    //     if(Request::ajax()) {
    //       $data = Input::all();

    //       for($i = 1; $i<=338; $i++) {
    //         $test_id = $data['test_id'];
    //         $risposta = Risposta::firstOrNew(['test_id'=> $test_id, 'item_id'=> $i]);
            
    //         $valore = $data['item_id'.$i];
            
    //         if($valore == 2){
    //           $valore = 0;
    //         } else if ($valore == 0 OR $valore>2){
    //           $valore = null;
    //         }

    //         $risposta->valore = $valore;
    //         $risposta->save();
            
    //       }  
    //     }
    // }

    public function update()
    {
        // Getting all post data
        if(Request::ajax()) {
          $data = Input::all();
          
          if ($data['item_id']==null){
            $test = Test::find($data['test_id']);
            $risposte = Risposta::where('test_id', $test->id)->get();
            if($risposte->count()<338){
                for($i = 1; $i<=338; $i++){
                    if(!$risposte->where('item_id',$i)->first()){
                        $risposte->push(new Risposta(['test_id'=>$test->id, 'item_id'=>$i, 'valore'=>null]));
                    }
                }
            }
            return view('risposte.index', compact('test', 'risposte'));
          }

          $risposta = Risposta::firstOrNew(['test_id'=> $data['test_id'], 'item_id'=> $data['item_id']]);
          
          $valore = $data['valore'];
          if($valore == 2){
            $valore = 0;
          } else if ($valore == 0 OR $valore>2){
            $valore = null;
          }
          
          $can_edit = true;
          $test_counter = TestCounter::where('test_id', $data['test_id'])->first();
          if ($test_counter)
          {
            $can_edit = $test_counter->first_time() || $test_counter->changes_left();
          }

          if($can_edit)
          {
            if($risposta->valore != $valore || (($valore==0 || $valore==null) && $risposta->valore !== $valore) || $risposta->id==null)
            {
                $risposta->valore = $valore;
                $risposta->save();
                if($test_counter && !$test_counter->first_time())
                {
                    $test_counter->correzioni = $test_counter->correzioni + 1;
                    $test_counter->save();
                }
            }
          }

          $can_edit = ($test_counter==null || $test_counter->first_time()) ? 999 : $test_counter->changes_left();
        }

        return (int)$can_edit; //$risposta->valore; // $data['id']+1;
    }
}
