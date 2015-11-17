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
							'self_introduction',
	];
	protected $dates = ['dob'];
	
	public function setdobAttribute($date)
	{
		$this->attributes['dob'] = \Carbon\Carbon::parse($date);
	}
	

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
	public function tags()
	{
		return $this->belongsToMany('App\Tag')->distinct();
	}
	
}
