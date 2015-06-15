<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TalentCategory extends Model {

	//
	public $timestamps = false;
	protected $fillable = ['category'];
	public function talents()
	{
		return $this->hasMany('App\Talent');
	}
	
}
