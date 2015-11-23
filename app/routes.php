<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',function(){
	return Redirect::route('dashboard');
});

Route::group(['before' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'AuthController@login']);
	Route::post('login', array('uses' => 'AuthController@doLogin'));
});

Route::group(array('before' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'AuthController@doChangePassword'));

	Route::get('users', ['as' => 'users.index', 'uses' => 'UsersController@index']);
	Route::get('users/create', [ 'as'=>'users.create','uses' => 'UsersController@create']);
	Route::post('users', ['as' => 'users.store', 'uses' => 'UsersController@store']);
	Route::get('users/{id}', ['as' => 'users.show', 'uses' => 'UsersController@show']);
	Route::get('users/{id}/edit',['as'=>'users.edit', 'uses' => 'UsersController@edit']);
	Route::put('users/{id}',['as' => 'users.update', 'uses' => 'UsersController@update']);
	Route::get('users/{id}/delete', ['as' => 'users.destroy', 'uses' => 'UsersController@destroy']);
	Route::get('users/{id}/show', ['as' => 'users.show', 'uses' => 'UsersController@show']);
});