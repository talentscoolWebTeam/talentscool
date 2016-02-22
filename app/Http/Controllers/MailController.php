<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Session;
use Redirect;


class MailController extends Controller
{
    public function store(Request $request) {
        Mail::send('emails.contact',$request->only('name','email','msge'), function($msg) {
            $msg->subject('ContactUs Form');
            $msg->to('contact.talentscool@gmail.com')->cc('michaelbpratt@gmail.com');
        });
        //Session::flash('message', 'Message has been sent!');
        return Redirect::to('/contact-form-thank-you');
    }
}
