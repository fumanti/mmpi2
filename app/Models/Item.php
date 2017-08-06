<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {
	
	public $table = 'items';

	public $fillable = ['id', 'testo'];
	
	public $timestamps = false;

	public function condizioni()
	{
		return $this->hasOne('App\Models\Condizione');
	}

}