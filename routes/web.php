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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});



Route::group(['prefix' => '/student'], function(){
	Route::get('/home', [
				'as' => 'home',
				'uses' => 'TestController@home'
	]);

	Route::get('/input', [
			'as' => 'input',
			'uses' => 'TestController@input'
	]);

	Route::get('/list', [
				'as' => 'list',
				'uses' => 'TestController@list'
	]);

	Route::post('/input', [
	 			'as' => 'input',
				'uses' => 'TestController@inputForm'
	]);

	Route::get('/list/{id}', [
				'as' => 'list/{$id}',
				'uses' => 'TestController@delete'
	]);

	Route::get('/input/{id}', [
				'as' => 'input/{$id}',
				'uses' => 'TestController@edit'
	]);

	Route::post('/input/{id}', [
				'as' => 'input/{$id}',
				'uses' => 'TestController@update'
	]);
});