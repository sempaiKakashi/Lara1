<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('users', ['uses' => 'UsersController@index']);
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);
/*Route::get('users', function () {
	$users = [
		'0' => [
			'first_name' => 'Andrew',
			'last_name' => 'Ratkin',
			'location' => 'Ukraine'

		],
		'1' => [
			'first_name' => 'Stephen',
			'last_name' => 'Clough',
			'location' => 'England'

		]
	];
	return $users;
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
