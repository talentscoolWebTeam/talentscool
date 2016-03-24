<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model {

	//
	protected $fillable=[
		'email',
		'industry',
		'specific_talent',
		'type1',
		'type2',
		'type3',
		'portfolioitem1',
		'portfolioitem2',
		'portfolioitem3'
	];
}
