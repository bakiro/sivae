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

Route::get('/','DefaultController@index');
Route::get('/office','CMSController@index');
Route::get('/office/order-history','CMSController@order');
Route::get('/office/date','CMSController@date');
