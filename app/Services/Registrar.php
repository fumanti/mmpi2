<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		if (array_key_exists('update', $data))
		{
			return Validator::make($data, [
				'name' => 'required|max:255',
				'email' => 'required|email|max:255',
				'password' => 'confirmed|min:8',
			]);
		}
		else
		{
			return Validator::make($data, [
				'name' => 'required|max:255',
				'email' => 'required|email|max:255|unique:users',
				'password' => 'required|confirmed|min:8',
			]);
		}
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'admin' => array_key_exists('admin', $data) ? 1 : 0,
			'max_test' => strlen(trim($data['max_test']))>0 ? trim($data['max_test']) : null
		]);
	}

	public function update(array $data)
	{
		$user = User::find($data['id']);

		if (array_key_exists('name', $data)){
			$user->name = $data['name'];
		}
		if (array_key_exists('email', $data)){
			$user->email = $data['email'];
		}
		if (array_key_exists('password', $data) && array_key_exists('password_confirmation', $data)){
			if(strlen($data['password'])>0 && $data['password'] == $data['password_confirmation'])
				$user->password = bcrypt($data['password']);
		}
		$user->admin = array_key_exists('admin', $data) ? 1 : 0;
		$user->max_test = array_key_exists('max_test', $data) && strlen($data['max_test'])>0 ? $data['max_test'] : null;

		$user->save();
	}

}
