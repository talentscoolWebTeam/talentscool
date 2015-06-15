<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model {
	public $timestamps = false;
	//
	protected $fillable = ['gender'];
	public function client()
	{
		return $this->hasMany('\App\Client');
	}
}
