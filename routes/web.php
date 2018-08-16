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


Route::get('/test', function () {
    return 'This my test page';
});

Route::get('/page', function () {
    return view('mypage');
});

Route::get('my','FristController@index');
Route::get('hii','FristController@tetstt');

Route::resource('data','SecondController');

Route::get('dbcheck', 'FristController@dbConn');