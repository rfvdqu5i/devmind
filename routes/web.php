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

// Route::get('form', function () {
//     return view('form');
// });

Route::view('form', 'form');

Route::redirect('/form1', '/form');

Route::get('post/{id?}', function($id = 1) {
    return view('form');
})->name('post');

Route::get('post/{id?}/{comment}', function($id = 1, $idComment) {
    return "Post $id with comment $idComment";
});

// Route::prefix('admin')->group(function() {
// 	Route::prefix('user')->group(function() {
// 		Route::get('/profile', function(){
// 			echo 'profile';
// 		});
// 		Route::get('/edit', function(){
// 			echo 'edit';
// 		});
// 		Route::get('/create', function(){
// 			echo 'create';
// 		});
// 	});
// });

// Route::prefix('admin')->group(function() {
// 	Route::prefix('lesson')->group(function() {
// 		Route::get('/1', function(){
// 			echo 'lesson 1';
// 		});
// 		Route::get('/edit', function(){
// 			echo 'edit';
// 		});
// 		Route::get('/test', function(){
// 			echo 'test';
// 		});
// 		Route::prefix('video')->group(function() {
// 			Route::get('/', function(){
// 				echo 'video';
// 			});
// 			Route::get('/3', function(){
// 				echo 'video 3';
// 			});
// 		});
// 	});
// });

// Route::group(['prefix' => 'admin', 'name' => 'admin.'], function() {
// 	Route::prefix('lesson')->group(function() {
// 		Route::get('/1', function(){
// 			echo '1';
// 		})->name('lesson');
// 		Route::get('/edit', function(){
// 			echo 'edit';
// 		})->name('edit');
// 		Route::get('/test', function(){
// 			echo 'test';
// 		})->name('test');
// 		Route::prefix('video')->group(function() {
// 			Route::get('/', function(){
// 				echo 'video';
// 			});
// 			Route::get('/3', function(){
// 				return view('form');
// 			});
// 		});
// 	});
// });

// Route::group(['prefix' => 'admin', 'name' => 'admin.'], function() {
// 	Route::group(['prefix' => 'category', 'name' => 'category.'], function() {
// 		Route::get('/', function(){
// 			echo 'home category';
// 		})->name('home');
// 		Route::group(['prefix' => '13', 'name' => '13.'], function(){
// 			Route::group(['prefix' => 'post', 'name' => 'post.'], function(){
// 				Route::get('/', function(){
// 					echo 'post';
// 				})->name('home post');
// 				Route::group(['prefix' => 'post', 'name' => 'post.'], function(){
// 					Route::get('/', function(){
// 						echo 'category 13 post null';
// 					})->name('null');
// 					Route::get('/45', function(){
// 						echo 'categoty 13 post 45';
// 					})->name('45');
// 				});
				
// 			});
// 		});
// 	});
// 	Route::group(['prefix' => 'post', 'name' => 'post.'], function() {
// 		Route::get('/', function(){
// 			echo 'home post';
// 		})->name('hone');
// 		Route::get('/22', function(){
// 			echo 'post 22';
// 		})->name('22');
// 		Route::prefix('edit')->group(function() {
// 			Route::get('/', function(){
// 				echo 'edit post';
// 			})->name('edit');
// 			Route::get('/3', function(){
// 				echo 'edit post 3';
// 			})->name('edit3');
// 		});
// 	});

// });

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

Route::get('todo', function(){
	return view('todo');
});

Route::get('todo/add', function(){
	$list = ['học html', 'học css', 'học php'];
	return view('add')->with('list', $list);
})->name('add');