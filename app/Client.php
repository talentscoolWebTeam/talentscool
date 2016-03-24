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
        'socialmedia',
        'experience',
        'awards',
        'currRepresent',
        'opportunities',
        'representation',
        'general',
        'talentdev',
        'vanitylux',
        'additional'
    ];
}
