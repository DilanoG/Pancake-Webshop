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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/shop', 'PageController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/profile', 'PageController@profile');
Route::get('/cart', 'CartController@index');

// Products routes
Route::get('/product/create', 'ProductController@create');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::get('/product/{id}', 'ProductController@item');
Route::get('/product/delete/{id}', 'ProductController@delete');
Route::post('/product/create', 'ProductController@postCreate');
Route::post('/product/edit/{id}', 'ProductController@postEdit');

// Categories routes
Route::get('/category/create', 'CategoryController@create');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::get('/category/delete/{id}', 'CategoryController@delete');
Route::post('/category/create', 'CategoryController@postCreate');
Route::post('/category/edit/{id}', 'CategoryController@postEdit');

Route::post('/cart/add/{id}', 'CartController@addToCart');
Route::get('/cart/delete/{id}', 'CartController@deleteItem');
Route::post('/cart/update/{id}', 'CartController@updateCart');
Route::get('/cart/clear', 'CartController@clearCart');