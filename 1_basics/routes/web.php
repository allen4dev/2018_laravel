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

Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::get('/posts/{post}', 'PostController@show')->name('posts.detail');
Route::post('/posts', 'PostController@store')->name('posts.store');

Route::post('/posts/{post}/comments', 'CommentController@store')->name('comments.store');
