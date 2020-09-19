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

Route::group(['prefix' => 'admin'],function() {
    Route::get('home/request','Admin\RequestController@Home')->middleware('auth');
    Route::get('request/overwork','Admin\RequestController@Overwork')->middleware('auth');
    Route::get('request/holiday','Admin\RequestController@Holiday')->middleware('auth');
    Route::get('home/manage','Admin\ManageController@Home')->middleware('auth');
    Route::get('management/key','Admin\ManageController@Key')->middleware('auth');
    Route::get('management/prove','Admin\ManageController@Provenance')->middleware('auth');
    Route::get('management/shelf','Admin\ManageController@Shelf')->middleware('auth');
    Route::get('management/diagram','Admin\ManageController@Diagram')->middleware('auth');
    Route::get('home/contact','Admin\ContactController@Home')->middleware('auth');
    Route::get('contact/bulletin','Admin\ContactController@Bulletin')->middleware('auth');
    Route::get('contact/inquiry','Admin\ContactController@Inquiry')->middleware('auth');
    
});

Auth::routes();

Route::get('/mypage', 'MypageController@index')->name('mypage');
