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
	
	public function save_pic($portfolio,$photonum,$path,$file,$email){
		$name='';
		$extension=$file->getClientOriginalName();
		$name.=$email;
		$name.=$photonum;
		$name.=$extension;
		$name=str_replace("@","_",$name);
		$file->move($path,$name);
		$portfolio->photo.=$path;
		$portfolio->photo.='\\';
		$portfolio->photo.=$name;
		$portfolio->photo.=';';
	}
	
	public function store(Request $request)
	{
		$personal_photo=\Input::file('personal_photo');
		$tphoto1_1 = \Input::file('tphoto1_1');
		$tphoto2_1 = \Input::file('tphoto2_1');
		$tphoto3_1 = \Input::file('tphoto3_1');
		$tphoto1_2 = \Input::file('tphoto1_2');
		$tphoto2_2 = \Input::file('tphoto2_2');
		$tphoto3_2 = \Input::file('tphoto3_2');
		$tphoto1_3 = \Input::file('tphoto1_3');
		$tphoto2_3 = \Input::file('tphoto2_3');
		$tphoto3_3 = \Input::file('tphoto3_3');
		if($personal_photo!=null){
			$size=$personal_photo->getClientSize();
			if($size<=0||$size>$personal_photo->getMaxFilesize()||$this->check($personal_photo))return view('error');
		}
		if($tphoto1_1!=null){
			$size=$tphoto1_1->getClientSize();
			if($size<=0||$size>$tphoto1_1->getMaxFilesize()||$this->check($tphoto1_1))return view('error');
		}
		if($tphoto2_1!=null){
			$size=$tphoto2_1->getClientSize();
			if($size<=0||$size>$tphoto2_1->getMaxFilesize()||$this->check($tphoto2_1))return view('error');
		}
		if($tphoto3_1!=null){
			$size=$tphoto3_1->getClientSize();
			if($size<=0||$size>$tphoto3_1->getMaxFilesize()||$this->check($tphoto3_1))return view('error');
		}
		if($tphoto1_2!=null){
			$size=$tphoto1_2->getClientSize();
			if($size<=0||$size>$tphoto1_2->getMaxFilesize()||$this->check($tphoto1_2))return view('error');
		}
		if($tphoto2_2!=null){
			$size=$tphoto2_2->getClientSize();
			if($size<=0||$size>$tphoto2_2->getMaxFilesize()||$this->check($tphoto2_2))return view('error');
		}
		if($tphoto3_2!=null){
			$size=$tphoto3_2->getClientSize();
			if($size<=0||$size>$tphoto3_2->getMaxFilesize()||$this->check($tphoto3_2))return view('error');
		}
		if($tphoto1_3!=null){
			$size=$tphoto1_3->getClientSize();
			if($size<=0||$size>$tphoto1_3->getMaxFilesize()||$this->check($tphoto1_3))return view('error');
		}
		if($tphoto2_3!=null){
			$size=$tphoto2_3->getClientSize();
			if($size<=0||$size>$tphoto2_3->getMaxFilesize()||$this->check($tphoto2_3))return view('error');
		}
		if($tphoto3_3!=null){
			$size=$tphoto3_3->getClientSize();
			if($size<=0||$size>$tphoto3_3->getMaxFilesize()||$this->check($tphoto3_3))return view('error');
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
		$clients->self_introduction=$_POST['self'];
		$clients->status=$_POST['status'];
		if($personal_photo!=null){
			$name='';
			$extension=$personal_photo->getClientOriginalName();
			$name.=$email;
			$name.='_personal_photo_';
			$name.=$extension;
			$name=str_replace("@","_",$name);
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
			if($tphoto1_1!=null)$this->save_pic($portfolio,'_tphoto1_1_',$destinationPath,$tphoto1_1,$email);
			if($tphoto1_2!=null)$this->save_pic($portfolio,'_tphoto1_2_',$destinationPath,$tphoto1_2,$email);
			if($tphoto1_3!=null)$this->save_pic($portfolio,'_tphoto1_3_',$destinationPath,$tphoto1_3,$email);
			$portfolio->photo=substr($portfolio->photo,0,strlen($portfolio->photo)-1);
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
			if($tphoto2_1!=null)$this->save_pic($portfolio,'_tphoto2_1_',$destinationPath,$tphoto2_1,$email);
			if($tphoto2_2!=null)$this->save_pic($portfolio,'_tphoto2_2_',$destinationPath,$tphoto2_2,$email);
			if($tphoto2_3!=null)$this->save_pic($portfolio,'_tphoto2_3_',$destinationPath,$tphoto2_3,$email);
			$portfolio->photo=substr($portfolio->photo,0,strlen($portfolio->photo)-1);
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
			if($tphoto3_1!=null)$this->save_pic($portfolio,'_tphoto3_1_',$destinationPath,$tphoto3_1,$email);
			if($tphoto3_2!=null)$this->save_pic($portfolio,'_tphoto3_2_',$destinationPath,$tphoto3_2,$email);
			if($tphoto3_3!=null)$this->save_pic($portfolio,'_tphoto3_3_',$destinationPath,$tphoto3_3,$email);
			$portfolio->photo=substr($portfolio->photo,0,strlen($portfolio->photo)-1);
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
		$option->presonal_website=$_POST['personalWebsite'];
		$option->social_media=$_POST['socialMedia'];
		$option->accolades=$_POST['accolades'];
		$option->current_representation=$_POST['current_representation'];
		$option->experiences=$_POST['experience'];
		$option->anything=$_POST['anything'];
		$option->save();
		
		 $subject='Thanks for your interest in Talentscool';
		 $message='Hi there,'."\r\n"."\r\n".'Thank you for your interest in Talentscool! Our aim is to connect you to opportunities and service providers for your career.'."\r\n"."\r\n".'We have received your application and will be reviewing it shortly. A member of our team will be in contact with you as your application proceeds.
'."\r\n"."\r\n".'Thank you,'."\r\n".'Talentscool Team';
		 $headers = 'From: donotreply@talentscool.com' . "\r\n" .
    'Reply-To: donotreply@talentscool.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	$flag=mail($email,$subject,$message,$headers);
	if($flag) return view('thanks');
	}
}
