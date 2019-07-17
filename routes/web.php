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


Route::get('/book', 'BookControllern@create')->name('create');

Route::post('/book', 'BookControllern@store')->name('create_book');

Route::get('/books', 'BookControllern@index')->name('list_book');

Route::get('/book/{id}', 'BookControllern@show')->name('show_book');

Route::delete('/book/{id}', 'BookControllern@destroy')->name('destroy');

Route::get('/book/{id}/edit','BookControllern@edit')->name('edit');

Route::patch('/book/{id}','BookControllern@update')->name('update');


