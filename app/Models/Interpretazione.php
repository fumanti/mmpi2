<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interpretazione extends Model {

	/**
	*
	* @var string
	*/
	public $table = 'interpretazione';
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;

    public $fillable = ['scala_id', 'punteggio_min', 'punteggio_max', 'testo_1'];


	public function scala()
    {
        return $this->belongsTo('App\Models\Scala');
    }

}

