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

Route::group(['prefix' => 'admin'], function () {

	Route::resource('users', 'UsersController');	

});

Route::get('avatars/{avatar}', function ($avatar = null) {
	$url = storage_path() . "/app/public/avatars/{$avatar}";
	if (file_exists($url)) {
		return Response::download($url);
	}
});