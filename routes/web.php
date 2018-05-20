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

// 頁面
Route::get('/', 'PostsController@index');

// 收到輸入表單的資料
Route::post('/posts/', 'PostsController@store');

// 設定暱稱
Route::post('/users/', 'UsersController@store');