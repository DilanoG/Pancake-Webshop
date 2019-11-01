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
Route::get('/shop', 'ShopController@index');
Route::get('/create', 'ProductController@create');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/edit/{id}', 'ProductController@edit');
Route::get('/delete/{id}', 'ProductController@delete');

// Post routes

Route::post('/create', 'ProductController@postCreate');
Route::post('/edit/{id}', 'ProductController@postEdit');

