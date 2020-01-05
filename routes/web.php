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

Route::prefix('product')->group(function (){
     route::get('/','ProductController@index')->name('product');
     route::get('create','ProductController@create')->name('product.create');
     route::post('store','ProductController@store')->name('product.store');
     route::get('edit/{id}','ProductController@edit')->name('product.edit');
     route::put('update/{id}','ProductController@update')->name('product.update');
     route::delete('destroy/{id}','ProductController@destroy')->name('product.destroy');
     route::get('search','ProductController@search')->name('product.search');
});

