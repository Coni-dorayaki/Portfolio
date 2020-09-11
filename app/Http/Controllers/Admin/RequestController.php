<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    //残業申請画面の表示
    public function reqOver(){
        return view('admin.overwork.request');
    }
    
     //有給申請画面の表示
    public function holiOver(){
        return view('admin.holiday.request');
    }
}
