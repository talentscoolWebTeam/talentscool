<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {

	//
	protected $fillable=[
							'client_id',
							'describeword1',
							'describeword2',
							'describework3',
							'intro_video',
							'current_representation',
							'accolades',
							'achievements',
							'experiences',
							'relative_talent',
							'anything',
	];
	
	public function client()
	{
		return $this->belongsTo('App\Client');
	}
}
