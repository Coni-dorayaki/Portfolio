<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    // 総合管理画面の表示
    public function Home(){
        return view('admin.home.manage');
    }
    
    //鍵管理の表示
    public function Key(){
        return view('admin.management.key');
    }
    
    
    //棚管理の表示
    public function Shelf(){
        return view('admin.management.shelf');
    }
    
}
