// <?php namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Paziente extends Model {
	
// 	/**
// 	*
// 	* @var string
// 	*/
// 	public $table = 'pazienti';						
	
// 	/**
// 	 * The attributes that are mass assignable.
// 	 *
// 	 * @var array
// 	 */
// 	public $fillable = ['id', 'cognome', 'nome', 'sesso', 'data_nascita', 'stato_civile'];
	
// 	/**
//      * Indicates if the model should be timestamped.
//      *
//      * @var bool
//      */
// 	public $timestamps = false;

// 	public function test(){
// 		return $this->hasOne('App\Models\Test');
// 	}
// }