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

Route::get('/', 'WelcomeController@index');
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


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

