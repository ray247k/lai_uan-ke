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


Route::group(['middleware' => ['username']], function ()
{
    Route::resource('/posts/', 'PostsController', ['only' => ['index', 'store']]);
});

// 設定暱稱
Route::resource('/', 'UsersController', ['only' => ['index']]);
Route::resource('/users/', 'UsersController', ['only' => ['store']]);