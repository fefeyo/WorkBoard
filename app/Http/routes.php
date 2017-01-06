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

use App\School;

Route::get('/','TopController@home');

Route::get('home', 'MainController@profile');

Route::get('school_edit', 'MainController@school_edit');
Route::post('school_edit', 'MainController@store_school_info');
Route::get('skill_edit', 'MainController@skill_edit');
Route::post('skill_edit', 'MainController@store_skill_info');

Route::get('postlist', 'MainController@postlist');
Route::post('post', 'MainController@store_post');
Route::get('post', 'MainController@post');

Route::get('debug', function() {
    $school = School::where('user_id', '=', Auth::user()->id)->get();
    return var_dump($school);
});

// 認証のルート定義
Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 登録のルート定義
Route::post('auth/register', 'Auth\AuthController@postRegister');
