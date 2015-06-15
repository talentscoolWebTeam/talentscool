<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {
	public $timestamps = false;
	//
	protected $fillable = ['zip', 'state', 'latitude', 'longitude', 'city', 'full_state'];

	public function client()
	{
		return $this->hasMany('\App\Client');
	}	
}
