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

	public function index(){
		return view('index');
	}

    /**
     * Function for sending email when form is submitted
     */
    public function sendmail(){
        //For security, take in only these parameters
        $input =  Input::only('name', 'email', 'message');

        //Validate that these fields are not blank
        $validator = Validator::make($input,
            array(
                'name' => 'required',
                'email' => 'required|email',
                'msg' => 'required',
            )
        );
        if ($validator->fails())
        {
            return Redirect::to('index')->with('errors', $validator->messages);
        }
        else { // the validation has not failed, it has passed

            // Send the email with the contactemail view, the user input
            Mail::send('contactemail', $input, function ($message) {
                $message->from($input['email'], $input['name']);

                $message->to('contact.talentscool@gmail.com', 'Contact')->cc('michaelbpratt@gmail.com','Michael');
            });

            return Redirect::to('contact-form-thank-you');
        }

    }

    public function contactthanks(){
        return view('contact-form-thank-you');
    }

}
