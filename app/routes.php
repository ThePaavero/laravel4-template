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

Route::get('/', 'HomeController@index');

Route::get('login', 'AuthController@login');
Route::post('login', 'AuthController@submit_login');
Route::get('logout', 'AuthController@logout');

Route::get('signup', 'AuthController@signup');
Route::post('signup', 'AuthController@signup_submit');