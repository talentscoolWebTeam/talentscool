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
Route::get('/','WelcomeController@landing');
Route::get('/homepage', 'WelcomeController@index');
Route::post('/homepage','WelcomeController@sendmail');
Route::get('AboutUs', 'WelcomeController@aboutus');
Route::get('WhatWeDo', 'WelcomeController@whatwedo');
Route::get('home', 'HomeController@index');
Route::get('clients', 'ClientController@index');
Route::get('clients/requested', 'ClientController@requested');
Route::get('clients/accepted', 'ClientController@accepted');
Route::patch('clients/accepted/{id}', 'ClientController@acceptedClientUpdate');
Route::get('clients/accepted/{id}', 'ClientController@acceptedClientInfo');
Route::get('clients/requested/{id}', 'ClientController@requestedClientInfo');
Route::post('clients/requested/accept/', 'ClientController@acceptClient');
Route::post('Tags', 'TagController@store');
Route::put('Tags', 'TagController@delete');
Route::get('subscribe', 'SubscribeController@index');

Route::get('application', 'ApplicationController@application');
Route::get('loading', 'ApplicationController@loading');
Route::get('thanks', 'ApplicationController@thanks');
Route::get('error', 'ApplicationController@error');
Route::post('application', 'ApplicationController@store');

Route::get('admin/invite', 'AdminController@invite');
Route::post('admin/invite', 'AdminController@sendInvite');

Route::get('admin/users', 'AdminController@users');
Route::post('admin/users', 'AdminController@updateUser');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('payment', 'PaymentController@payment');
Route::post('payment', 'PaymentController@pay');
Route::get('payment/successfully', 'PaymentController@successfully');
Route::get('payment/no_account', 'PaymentController@no_account');