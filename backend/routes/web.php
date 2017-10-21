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

Route::get('/entries', 'EntriesController@index');
Route::post('/entries/create', 'EntriesController@store');
Route::get('/entries/{id}', 'EntriesController@show');
Route::delete('/entries/{id}', 'EntriesController@destroy');
Route::put('/entries/{id}', 'EntriesController@update');
