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

Route::get('/', 'PortfolioController@index')->name('home');

Route::get('/portfolio', 'PortfolioController@index');
Route::get('/portfolio/detail/{id}', 'PortfolioController@detail');
Route::get('/about', 'AboutController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/blog/detail/{id}', 'BlogController@post');
Route::get('/contact', 'ContactController@index');