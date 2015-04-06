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

Route::get('/', 'PublicController@index');
Route::get('admin', 'AdminController@index');
Route::get('admin/add-season', 'SeasonController@add_season');
Route::get('admin/add-animu', 'SeasonController@add_animu');
Route::get('admin/edit-animu/{id}', 'SeasonController@edit_animu');

Route::post('admin', 'AdminController@store');
Route::post('admin/add-animu', 'SeasonController@store');
Route::post('admin', 'SeasonController@update');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
