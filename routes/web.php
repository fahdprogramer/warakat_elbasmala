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
Route::get('/cais', 'CaisController@cais');
Route::post('/cais/{y}/{m}/{d}', 'CaisController@cais');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sijil', 'CaisController@sijil');

Route::get('/show', 'CaisController@show');

Route::get('/show_cais/{id}', 'CaisController@show_cais');
