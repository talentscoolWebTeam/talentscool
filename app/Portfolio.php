<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {

	//
	protected $fillable=[
							'talent_id',
							'photo',
							'video',
							'audio',
	];
	
	public function talent()
	{
		return $this->belongsTo('App\Talent');
	}
}
