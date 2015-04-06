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
Route::get('admin/edit-season/{id}', 'SeasonController@edit_season');
Route::get('admin/list-season/{id}', 'SeasonController@list_season');

Route::get('admin/add-animu', 'AnimuController@add_animu');
Route::get('admin/edit-animu/{id}', 'AnimuController@edit_animu');

Route::post('admin/add-season', 'SeasonController@store');
Route::post('admin/edit-season', 'SeasonController@update');

Route::post('admin/add-animu', 'AnimuController@store');
Route::post('admin', 'AnimuController@update');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
