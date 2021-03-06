<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/join', 'Auth\RegisterController@showJoinForm')->name('join');
Route::post('/join', 'Auth\RegisterController@join');

Route::get('/oauth2/google', 'Auth\SocialiteController@redirectToGoogle');
Route::get('/oauth2/google/callback', 'Auth\SocialiteController@handleGoogleCallback');

Route::get('/home', 'HomeController@index');
