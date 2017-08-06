<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Risultato extends Model {

	/**
	*
	* @var string
	*/
	public $table = 'risultati';						
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;

    public $fillable = ['test_id', 'codice_scala', 'punteggio_grezzo', 'punteggio_t', 'percentuale_risposte'];


	public function test()
    {
        return $this->belongsTo('App\Models\Test');
    }

    public function scala()
    {
    	return $this->belongsTo('App\Models\Scala', 'codice_scala', 'codice');
    }


    public function scopeCritici($query)
    {
        $query = $query->where(function ($query) { 
            $query->whereIn('codice_scala', ['SUI','HLP','AXY','RC6','RC8','SUB','AGG'])->where('codice_scala',$codice)->first()->punteggio_t >= 65; 
        });
        return $query;    
    }


    // public function scopeNotCNS($query)
    // {
    //     $query = $query->where(function ($query) { 
    //         $query->where('codice_scala', '!=', 'CNS'); 
    //     });
    //     return $query;    
    // }
}