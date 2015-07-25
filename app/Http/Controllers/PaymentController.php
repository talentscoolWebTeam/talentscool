<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PaymentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function payment()
	{
		return view('payment/payment');
	}
	
	public function successfully(){
	    return view('payment/successfully');	
	}
	
	public function no_account(){
	    return view('payment/no_account');	
	}
	
	public function pay(){
     $email=\Input::get('stripeEmail');
	 $servername = getenv('DB_HOST');
     $username = getenv('DB_USERNAME');
     $password = getenv('DB_PASSWORD');
     $dbname = getenv('DB_DATABASE');
     $conn = mysqli_connect($servername, $username, $password, $dbname);
     if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
     }
     $sql = "SELECT name FROM users where email="."'".$email."'";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result)==0)return redirect('payment/no_account');
	 \Stripe\Stripe::setApiKey("sk_test_kr0gEVBLylbLE7r0FKMFSHyG");
	//\Stripe\Stripe::setApiKey("{{Config::get('stripe.stripe.secret')}}");
	
	// Get the credit card details submitted by the form
	$token = \Input::get('stripeToken');

	// Create the charge on Stripe's servers - this will charge the user's card
	try {
	    $charge = \Stripe\Charge::create(array(
	      "amount" => 2000, // amount in cents
	      "currency" => "usd",
	      "card"  => $token,
	      "description" => 'Access to Talentscool database')
	    );

	} catch(Stripe_CardError $e) {
	    $e_json = $e->getJsonBody();
	    $error = $e_json['error'];
	    // The card has been declined
	    // redirect back to checkout page
	    return Redirect::to('pay')
	        ->withInput()->with('stripe_errors',$error['message']);
	}
	// Maybe add an entry to your DB that the charge was successful, or at least Log the charge or errors
	// Stripe charge was successfull, continue by redirecting to a page with a thank you message
	//return "success";
	//return view('successfully');
	$sql = "update users set access_to_database=1 where email="."'".$email."'";
    $result = mysqli_query($conn, $sql);
	return redirect('payment/successfully');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
