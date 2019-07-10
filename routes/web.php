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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'PostController@index')->name('posts.list');
Route::get('/blog/{id}', 'PostController@view')->name('posts.view');
Route::get('/user', 'UserController@index')->name('users.list');

Route::group(["middleware" => "auth"], function () {
    Route::get('/create', 'PostController@create')->name('posts.create');
    Route::post('/create', 'PostController@store')->name('posts.store');
});