<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
*/

Route::get('/','TopController@home');

Route::get('home', 'MainController@profile');
Route::get('edit', 'MainController@edit');
Route::post('edit', 'MainController@store_profile');
Route::get('postlist', 'MainController@postlist');
Route::post('post', 'MainController@store_post');
Route::get('post', 'MainController@post');

// 認証のルート定義
// Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 登録のルート定義
// Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
