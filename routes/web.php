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

use Illuminate\Support\Facades\Auth;

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'PostController@index')->name('posts.list');
Route::get('/blog/{id}', 'PostController@view')->name('posts.view');
Route::get('/search', 'PostController@search')->name('posts.search');
Route::get('/user', 'UserController@index')->name('users.list');
Route::get('/user/posts/{id}', 'UserController@authorpost')->name('users.authorpost');

Route::group(["middleware" => "auth"], function () {
    Route::get('/create', 'PostController@create')->name('posts.create');
    Route::post('/create', 'PostController@store')->name('posts.store');
    Route::get('/mypost', 'UserController@mypost')->name('users.mypost');
    Route::get('/mypost/edit/{id}', 'UserController@edit')->name('users.edit');
    Route::post('/mypost/edit/{id}', 'UserController@update')->name('users.update');
    Route::get('/mypost/detroy/{id}', 'UserController@destroy')->name('users.destroy');
    Route::post('/blog/{id}', 'PostController@comment')->name('posts.comment');
});
