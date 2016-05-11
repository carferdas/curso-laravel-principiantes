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

//HTTP: GET, POST, PUT, DELETE

Route::group(['prefix' => 'admin'], function () {
	
	Route::get('nombre/{nombre?}', [
		'as' => 'nombre',
		'uses' => 'TestController@mostrar'
	]);

	Route::resource('rest', 'RestController');

});

Route::get('/', function () {
    return view('welcome');
});
