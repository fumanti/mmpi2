<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversione extends Model {

	/**
	*
	* @var string
	*/
	public $table = 'conversioni';						
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;

    public $fillable = ['codice_scala', 'punteggio_grezzo', 'punteggio_t'];


	public function scala()
    {
        return $this->belongsTo('App\Models\Scala');
    }

}