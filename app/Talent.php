<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model {

	//
	protected $fillable=[
		'email',
		'industry',
		'specific_talent',
		'portfolioitem1',
		'portfolioitem2',
		'portfolioitem3'
	];
	
	public function client()
	{
		return $this->belongsTo('App\Client');
	}
}
