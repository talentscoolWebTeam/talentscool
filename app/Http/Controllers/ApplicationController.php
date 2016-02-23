<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Client;
use Redirect;
use Session;

class ApplicationController extends Controller
{
   public function application(){
	return view('apply/application');	
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
        $client = new Client;

        //Get non-media data
        $client->first_name = $input['first_name'];
        $client->last_name = $input['last_name'];
        $client->email = $input['email'];
        $client->country = $input['country'];
        $client->state = $input['state'];
        $client->city = $input['city'];
        $client->zip = $input['zip'];
        $client->phone = $input['phone'];
        $client->dob = $input['dob'];
        $client->gender = $input['gender'];
        $client->talent_category = $input['talent_category'];
        $client->specific_talent = $input['specific_talent'];
        $client->vidlink = $input['video_link'];
        $client->aboutme = $input['aboutme'];
        $client->socialmedia = $input['socialmedia'];
        //$client->extralink1 = $input['extralink1'];
        //$client->extralink2 = $input['extralink2'];
        //$client->extralink3 = $input['extralink3'];
        $client->experience = $input['experience'];
        $client->currRepresent = $input['curr_rep'];
        $client->opportunities = $input['opportunities'];
        $client->representation = $input['representation'];
        $client->generalserv = $input['general'];
        $client->talentdev = $input['talent_dev'];
        $client->vanitylux = $input['vanityluxury'];
        $client->additional = $input['additional'];

        //Get media data
        //if ($input->hasFile('profile_image'))
        {
            $profilepicture = $input['profile_image'];
            //Save the image with the formal "(ClientID)_(ClientLastName)_(ClientFirstName).(fileExtension)"
            $fileName = rand(11111,99999) . $client->last_name . '_' . $client->first_name . '_profile' . '.' . $profilepicture->getClientOriginalExtension();
            $filepath = base_path() . '/resources/uploads/profile_pictures/';
            //Move to new folder
            $profilepicture->move($filepath, $fileName);
            //Store image path in database
            $client->profilepic = $filepath . $fileName;
        }
        //if ($input->hasFile('audio_file'))
        {
            $audiofile = $input['audio_file'];
            //Save the image with the formal "(ClientID)_(ClientLastName)_(ClientFirstName).(fileExtension)"
            $fileName = rand(11111,99999) . $client->last_name . '_' . $client->first_name . '_audio' . '.' . $audiofile->getClientOriginalExtension();
            $filepath = base_path() . '/resources/uploads/audio_files/';
            //Move to new folder
            $audiofile->move($filepath, $fileName);
            //Store image path in database
            $client->audiopath = $filepath . $fileName;
        }
       // if ($input->hasFile('image_file'))
        {
            $imagefile = $input['image_file'];
            //Save the image with the formal "(ClientID)_(ClientLastName)_(ClientFirstName).(fileExtension)"
            $fileName = rand(11111,99999) . $client->last_name . '_' . $client->first_name . '_image' . '.' . $imagefile->getClientOriginalExtension();
            $filepath = base_path() . '/resources/uploads/image_files/';
            //Move to new folder
            $imagefile->move($filepath, $fileName);
            //Store image path in database
            $client->imagepath = $filepath . $fileName;
        }

        $client->save();
        //Redirect to thank you page
        return Redirect::to('/thanks');
	}

    public function thanks()
    {
        return view('app-thankyou');
    }
}
