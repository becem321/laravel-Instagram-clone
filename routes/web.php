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

Auth::routes();



Route::post('follow/{user}', 'followsController@store');

Route::get('/p/create', 'PostsController@create');

Route::get('/', 'PostsController@index');

Route::post('/p', 'PostsController@store');

Route::get('p/{post}', 'PostsController@show');

Route::get('/profile/{user}/edit', 'profilesController@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'profilesController@update')->name('profile.update');

Route::get('/profile/{user}', 'profilesController@index')->name('profile.show');

