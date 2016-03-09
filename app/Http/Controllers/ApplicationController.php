<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Client;
use Redirect;
use Session;
use Input;

class ApplicationController extends Controller
{
   public function application(){
	return view('apply/application2');	
   }
   public function viewapp()
   {
       
       $clients = Client::all();
       echo '<head><style>
#clientview {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#clientview td, #customers th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#clientview tr:nth-child(even){background-color: #f2f2f2}

#clientview tr:hover {background-color: #ddd;}

#clientview th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #4CAF50;
    color: white;
}
</style></head>';
       echo '<div style="overflow-x:auto;">
       <table id = "clientview" border ="2"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>E-mail</th><th>Country</th>
       <th>State</th><th>City</th><th>Zip Code</th><th>Phone</th><th>Date Of Birth</th><th>Gender</th><th>Profile Picture</th>
       <th>Talent Category</th><th>Specific Talent</th><th>Audio</th><th>Image</th><th>Video</th><th>About Me</th>
       <th>Social Media</th><th>Experience</th><th>Current Rep.</th><th>Opportunities</th><th>Representation</th>
       <th>General Service</th><th>Talent Development</th><th>Vanity & Luxury</th><th>Additional</th></tr>';
       
       $num = count($clients);
       for ($i = 0; $i < $num; $i++)
       {
       echo '<tr><td>';
       echo $clients[$i]->id.'</td><td>';
       echo $clients[$i]->first_name.'</td><td>';
       echo $clients[$i]->last_name.'</td><td>';
       echo $clients[$i]->email.'</td><td>';
       echo $clients[$i]->country.'</td><td>';
       echo $clients[$i]->state.'</td><td>';
       echo $clients[$i]->city.'</td><td>';
       echo $clients[$i]->zip.'</td><td>';
       echo $clients[$i]->phone.'</td><td>';
       echo $clients[$i]->dob.'</td><td>';
       echo $clients[$i]->gender.'</td><td>';
       echo '<img src ="'.$clients[$i]->profilepic.'"></td><td>';
       echo $clients[$i]->talent_category.'</td><td>';
       echo $clients[$i]->specific_talent.'</td><td>';
       echo '<a href = "'.$clients[$i]->audiopath.'">Listen</a></td><td>';
       echo '<img src ="'.$clients[$i]->imagepath.'"></td><td>';
       echo '<a href = "'.$clients[$i]->vidlink.'">Watch</a></td><td>';
       echo $clients[$i]->aboutme.'</td><td>';
       echo $clients[$i]->socialmedia.'</td><td>';
       echo $clients[$i]->experience.'</td><td>';
       echo $clients[$i]->currRepresent.'</td><td>';
       echo $clients[$i]->opportunities.'</td><td>';
       echo $clients[$i]->representation.'</td><td>';
       echo $clients[$i]->generalserv.'</td><td>';
       echo $clients[$i]->talentdev.'</td><td>';
       echo $clients[$i]->vanitylux.'</td><td>';
       echo $clients[$i]->additional.'</td><td>';
       }
       echo '</table>';

   }
   public function testsql()
	{
		//gets the 
		$results = DB::select('select * from clients');
		echo '<table border ="2"><tr><th>First Name</th><th>Last Name</th><th>E-mail</th><th>City</th><th>State</th><th>Zipcode</th><th>Gender</th></tr>';
    	foreach ($results as $result)
    	{
    		echo '<tr><td>'.
    		$result->fname."\t</td>"."<td>".
    		$result->lname."\t</td>"."<td>".
    		$result->email."\t</td>". "<td>".
   		$result->city."\t</td>"."<td>".
    		$result->state."\t</td>"."<td>".
    		$result->zipcode."\t</td>"."<td>".
   		$result->gender."\t</td></tr>";
    	}
    	echo '</table>';		
	}
	public function store(Request $request)
	{

        $input = $request->all();

        //Verify file sizes and existence
        if (Input::hasFile('profile_image')) {
            $size = Input::file('profile_image')->getSize();
            if($size > 5242880) {
                return Redirect::to('/error');
            }
        }
        //Create client entry
        $client = new Client;
        $client->first_name = $input['first_name'];
        $client->last_name = $input['last_name'];
        $client->email = $input['email'];
        $client->country = $input['country'];
        $client->state = $input['state'];
        $client->city = $input['city'];
        $client->zip = $input['zip'];
        $client->phone = preg_replace("/\D/", "", $input['phone']);
        $client->dob = $input['dob'];
        $client->gender = $input['gender'];
        $client->talent_category = $input['talent_category'];
        $client->specific_talent = $input['specific_talent'];
        $client->vidlink = $input['video_link'];
        $client->aboutme = $input['aboutme'];

        $socmedarray = Input::get('socialmedia');
        $client->socialmedia = join(" ,",$socmedarray);

        $client->experience = $input['experience'];
        $client->currRepresent = $input['curr_rep'];

        $opptarray = Input::get('opportunities');
        $client->opportunities = join(" ,",$opptarray);

        $reparray = Input::get('representation');
        $client->representation = join(" ,",$reparray);

        $genarray = Input::get('general');
        $client->general = join(" ,",$genarray);

        $tndevarray = Input::get('talent_dev');
        $client->talentdev = join(" ,", $tndevarray);

        $vanluxarray = Input::get('vanityluxury');
        $client->vanitylux= join(" ,", $vanluxarray);

        $client->additional = $input['additional'];

        //Get media data

        //Profile image
        $profilepicture = $input['profile_image'];
        //Save the image with the formal "(ClientID)_(ClientLastName)_(ClientFirstName).(fileExtension)"
        $fileName = rand(11111,99999) . $client->last_name . '_' . $client->first_name . '_profile' . '.' . $profilepicture->getClientOriginalExtension();
        $filepath = base_path() . '/resources/uploads/profile_pictures/';
        //Move to new folder
        $profilepicture->move($filepath, $fileName);
        //Store image path in database
        $client->profilepic = $filepath . $fileName;

        //Create talent entry/ies
        $count = count($input[talent_category]);
        for ($i = 0; $i < $count; $i++) {
            $talent = new Talent;
            $talent->email = $input[email];
            $talent->industry = $input[talent_category($i)];
            $talent->specific_talent = $input[specific_talent($i)];
            $talent->type1 = $input[type1($i)];
            $talent->type2 = $input[type2($i)];
            $talent->type3 = $input[type3($i)];
            $talent->portfolioitem1 = $input[media1($i)];
            $talent->portfolioitem2 = $input[media2($i)];
            $talent->portfolioitem3 = $input[media3($i)];
            $talent->save();

        }



        $client->save();
        //Redirect to thank you page
        return Redirect::to('/thanks');
	}

    public function thanks()
    {
        return view('app-thankyou');
    }

    public function error()
    {
        return view('error');
    }
}
