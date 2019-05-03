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

Route::group(['prefix'=>'blogs'], function (){
   Route::get('/index', 'BlogController@index')->name('blogs.index');
   Route::get('/create','BlogController@create' )->name('blogs.create');
   Route::post('/create','BlogController@store' )->name('blogs.store');
   Route::get('/{blogId}/delete', 'BlogController@delete')->name('blogs.delete');
   Route::post('/{blogId}/delete', 'BlogController@destroy')->name('blogs.destroy');
   Route::get('/{blogId}/edit', 'BlogController@edit')->name('blogs.edit');
   Route::post('/{blogId}/edit', 'BlogController@update')->name('blogs.update');
   Route::get('/{blogId}', 'BlogController@show')->name('blogs.show');
});
