<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model {

	//
	protected $fillable=[
							'client_id',
							'category',
							'specific_talent',
	];
	public function category()
	{
		return $this->belongsTo('App\TalentCategory');
	}
	
	public function client()
	{
		return $this->belongsTo('App\Client');
	}
	public function portfolios()
	{
		return $this->hasOne('App\Portfolio');
	}
}
