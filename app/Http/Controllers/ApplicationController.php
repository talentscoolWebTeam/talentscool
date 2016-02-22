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
