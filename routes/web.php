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

Route::post('/cais_edit', 'CaisController@cais_edit')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //....زائد

Route::get('/welcome', 'CaisController@welcome')->middleware('auth');


Route::get('/total_sijil', 'TablecontroleController@total_sijil')->middleware('auth');
Route::get('/wara9at_elbasmala', 'Wara9at_elbasmalaController@wara9at_elbasmala');
Route::get('/nouveau_utilisateur', 'Wara9at_elbasmalaController@nouveau_utilisateur')->middleware('auth');

Route::get('/controle', 'Wara9at_elbasmalaController@controle')->middleware('auth');
Route::post('/updat_role/{user}', 'Wara9at_elbasmalaController@updat_user')->middleware('auth');

Route::get('/edit_sijil/{yers}/{month}/{day}', 'CaisController@nouveau_sijil')->middleware('auth');

Route::post('/edit_sijil/{yers}/{month}/{day}', 'CaisController@nouveau_sijil')->middleware('auth');

Route::get('/mounassaba/{yers}/{month}/{day}', 'CaisController@mounassaba')->middleware('auth');
Route::post('/mounassaba/{yers}/{month}/{day}', 'CaisController@mounassaba')->middleware('auth');

Route::get('/show_cais/{id}', 'CaisController@show_cais')->middleware('auth')->middleware('auth');
Route::get('/info_mounassaba/{id}', 'CaisController@info_mounassaba')->middleware('auth')->middleware('auth');
Route::get('/edit_day/{id}', 'CaisController@show_cais')->middleware('auth')->middleware('auth');
Route::get('/show_cais/{yers}/{month}/{day}', 'CaisController@edit_sijil')->middleware('auth');

Route::get('/last_month/{l_m}/{l_y}', 'PaginationController@last_month')->middleware('auth');
Route::get('/last_month_p/{l_m}/{l_y}', 'TablecontroleController@last_month')->middleware('auth');
Route::get('/next_month/{n_m}/{n_y}', 'PaginationController@next_month')->middleware('auth');
Route::get('/next_month_p/{n_m}/{n_y}', 'TablecontroleController@next_month')->middleware('auth');