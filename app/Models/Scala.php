<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scala extends Model {

	/**
	*
	* @var string
	*/
	public $table = 'scale';						
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;

    public $fillable = ['id', 'codice', 'gruppo_scala_id', 'ordine', 'descrizione', 'media', 'deviazione_standard', 'punteggio_base'];


	public function gruppo_scala()
    {
        return $this->belongsTo('App\Models\GruppoScala');
    }

    public function condizioni()
    {
        return $this->hasMany('App\Models\Condizione');
    }

    public function conversioni()
    {
        return $this->hasMany('App\Models\Conversione');
    }
    
    public function risultato()
    {
        return $this->hasOne('App\Models\Risultato');
    }
        
}