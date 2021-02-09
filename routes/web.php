<?php

use Illuminate\Support\Facades\Route;

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

// Pages routes
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/profile', 'ProfileController@index');
Route::get('/order', 'OrderController@index');
Route::get('/cart', 'CartController@index');
Route::get('/admin', 'AdminController@index');

// Categories routes
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/create', 'CategoryController@postCreate');
Route::get('/category/delete/{id}', 'CategoryController@delete');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/edit/{id}', 'CategoryController@postEdit');

// Product Routes

Route::get('/product/create', 'ProductController@create');
Route::post('/product/create', 'ProductController@postCreate');
Route::get('/product/delete/{id}', 'ProductController@delete');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/edit/{id}', 'ProductController@postEdit');
Route::get('/product/{id}', 'ProductController@item');

// Cart Routes

Route::post('/cart/add/{id}', 'CartController@addToCart');
Route::get('/cart/delete/{id}', 'CartController@deleteItem');
Route::post('/cart/update/{id}', 'CartController@updateCart');
Route::get('/cart/clear', 'CartController@clearCart');
Route::get('/cart/pay', 'OrderController@pay');

Auth::routes();
