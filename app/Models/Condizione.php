<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condizione extends Model {

	/**
	*
	* @var string
	*/
	public $table = 'condizioni';						
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;

    public $fillable = ['id', 'codice_scala', 'set', 'item_id', 'valore_richiesto', 'valore_assegnato'];


	public function scala()
    {
        return $this->belongsTo('App\Models\Scala');
    }

    public function item()
    {
    	return $this->hasOne('App\Models\Item');
    }
}