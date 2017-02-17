<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestCounter extends Model {

	/**
	*
	* @var string
	*/
	public $table = 'test_counter';						
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;

    public $fillable = ['user_id', 'test_id', 'calcoli', 'correzioni'];


	public function test()
    {
        return $this->belongsTo('App\Models\Test');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function can_edit()
    {
        return $this->calcoli < 3 && $this->correzioni < 10;
    }

    public function can_correct()
    {
        return $this->calcoli < 3;
    }

    public function first_time()
    {
        return $this->calcoli == 0;
    }

    public function changes_left()
    {
        return 10 - (int)$this->correzioni;
    }
}