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

use App\Http\Controllers\ProductPage;

Route::get('/home', function () {
    return view('welcome');
});

//Route::get('begin','Auth\LoginController@index')->name('logeo');
//Route::post('login','Auth\LoginController@ingreso')->name('login');

Route::get('auth/login', 'Auth\LoginController@ShowLogin')->name('Showlogin');
Route::post('auth/login', 'Auth\LoginController@Login')->name('login');

Route::get('register', function () {
    return view('auth.register');
});

Route::post('registered', 'Auth\TokenAuthController@signup')->name('registered');

Route::get('home','HomeController@index')->name('home');
Route::get('productPage/{idcategorie}','ProductPage@show')->name('pageproducts');

// Productos
Route::get('detailProduct/{idproduct}', 'DetalleProducto@show')->name('productDetail');
Route::get('Productquotation/{idproduct}','CotizacionProducto@show')->name('quotation');
Route::post('sendquotation','CotizacionProducto@store')->name('sendquotation');

Route::get('contact','Contacto@index')->name('contacto');

Route::get('siteBlog','BlogPage@index')->name('BlogSite');


// admin
Auth::routes();

Route::get('welcome','HomeController@index')->name('welcome');
Route::get('dashboard','admin\Dashboard@index')->name('homeAdmin');
Route::get('category','admin\CategoryController@index')->name('adminCategory');
Route::get('subcategory','admin\SubCategoryController@index')->name('adminSubCategory');
Route::get('product','admin\ProductController@index')->name('adminProduct');
Route::post('categorycreate','admin\CategoryController@store')->name('categorycreate');
Route::post('subcategoriecreate','admin\SubCategoryController@store')->name('subcategoriecreate');
Route::post('productcreate','admin\ProductController@store')->name('productcreate');
Route::get('list','admin\ProductController@list')->name('lista');
Route::get('edit/{id}','admin\ProductController@edit')->name('editar');
Route::get('blog','admin\BlogController@index')->name('NewBlog');
Route::post('post','admin\BlogController@store')->name('newpost');



