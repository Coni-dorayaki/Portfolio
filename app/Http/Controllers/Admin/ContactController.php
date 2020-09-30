<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inquiry;

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
    
    //問合せフォームの送信処理
    public function sendInquiry(Request $request){
      // Varidationを行う
      $this->validate($request, Inquiry::$rules);
      
      $inquiry = new Inquiry;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // データベースに保存する
      $inquiry->fill($form);
      $inquiry->save();
      
      return redirect('admin/inquiry');
    }
    
    //問合フォーム送信履歴の一覧
    public function inquIndex(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Inquiry::where('companyname', $cond_title)->get();
      } else {
          // それ以外はすべての情報を取得する
          $posts = Inquiry::all();
      }
      return view('admin.contact.inquiryIndex', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
 
}
