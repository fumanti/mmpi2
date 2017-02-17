<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GruppoScala extends Model {

	/**
	*
	* @var string
	*/
	public $table = 'gruppi_scale';						
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;

    public $fillable = ['id','descrizione'];

	public function scale()
    {
        return $this->hasMany('App\Models\Scala')->orderBy('ordine');
    }

}