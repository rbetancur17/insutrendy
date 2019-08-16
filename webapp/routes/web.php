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


Route::get('home','HomeController@index')->name('home');
Route::get('productPage/{idcategorie}','ProductPage@show')->name('pageproducts');

// Productos
Route::get('detailProduct/{idproduct}', 'DetalleProducto@show')->name('productDetail');
Route::get('Productquotation/{idproduct}','CotizacionProducto@show')->name('quotation');
Route::post('sendquotation','CotizacionProducto@store')->name('sendquotation');

Route::get('contact','Contacto@index')->name('contacto');



// admin
Route::get('welcome','HomeController@index')->name('welcome');
Route::get('dashboard','admin\Dashboard@index')->name('homeAdmin');
Route::get('category','admin\CategoryController@index')->name('adminCategory');
Route::get('subcategory','admin\SubCategoryController@index')->name('adminSubCategory');
Route::get('product','admin\ProductController@index')->name('adminProduct');
Route::post('categorycreate','admin\CategoryController@store')->name('categorycreate');
Route::post('subcategoriecreate','admin\SubCategoryController@store')->name('subcategoriecreate');
Route::post('productcreate','admin\ProductController@store')->name('productcreate');


