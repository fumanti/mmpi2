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
    	return $this->hasOne('App\Models\Scala');
    }
}