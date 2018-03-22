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
Route::resource('page', 'PageController');
//Route::get('/notification', 'NotificationsController@index');
//Route::get('/notification', ['as'=>'notifications','uses'=>'NotificationsController@index']);

Route::post('/notification/store', ['as'=>'notifications.store','uses'=>'NotificationsController@store']);

//Route::post('/notification/store', ['as'=>'notification.store','uses'=>'NotificationsController@store']);
Route::resource('notification', 'NotificationsController');
