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

Route::redirect('/','blog');

Auth::routes();

//web
Route::get('blog', 'web\Pagecontroller@blog')->name('blog');
Route::get('entrada/{slug}',"web\PageController@post")->name('post');
Route::get('category/{slug}',"web\PageController@category")->name('category');
Route::get('etiqueta/{slug}',"web\PageController@tag")->name('tag');

//admin

Route::resource('tags',      'Admin\TagController');
Route::resource('categories','Admin\Categorycontroller');
Route::resource('posts',     'Admin\PostController');
