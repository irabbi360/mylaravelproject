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

use Alaouy\Youtube\Facades\Youtube;

Route::get('/', function () {

    $videoLists = Youtube::listChannelVideos('UCxS6I9XUhRxMlfjEtEg_8aw', 40);
//dd($videoList);
    //$myproject = ["name" => "Tech Bangla School"];

    return view('ytvdo', compact('videoLists'));
});
Route::get('yt', function () {

    $channel = Youtube::getChannelById('UCxS6I9XUhRxMlfjEtEg_8aw');;
dd($channel);

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


Route::get('version', function (){

})->middleware(\App\Http\Middleware\VersionCheck::class);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('getrequest', 'FristController@getRequest');
Route::post('postrequest', 'FristController@postRequest');

Route::get('studentlist', 'FristController@getStudentList');
Route::get('editinfo/{id}', 'FristController@edit');
Route::post('update/{id}', 'FristController@update');
Route::delete('delete/{id}', 'FristController@delete');
