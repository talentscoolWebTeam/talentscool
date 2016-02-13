<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Session;
use Redirect;
use App\User;


class MailController extends Controller
{
    public function store(Request $request) {
        Mail::send('emails.contact',$request->only('name','email','msge'), function($msg) {
            $msg->subject('ContactUs Form');
            $msg->to('contact.talentscool@gmail.com');
        });
        //Session::flash('message', 'Message has been sent!');
        return Redirect::to('/contact-form-thank-you');
    }
}
