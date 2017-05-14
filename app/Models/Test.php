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
 
    public function scopeid_user($query, $id_user)
    {
        if($id_user!=null)
            return $query->where('id_user', '=', $id_user);
        else
            return $query;
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('cognome', 'like', $search.'%')->orWhere('nome', 'like', $search.'%');
    }

    public function scopeJoinWithUser($query)
    {
        return $query->leftJoin("users", "users.id", "=", "tests.id_user");
    }
}