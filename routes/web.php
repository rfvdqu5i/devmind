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



// Route::prefix('home')->group(function() {
// 	Route::get('/', 'HomeController@index');
// 	Route::get('page/{page?}', 'HomeController@page');
// });



// Route::prefix('admin')->namespace('Admin')->group(function() {
// 	Route::get('/setting', 'SettingController@setting');
// 	Route::get('/setting/{id}', 'SettingController@show');
// 	Route::get('/user', 'UserController@show');
// });

// Route::group([
// 	'prefix' => 'admin',
// 	'namespace' => 'Admin'
// ], function() {
// 	Route::get('/setting', 'SettingController@setting');
// 	Route::get('/setting/{id}', 'SettingController@show');
// 	Route::get('/user', 'UserController@show');
// });

Route::resource('todos', 'TodoController');