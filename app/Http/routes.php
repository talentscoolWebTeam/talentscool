<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Landing page
Route::get('/', 'WelcomeController@index');
Route::get('/homepage', 'WelcomeController@index');
Route::resource('/contactus', 'MailController');
Route::get('contact-form-thank-you', 'WelcomeController@contactthanks');
Route::get('viewapp','ApplicationController@viewapp');
//Application page
//Route::get('apply', 'ApplicationController@application');

//Route::get('/admin', 'AdminController@index');
//Route::get('testmysql','ApplicationController@testsql');
Route::post('submitapp','ApplicationController@store');
Route::get('thanks', 'ApplicationController@thanks');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',]);
Route::get('error', 'ApplicationController@error');
