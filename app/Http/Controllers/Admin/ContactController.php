<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 総合連絡画面の表示
    public function Home(){
        return view('admin.home.contact');
    }
    
    //掲示板の表示
    public function Bulletin(){
        return view('admin.contact.bulletin');
    }
    
     //問合せフォームの表示
    public function Inquiry(){
        return view('admin.contact.inquiry');
    }
}
