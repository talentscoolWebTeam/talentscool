<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
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
        'profilepic',
        'talent_category',
        'specific_talent',
        'audiopath',
        'imagepath',
        'vidlink',
        'aboutme',
        'socialmedia',
        'extralink1',
        'extralink2',
        'extralink3',
        'experience',
        'currRepresent',
        'opportunities',
        'representation',
        'generalserv',
        'talentdev',
        'vanitylux',
        'additional'
    ];
}
