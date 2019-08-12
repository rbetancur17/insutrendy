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

Route::get('welcome','admin\Dashboard@index')->name('welcome');

Route::get('dashboard','admin\Dashboard@index')->name('homeAdmin');

Route::get('category','admin\CategoryController@index')->name('adminCategory');
Route::get('product','admin\ProductController@index')->name('adminProduct');

Route::post('categorycreate','admin\CategoryController@store')->name('categorycreate');

Route::post('productcreate','admin\ProductController@store')->name('productcreate');
