<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Client;

class ApplicationController extends Controller {

	public function application()
	{
		$state = \App\Location::distinct()->select('full_state', 'full_state')->get();
		$states = array_unique($state->lists('full_state', 'full_state'));
		return view('application', compact('states'));
	}
	
    
    public function test()
    {
        return view('payment');   
    }
    
	public function loading()
	{
		return view('loading');
	}
	
	public function thanks()
	{
		return view('thanks');
	}
	
	public function error()
	{
		return view('error');
	}
	
	public function check($file){
		$name=$file->getClientOriginalName();
		$n=-1;
		for($i=sizeof($name);$i>=0;$i--){
			if($name[$i]!='.')$n--;
			else break;
		}
		$result=substr($name,$n);
		$values = ["jpg", "png","JPG", "PNG","GIF", "gif"];
		if(in_array($result, $values))
			return false;
		else
			return true;
	}
	
	
	public function store(Request $request)
	{
		$personal_photo=\Input::file('personal_photo');
		$tphoto1 = \Input::file('tphoto1');
		$tphoto2 = \Input::file('tphoto2');
		$tphoto3 = \Input::file('tphoto3');
		if($personal_photo!=null){
			$size=$personal_photo->getClientSize();
			if($size<=0||$size>$personal_photo->getMaxFilesize()||$this->check($personal_photo))return view('error');
		}
		if($tphoto1!=null){
			$size=$tphoto1->getClientSize();
			if($size<=0||$size>$tphoto1->getMaxFilesize()||$this->check($tphoto1))return view('error');
		}
		if($tphoto2!=null){
			$size=$tphoto2->getClientSize();
			if($size<=0||$size>$tphoto2->getMaxFilesize()||$this->check($tphoto2))return view('error');
		}
		if($tphoto3!=null){
			$size=$tphoto3->getClientSize();
			if($size<=0||$size>$tphoto3->getMaxFilesize()||$this->check($tphoto3))return view('error');
		}
	
		$email=$_POST['email'];
		$destinationPath = 'files';
		$clients=  new \App\Client();
		$clients->fname=$_POST['fname'];
		$clients->lname=$_POST['lname'];
		$clients->nname=$_POST['nname'];
		$clients->email=$_POST['email'];
		$clients->city=$_POST['city'];
		$clients->state=$_POST['state'];
		$clients->zipcode=$_POST['zipcode'];
		$clients->gender=$_POST['gender'];
		$clients->phone_number=$_POST['phoneNum'];
		$clients->dob=$_POST['dob'];
		$clients->status=$_POST['status'];
		if($personal_photo!=null){
			$name='';
			$extension=$personal_photo->getClientOriginalName();
			$name.=$email;
			$name.='_personal photo_';
			$name.=$extension;
			$personal_photo->move($destinationPath,$name);
			$clients->personal_photo =$destinationPath.'\\';
			$clients->personal_photo.=$name;
		}
		$clients->save();
	
		if($_POST['category1']!=null){
			$talent= new\App\Talent();
			$talent->category=$_POST['category1'];
			$talent->specific_talent=$_POST['specific_talent1'];
			$talent->client_id=$clients->id;
			$talent->save();
			$audiolink=$_POST['audiolink1'];
			$videolink=$_POST['videolink1'];
			$portfolio=new \App\Portfolio();
			$portfolio->talent_id=$talent->id;
			if($audiolink!=null)$portfolio->audio.=$audiolink;
			if($videolink!=null)$portfolio->video.=$videolink;
			if($tphoto1!=null){
				$name='';
				$extension=$tphoto1->getClientOriginalName();
				$name.=$email;
				$name.='_photo1_';
				$name.=$extension;
				$tphoto1->move($destinationPath,$name);
				$portfolio->photo.=$destinationPath;
				$portfolio->photo.='\\';
				$portfolio->photo.=$name;
			}
			$portfolio->save();
		}
	
		if($_POST['category2']!=null){
			$talent= new\App\Talent();
			$talent->category=$_POST['category2'];
			$talent->specific_talent=$_POST['specific_talent2'];
			$talent->client_id=$clients->id;
			$talent->save();
			$audiolink=$_POST['audiolink2'];
			$videolink=$_POST['videolink2'];
			$portfolio=new \App\Portfolio();
			$portfolio->talent_id=$talent->id;
			if($audiolink!=null)$portfolio->audio.=$audiolink;
			if($videolink!=null)$portfolio->video.=$videolink;
			if($tphoto2!=null){
				$name='';
				$extension=$tphoto2->getClientOriginalName();
				$name.=$email;
				$name.='_photo2_';
				$name.=$extension;
				$tphoto2->move($destinationPath,$name);
				if($portfolio->photo!='')$portfolio->photo.=';';
				$portfolio->photo.=$destinationPath.'\\'.$name;
			}
			$portfolio->save();
		}
	
		if($_POST['category3']!=null){
			$talent= new\App\Talent();
			$talent->category=$_POST['category3'];
			$talent->specific_talent=$_POST['specific_talent3'];
			$talent->client_id=$clients->id;
			$talent->save();
			$audiolink=$_POST['audiolink3'];
			$videolink=$_POST['videolink3'];
			$portfolio=new \App\Portfolio();
			$portfolio->talent_id=$talent->id;
			if($audiolink!=null)$portfolio->audio.=$audiolink;
			if($videolink!=null)$portfolio->video.=$videolink;
			if($tphoto3!=null){
				$name='';
				$extension=$tphoto3->getClientOriginalName();
				$name.=$email;
				$name.='_photo3_';
				$name.=$extension;
				$tphoto3->move($destinationPath,$name);
				if($portfolio->photo!='')$portfolio->photo.=';';
				$portfolio->photo.=$destinationPath.'\\'.$name;
			}
			$portfolio->save();
		}
	
		$desire= new\App\Servicedesire();
		$desire->client_id=$clients->id;
		for($i=0;$i<sizeof($_POST['representation']);$i++){
			if($_POST['representation'][$i]!=null){
				$desire->representation.=$_POST['representation'][$i];
				if($i<sizeof($_POST['representation'])-1)$desire->representation.=';';
			}
		}
		for($i=0;$i<sizeof($_POST['opportunity']);$i++){
			if($_POST['opportunity'][$i]!=null){
				$desire->opportunity.=$_POST['opportunity'][$i];
				if($i<sizeof($_POST['opportunity'])-1)$desire->opportunity.=';';
			}
		}
		for($i=0;$i<sizeof($_POST['service']);$i++){
			if($_POST['service'][$i]!=null){
				$desire->service.=$_POST['service'][$i];
				if($i<sizeof($_POST['service'])-1)$desire->service.=';';
			}
		}
		$desire->save();
	
		$option=new \App\Option();
		$option->client_id=$clients->id;
		$option->describeword1=$_POST['describeword1'];
		$option->describeword2=$_POST['describeword2'];
		$option->describeword3=$_POST['describeword3'];
		$option->intro_video=$_POST['introVideo'];
		$option->current_representation=$_POST['current_representation'];
		$option->accolades=$_POST['accolades'];
		$option->achievements=$_POST['achievements'];
		$option->experiences=$_POST['experiences'];
		$option->relative_talent=$_POST['relative_talent'];
		$option->anything=$_POST['anything'];
		$option->save();
		
		 $subject='Thanks for your interest in Talentscool';
		 $message='Thanks for your interest. Your application has been submitted. If there is a match, we will contact you ASAP.'."\r\n".'Please do not reply this email!'."\r\n".'Thank you!';
		 $headers = 'From: donotreply@talentscool.com' . "\r\n" .
    'Reply-To: donotreply@talentscool.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	$flag=mail($email,$subject,$message,$headers);
	if($flag) return view('thanks');
	}
}	