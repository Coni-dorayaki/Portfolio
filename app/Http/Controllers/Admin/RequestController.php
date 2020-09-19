<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    // 総合申請画面の表示
    public function Home(){
        return view('admin.home.request');
    }
    
    //残業申請画面の表示
    public function Overwork(){
        return view('admin.request.overwork');
    }
    
     //有給申請画面の表示
    public function Holiday(){
        return view('admin.request.holiday');
    }
}
