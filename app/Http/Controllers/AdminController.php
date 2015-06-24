<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;

class AdminController extends Controller {
	
	public function __construct()
	{
		$this->middleware('admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function invite()
	{
		return view('auth.invite');
	}
	public function sendInvite(Request $request)
	{
		$rules= array(
				'email'=>'required|email',
				);
		$validator = \Validator::make($request->all(), $rules);
		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}
		$user = \App\User::where('email', '=', $request->get('email'))->first();
		if(!empty($user))
			return redirect()->back()->withErrors('The email ' . $request->get('email') . ' exist!!');
		$user = new \App\User();
		$user->email = $request->get('email');
		$code = $user->email . \Carbon\Carbon::now();
		$user->passcode = bcrypt($code);
		$user->save();
		//change url on the serverside;
		$URL = "talentscool.local/auth/register?inviteToken=" . $user->passcode;
		
		return redirect('/admin/invite')->with("Success", "We successfully invite the user\n The link is: " . $URL);
	}
	public function users()
	{
		$users = \App\User::where('level', '<>', '0')->get();
		return view('auth.users', compact('users'));
	}
	public function updateUser()
	{
		$status = \Input::get('status');
		$email = \Input::get('email');
		$user = \App\User::where('email', '=', $email)->first();
		if($user->accessible == $status)
		{
			$response = array('result' => "fail");
			return \Response::json($response);
		}
		else
		{
			$user->accessible = ($user->accessible + 1) % 2;
			$user->save();
			$response = array('result' => "success");
			return \Response::json($response);
		}
	}
}
