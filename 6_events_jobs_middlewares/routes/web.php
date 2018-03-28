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
    // event(new \App\Events\UserWasBanned($user));
})->name('home');

Route::get('/login', function () {
    DB::table('users')->truncate();

    $user = \App\User::forceCreate([
        'name' => 'Allen',
        'email' => 'allen@example.test',
        'password' => bcrypt('supersecret'),
        'subscribed' => true,
    ]);

    auth()->login($user);

    return redirect('/dashboard');
})->name('login');

Route::get('/logout', function () {
    auth()->logout();

    return redirect('/');
})->name('logout');

Route::get('/dashboard', ['middleware' => ['auth'], function () {
    dd('This page can be viewed by logged in users.');
}])->name('dashboard');

Route::get('/courses', ['middleware' => ['auth', 'subscribed'], function () {
    dd('This page can be viewed by logged in users, but also need to be subscribed.');
}])->name('courses');
