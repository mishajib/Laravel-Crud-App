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

Route::get('/','MasterController@index')->name('home');
Route::get('add_student','MasterController@create')->name('add.student');
Route::post('add_student','MasterController@store')->name('store.student');
Route::get('edit_student/{id}','MasterController@edit')->name('edit.student');
Route::post('update_student/{id}','MasterController@update')->name('update.student');
Route::delete('delete_student/{id}','MasterController@destroy')->name('delete.student');

