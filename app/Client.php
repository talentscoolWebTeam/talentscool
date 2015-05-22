<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	//
	protected $fillable = [
							'fname',
							'lname',
							'nname',
							'email',
							'city',
							'state',
							'zipcode',
							'gender',
							'phone_number',
							'dob',
	];

	public function talents()
	{
		return $this->hasMany('App\Talent');
	}
	public function service()
	{
		return $this->hasOne('App\Servicedesire');
	}
	public function option()
	{
		return $this->hasOne('App\Option');
	}
}
