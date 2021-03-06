<?php

use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', 'CheckInsController@loadWelcome');

Route::get('/queue', 'CheckInsController@getQueueForBarbershop')->middleware('auth');

Route::post('/remove', 'CheckInsController@delete')->middleware('auth');

Route::post('/checkIn', 'CheckInsController@checkIn');

Route::post('/addShop', 'BarberShopsController@store');

Route::get('/updateProfile', 'UserController@loadUpdate');

Route::post('/update', "UserController@update");

Route::get('/passwordReset', 'Auth\ResetPasswordController@reset');

Route::post('/passworepUdate', 'Auth\ResetPasswordController@update');

Route::get('admin', function() {
	return view('adminMenu');
})->middleware('auth');


Route::get('/addShop', function() {
	return view('addShop');
})->middleware('auth');


Auth::routes();



