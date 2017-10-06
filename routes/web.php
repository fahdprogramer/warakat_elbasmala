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
Route::get('/cais', 'CaisController@cais')->middleware('auth');
Route::post('/cais', 'CaisController@cais')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //....زائد

Route::get('/welcome', 'CaisController@welcome')->middleware('auth');

Route::get('/show_cais/{id}', 'CaisController@show_cais')->middleware('auth');

Route::get('/last_month/{l_m}/{l_y}', 'PaginationController@last_month')->middleware('auth');
Route::get('/next_month/{n_m}/{n_y}', 'PaginationController@next_month')->middleware('auth');