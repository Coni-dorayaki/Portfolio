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
    //Home処理
    Route::get('home/request','Admin\RequestController@Home');
    Route::get('home/manage','Admin\ManageController@Home');
    Route::get('home/contact','Admin\ContactController@Home');
    //残業申請処理
    Route::get('request/overwork','Admin\RequestController@Overwork');
    Route::post('request/overwork', 'Admin\RequestController@sendOverwork');
    Route::get('overwork', 'Admin\RequestController@overIndex');
    Route::get('overwork/edit', 'Admin\RequestController@overEdit');
    Route::post('overwork/edit', 'Admin\RequestController@overUpdate');
    //休暇申請処理
    Route::get('request/holiday','Admin\RequestController@Holiday');
    Route::post('request/holiday', 'Admin\RequestController@sendHoliday');
    Route::get('holiday', 'Admin\RequestController@holiIndex');
    Route::get('holiday/edit', 'Admin\RequestController@holiEdit');
    Route::post('holiday/edit', 'Admin\RequestController@holiUpdate');
    //管理処理
    Route::get('management/key','Admin\ManageController@Key');
    Route::get('management/shelf','Admin\ManageController@Shelf');
    Route::get('contact/bulletin','Admin\ContactController@Bulletin');
    Route::get('contact/inquiry','Admin\ContactController@Inquiry');
    //問合せフォーム処理
    Route::post('contact/inquiry', 'Admin\ContactController@sendInquiry');
    Route::get('inquiry', 'Admin\ContactController@inquIndex');
});

Route::group(['prefix' => 'mypage','middleware' => 'auth'],function() {
   Route::get('main', 'MypageController@index');
   Route::get('report/new', 'MypageController@report');
   Route::post('report/new', 'MypageController@sendReport');
   Route::get('report', 'MypageController@reportIndex');
   Route::get('report/edit', 'MypageController@reportEdit');
   Route::post('report/edit', 'MypageController@reportUpdate');
});

Auth::routes();
