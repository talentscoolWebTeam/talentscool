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
        $client->aboutme = $input['aboutme'];

        $socmedarray = Input::get('socialmedia');
        $client->socialmedia = join(" ,",$socmedarray);

        $client->experience = $input['experience'];
        $client->currRepresent = $input['curr_rep'];

        $opptarray = Input::get('opportunity');
        $client->opportunities = join(" ,",$opptarray);

        $reparray = Input::get('representation');
        $client->representation = join(" ,",$reparray);

        $genarray = Input::get('general');
        $client->general = join(" ,",$genarray);

        $tndevarray = Input::get('talent_dev');
        $client->talentdev = join(" ,", $tndevarray);

        $vanluxarray = Input::get('vanitylux');
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
