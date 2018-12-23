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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','StudentController@sessionTut');
Route::get('getsession','StudentController@getSessionData');
Route::get('set-session','StudentController@storeSessionData');
Route::get('deleteSessionData','StudentController@deleteSessionData');
//coockie
Route::get('setCookie','StudentController@setCookie');
Route::get('getCookie','StudentController@getCookie');
//cache
Route::get('setCache','StudentController@setCache');
Route::get('getCache','StudentController@getCache');
//file copy move delete
Route::get('filecopy','StudentController@copyMoveFile');
Route::get('filedelete','StudentController@deleteFile');


Route::get('students','StudentController@index');
Route::get('create','StudentController@create');
Route::post('store','StudentController@store');
Route::get('show/{id}','StudentController@show');
Route::get('edit/{id}','StudentController@edit');
Route::post('update/{id}','StudentController@update');
Route::delete('delete/{id}','StudentController@delete');