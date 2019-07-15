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

Route::get('/book', 'BookController@create')->name('create');

Route::post('/book', 'BookController@store')->name('create_book');

Route::get('/books', 'BookController@index')->name('list_book');

Route::get('/book/{id}', 'BookController@show')->name('show_book');

Route::delete('/book/{id}', 'BookController@destroy')->name('destroy');

Route::get('/book/{id}','BookController@edit')->name('edit');

Route::patch('/book/{id}','BookController@update')->name('update');
