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

Auth::routes();

Route::get('/', 'ProductController@getProducts')->name('products');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/edit/{id}', 'ProductController@productEdit') -> name('product.edit') -> middleware('auth');
Route::post('product/edit/{id}', 'ProductController@productUpdate') -> name('product.update') -> middleware('auth');
Route::get('/product/delete/{id}', 'ProductController@productDelete') -> name('product.delete') -> middleware('auth');