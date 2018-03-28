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
    DB::table('users')->truncate();

    $user = \App\User::forceCreate([
        'name' => 'Allen',
        'email' => 'allen@example.test',
        'password' => bcrypt('supersecret'),
    ]);

    event(new \App\Events\UserWasBanned($user));
});
