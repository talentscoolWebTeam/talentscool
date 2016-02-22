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
		$rules= array(
						'name'=>'required',
						'password'=>'required|min:8',
						'email'=>'required|email',
						'passcode' => 'required',
				);
		$validator = \Validator::make($request->all(), $rules);
		$user = \App\User::where('email', '=', $request->get('email'))->first();
		if(count($user) == 0)
			return Redirect::back()->withErrors("You must be invited first")->withInput(\Input::except('password'));
		$passcode = $request->get('passcode');
		$userPasscode = $user->passcode;
		if($passcode != $userPasscode)
			return Redirect::back()->withErrors("Passcode is not matched")->withInput(\Input::except('password'));
		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}
		$user->level = 1;
		$user->password = bcrypt($request->get('password'));
		$user->name = $request->get('name');
		$user->accessible = 1;
		$user->save();

		//$this->auth->login($this->registrar->create($request->all()));
		$this->auth->login($user);
		return redirect($this->redirectPath());
	}
	
	public function postLogin(Request $request)
	{
		$this->validate($request, [
				'email' => 'required|email', 'password' => 'required',
				]);
	
		$credentials = $request->only('email', 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			$user = \Auth::user();
			
			if($user->accessible == 0)
				{
					\Auth::logout();
					return redirect()->back()->withErrors(['Your Account has been blocked']);
				}
			else
				return redirect()->intended($this->redirectPath());
		}
	
		return redirect($this->loginPath())
		->withInput($request->only('email', 'remember'))
		->withErrors([
				'email' => $this->getFailedLoginMessage(),
				]);
	}
	
}