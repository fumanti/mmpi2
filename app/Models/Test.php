<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {

	/**
	*
	* @var string
	*/
	public $table = 'tests';						
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
	
    // public $fillable = ['id', 'paziente_id', 'data_somministrazione'];
    public $fillable = ['id', 'cognome', 'nome', 'sesso', 'data_nascita', 'data_somministrazione', 'id_user'];

	public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function risposte()
    {
        return $this->hasMany('App\Models\Risposta');
    }

    public function risultati()
    {
        return $this->hasMany('App\Models\Risultato');
    }

    public function counter()
    {
        return $this->hasOne('App\Models\TestCounter');
    }
 
}