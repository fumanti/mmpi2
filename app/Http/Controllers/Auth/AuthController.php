<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request as Request;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => ['getLogout', 'getRegister', 'postRegister', 'getUsers', 'updateUser', 'elimina']]);
	}

	public function getRegister()
	{
		if($this->auth->check() && $this->auth->user()->admin)
		{
			return view('auth.register');
		}
		else
		{
			return view('auth.login');
		}

	}

	public function postRegister(Request $request)
	{
		if($this->auth->check() && $this->auth->user()->admin)
		{
			$validator = $this->registrar->validator($request->all());

			if ($validator->fails())
			{
				$this->throwValidationException(
					$request, $validator
				);
			}

			$this->registrar->create($request->all());

			$users = $this->auth->user()->orderBy('name', 'asc')->get();
			return view('auth.users', compact('users'));
		}
		else
		{
			return view('auth.login');
		}
	}

	public function getUsers($id = null) 
	{
		
		if($this->auth->check() && $this->auth->user()->admin)
		{
			if ($id){
				$user = $this->auth->user()->get()->find($id);
				return view('auth.user', compact('user'));
			} else {
				$users = $this->auth->user()->orderBy('name', 'asc')->get();
				return view('auth.users', compact('users'));
			} 
				
		}
		else
		{
			return view('auth.login');
		}
		
	}

	public function updateUser(Request $request)
	{
		if($this->auth->check() && $this->auth->user()->admin)
		{
			 $validator = $this->registrar->validator($request->all());

			 if ($validator->fails())
			 {
			 	$this->throwValidationException(
			 		$request, $validator
			 	);
			 }

			$this->registrar->update($request->all());
		}
		$users = $this->auth->user()->orderBy('name', 'asc')->get();
		return view('auth.users', compact('users'));
	}

	public function elimina($id) 
	{
		
		if($this->auth->check() && $this->auth->user()->admin)
		{
			if ($id){
				$user = $this->auth->user()->find($id);
				$date = date_create();
				$user->email .='_'.date_timestamp_get($date);
				$user->save(); 
				$user->delete($id);
				$users = $this->auth->user()->orderBy('name', 'asc')->get();
				return view('auth.users', compact('users'));
			}	
		}
		else
		{
			return view('auth.login');
		}
		
	}

}
