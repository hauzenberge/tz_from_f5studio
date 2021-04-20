<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'ADSController@home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::prefix('/categories')->group(function () {
	   Route::get('/', 'CategoryController@index');

		Route::any('/edit/{id}', 'CategoryController@edit');
		Route::any('/update/{id}', 'CategoryController@update');

		Route::any('/add', 'CategoryController@add');
		Route::any('/store', 'CategoryControlle@store');
		Route::any('/delete/{id}', 'CategoryController@destroy');
	});

	Route::prefix('/ads')->group(function () {
	   Route::get('/', 'ADSController@index');

		Route::any('/edit/{id}', 'ADSController@edit');
		Route::any('/ad-update/{id}', 'ADSController@update');

		Route::any('/destroy-image/{id}', 'ADSController@destroyImage');

		Route::any('/add', 'ADSController@add');
		Route::any('/ad-store', 'ADSController@store');
		Route::any('/delete/{id}', 'ADSController@destroy');
	});

	Route::prefix('/users')->group(function () {
	   Route::get('/', 'UserController@index');

		Route::any('/user/edit/{id}', 'UserController@edit');
		Route::any('/user-update/{id}', 'UserController@update');

		Route::any('/user/add', 'UserController@add');
		Route::any('/user-store', 'UserController@store');
		Route::any('/user/delete/{id}', 'UserController@destroy');
	});
});

