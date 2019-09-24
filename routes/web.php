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

Route::get('greet', function(){
	// return view('greeting', [
	// 	'name' => 'Nguyễn Đức Anh',
	// 	'age' => '22'
	// ]);

	return view('greeting')
	->with([
		'name' => 'Nguyễn Đức Anh',
		'age' => '22'
	]);
});

Route::get('/child', function(){
	return view('admin.child');
});

Route::get('/', function(){
	$list = ['học html', 'học css', 'học php'];
	return view('todo')->with('list', $list);
});

Route::get('/add', function(){
	return view('add');
})->name('add');