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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UsersController@index');
Route::get('/user/index', ['as'=>'users.index','uses'=>'UsersController@index']);

Route::get('/notification', 'NotificationsController@index');
Route::get('/notification/index', ['as'=>'notifications.index','uses'=>'NotificationsController@index']);