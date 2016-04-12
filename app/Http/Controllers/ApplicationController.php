<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Client;
use Redirect;
use Session;
use Input;
use App\Talent;

class ApplicationController extends Controller
{
   public function application(){
	return view('apply/application');	
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
        $client->stage_name = $input['stage_name'];
        $client->email = $input['email'];
        $client->country = $input['country'];
        $client->state = $input['state'];
        $client->city = $input['city'];
        $client->zip = $input['zip'];
        $client->phone = preg_replace("/\D/", "", $input['phone']);
        $client->dob = $input['dob'];
        $client->gender = $input['gender'];
        $client->aboutme = $input['aboutme'];
        $client->facebook = $input['facebook'];
        $client->instagram = $input['instagram'];
        $client->twitter = $input['twitter'];
        $client->youtube = $input['youtube'];

        $socmedarray = Input::get('socialmedia');
        $client->socialmedia = join(" ,",$socmedarray);

        $client->experience = $input['experience'];
        $client->currRepresent = $input['curr_rep'];

        $opptarray = Input::get('opportunity');
        if(!empty($opptarray))
        {
            $client->opportunities = join(" ,",$opptarray);
        }

        $reparray = Input::get('representation');
          if(!empty($reparray))
        {
            $client->representation = join(" ,",$reparray);
        }

        $genarray = Input::get('general');
        if(!empty($genarray))
        {
            $client->general = join(" ,",$genarray);
        }

        $tndevarray = Input::get('talent_dev');
        if(!empty($tndevarray))
        {
            $client->talentdev = join(" ,", $tndevarray);
        }     

        $vanluxarray = Input::get('vanitylux');
        if(!empty($vanluxarray))
        {
            $client->vanitylux= join(" ,", $vanluxarray);
        }

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
        $talent_category = Input::get('talent_category');
        $specific_talent = Input::get('specific_talent');
        $type1 = Input::get('type1');
        $type3 = Input::get('type3');
        $type2 = Input::get('type2');
        $portfolioitem1 = Input::get('media1');
        $portfolioitem2 = Input::get('media2');
        $portfolioitem3 = Input::get('media3');
        $count = count($input['talent_category']);
        for ($i = 0; $i < $count; $i++) {
            $talent = new Talent;
            $talent->email = $input['email'];
            $talent->industry = $talent_category[$i];
            $talent->specific_talent = $specific_talent[$i];
            $talent->type1 = $type1[$i];
            $talent->type2 = $type2[$i];
            $talent->type3 = $type3[$i];
            $talent->portfolioitem1 = $portfolioitem1[$i];
            $talent->portfolioitem2 = $portfolioitem2[$i];
            $talent->portfolioitem3 = $portfolioitem3[$i];
            $talent->save();
        }

        $client->save();
        //Redirect to thank you page
        return Redirect::to('http://www.talentscool.com/thanks');
	}
public function viewapp(){
    //return view('viewclients');
    $clients = DB::table('clients')->get();
    return view('clients.index', ['clients' => $clients]);
}
    public function testsql()
    {
        //gets the 
        $results = DB::select('select * from clients');
        echo '<table border ="2"><tr><th>First Name</th><th>Last Name</th><th>E-mail</th><th>City</th><th>State</th><th>Zipcode</th><th>Gender</th></tr>';
        foreach ($results as $result)
        {
            echo '<tr><td>'.
            $result->first_name."\t</td>"."<td>".
            $result->last_name."\t</td>"."<td>".
            $result->email."\t</td>". "<td>".
            $result->country."\t</td>". "<td>".
            $result->state."\t</td>"."<td>".
            $result->city."\t</td>"."<td>".
            $result->phone."\t</td>"."<td>".
            $result->zip."\t</td>"."<td>".
            $result->gender."\t</td></tr>";
        }
        echo '</table>';        
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
