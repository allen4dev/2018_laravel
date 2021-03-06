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

Route::get('/home', 'ThreadController@index')->name('home');
Route::get('/threads/{thread}', 'ThreadController@show');
Route::get('/threads/create', 'ThreadController@create');

Route::post('/threads', 'ThreadController@store');
Route::post('/threads/{thread}/replies', 'ReplyController@store');

Auth::routes();
