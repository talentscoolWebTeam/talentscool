<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'profilepic',
        'first_name',
        'last_name',
        'email',
        'country',
        'state',
        'city',
        'zip',
        'phone',
        'dob',
        'gender',
        'aboutme',
        'instagram',
        'facebook',
        'youtube',
        'twitter',
        'extralinks',
        'experience',
        'awards',
        'currRepresent',
        'opportunities',
        'representation',
        'generalserv',
        'talentdev',
        'vanitylux',
        'additional'
    ];

    public function talents()
    {
        return $this->hasMany('App\Talent');
    }
}
