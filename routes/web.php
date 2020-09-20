<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin','middleware' => 'auth'],function() {
    Route::get('home/request','Admin\RequestController@Home');
    Route::get('request/overwork','Admin\RequestController@Overwork');
    Route::get('request/holiday','Admin\RequestController@Holiday');
    Route::get('home/manage','Admin\ManageController@Home');
    Route::get('management/key','Admin\ManageController@Key');
    Route::get('management/prove','Admin\ManageController@Provenance');
    Route::get('management/shelf','Admin\ManageController@Shelf');
    Route::get('management/diagram','Admin\ManageController@Diagram');
    Route::get('home/contact','Admin\ContactController@Home');
    Route::get('contact/bulletin','Admin\ContactController@Bulletin');
    Route::get('contact/inquiry','Admin\ContactController@Inquiry');
    Route::post('request/overwork', 'Admin\RequestController@sendOverwork');
    Route::get('overwork', 'Admin\RequestController@index');
});

Auth::routes();

Route::get('/mypage', 'MypageController@index')->name('mypage');
