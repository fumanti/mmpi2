<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Risposta extends Model {
	
	/**
	*
	* @var string
	*/
	public $table = 'risposte';						
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	public $fillable = ['id', 'test_id', 'item_id', 'valore'];

	public $timestamps = false;

	public function test(){
        return $this->belongsTo('App\Models\Test');
    }

    public function item(){
    	return $this->belongsTo('App\Models\Item');
    }

}