<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicedesire extends Model {

	//
	protected $fillable=[
							'client_id',
							'representation',
							'opportunity',
							'service',
	];
	
	public function client()
	{
		return $this->belongsTo('App\Client');
	}
}
