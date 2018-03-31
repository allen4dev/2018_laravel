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

Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');

Route::get('/comments/{comment}/edit', 'CommentController@edit')->name('comments.edit');
Route::put('/comments/{comment}/edit', 'CommentController@update');

Route::get('/login', function () {
  $user = \App\User::forceCreate([
    'name' => 'allen4dev',
    'email' => 'allen4dev@gmail.com',
    'password' => 'secret',
  ]);

  auth()->login($user);

  return redirect('/');
});
