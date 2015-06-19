<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
	
	protected $redirectTo="clients";
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

		$this->middleware('guest', ['except' => 'getLogout']);
	}
    public function postRegister(Request $request)
	{
     	return $request->url();
		$rules= array(
						'name'=>'required',
						'password'=>'required|min:8',
						'email'=>'required|email|unique:users',
						'passcode' => 'required',
				);
		$validator = \Validator::make($request->all(), $rules);
		$user = \App\User::where('email', '=', $request->get('email'))->first();
		if(count($user) == 0)
		{
			return Redirect::back()->withErrors("You must be invited first")->withInput(\Input::except('password'));
		}
		return Redirect::back()->withErrors("fuc it")->withInput(\Input::except('password'));

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}

		$this->auth->login($this->registrar->create($request->all()));

		return redirect($this->redirectPath());
	}
}