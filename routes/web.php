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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'TimelineController@index')->name('timeline');
    Route::post('/posts', 'PostController@create')->name('post');
    Route::get('/posts', 'PostController@index');

    Route::get('/u/{user}', 'UserController@index')->name('user.profile');
    Route::get('/u/{user}/follow', 'UserController@follow')->name('user.follow');
    Route::get('/u/{user}/unfollow', 'UserController@unFollow')->name('user.unfollow');
});

