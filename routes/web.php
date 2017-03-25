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

Route::get('/', 'HomeController@index');
Route::get('/signup-login', function(){
	return view('signup-login');
});
Route::get('/hoods/search', 'NeighborhoodController@search');
Route::get('/schedule', 'ScheduleController@index');
Route::get('/schedule/{slug}', 'ScheduleController@specific');
Route::get('/about-us', function(){
	return view('about');
});

Route::get('/text-jacob', function(){
	SMS::send('F%$# you, Jacob', null, function($sms){
		$sms->to('8142546176');
	});
});