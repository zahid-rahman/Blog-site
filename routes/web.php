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
/**
 *  unregistered viewers
 */
Route::get('/',"loginController@index")->name('homepage');

/**
 *
 */



/**
 *  registered bloggers
 */
Route::get('/add post',"bloggerController@addpost")->name('addpost');
Route::get('/view post',"bloggerController@viewPost")->name('viewpost');
Route::get('/profile setting',"bloggerController@profileSetting")->name('profile.setting');
Route::post('/publish post',"postController@store")->name('post.publish');

/**
 *
 */




/**
 *  admin blogger
 */


/**
 *
 */








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
