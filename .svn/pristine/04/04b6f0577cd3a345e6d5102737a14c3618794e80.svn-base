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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','Home\IndexController@index');
Route::get('genres','Home\GenresController@index');
Route::get('events','Home\EventsController@index');
Route::resource('video','Home\VideoController');

Route::get('listen','Home\ListenController@index');
Route::get('player','Home\ListenController@player');


Route::resource('login','Home\User\LoginController');
Route::resource('user','Home\User\UserController');
Route::get('profile','Home\User\UserController@profile');
Route::get('list','Home\User\UserController@list');
Route::resource('setting','Home\User\SettingController');
Route::resource('register','Home\User\RegisterController');


Route::get('admin','Admin\IndexController@index');


Route::resource('admin/singer','Admin\SingerController');
Route::resource('admin/music','Admin\MusicController');
Route::resource('admin/video','Admin\VideoController');