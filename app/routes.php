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

Route::get('/', function()
{
	return View::make('app.index');
});

Route::get('pieko/shoplist/index.html', 'ShoplistController@getIndex');
Route::get('pieko/common/todo.html', 'CommonController@getTodo');
Route::get('pieko/payment/index.html', 'PaymentController@getIndex');