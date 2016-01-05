<?php namespace App\Http\Controllers;


class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function landing(){
		return view('home');
	}
	public function index()
	{
		return view('landingApp');
	}
	public function aboutUs()
	{
		return view('aboutus');
	}
	public function whatwedo()
	{
		return view('whatwedo');
	}
	public function sendmail(){
		$to='contact@talentscool.com'.',';
		$to.='michaelbpratt@gmail.com';
		$subject='Message from ';
		$subject.=\Input::get('receiver');
		$message=\Input::get('message');
		$headers = 'From: '.\Input::get('email')."\r\n".
				'Reply-To: '.\Input::get('email') . "\r\n";
		$status = mail($to,$subject,$message,$headers);
		$ret = "";
		if($status)
		{
			$ret = array("result"=> 'success');
		}
		else
			$ret = array("result" => 'fail');
		return \Response::json($ret);
	}

}
