<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'admin', 'max_test'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    protected $dates = ['deleted_at'];

	public function tests()
    {
        return $this->hasMany('App\Models\Test', 'id_user');
    }

    public function isAdmin()
    {
    	return $this->admin;
    }

    public function has_max_test()
    {
    	return !is_null($this->max_test);
    }

    public function counters()
    {
    	return $this->hasMany('App\Models\TestCounter');
    }	

    public function can_make_new()
    {
    	return is_null($this->max_test) || $this->max_test > $this->counters->count(); // TestCounter::where('user_id', $this->id)->count();
    }

    public function tests_left()
    {
        return ($this->max_test && $this->counters()) ? $this->max_test - $this->counters->count() : 999;
    }

    public function can_edit_items($test_id)
    {
    	$counter = App\Models\Test::find($test_id)->counter();
    	return $counter->can_edit();
    }
}
