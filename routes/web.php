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

Route::get('/','TasjilControler@pr_page');
Route::get('/cais', 'CaisController@show')->middleware('auth');
Route::post('/cais/{y}/{m}/{d}', 'CaisController@cais')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //....زائد

Route::get('/show', 'CaisController@show')->middleware('auth');

Route::get('/show_cais/{id}', 'CaisController@show_cais')->middleware('auth');
