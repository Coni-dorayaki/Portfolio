<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Overwork;

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
    
    //残業申請フォーム送信処理
    public function sendOverwork(Request $request){
      // Varidationを行う
      $this->validate($request, Overwork::$rules);
      
      $overwork = new Overwork;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // データベースに保存する
      $overwork->fill($form);
      $overwork->save();
      
      return redirect('admin/request/overwork');
    }
    
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Overwork::where('requestday', $cond_title)->get();
      } else {
          // それ以外はすべての情報を取得する
          $posts = Overwork::all();
      }
      return view('admin.request.overworkIndex', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

}
