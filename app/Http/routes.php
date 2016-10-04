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
Route::get('/', 'HomeController@index');

//Route::get('/', function () {
//    return view('master');
//});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/matches', 'HomeController@matches');
Route::get('/single-match', 'HomeController@singleMatch');
Route::get('/player', 'HomeController@player');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
