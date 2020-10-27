<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Overwork;
use App\Holiday;

class RequestController extends Controller
{
    
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
      $overwork->user_name = $request->user()->name;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // データベースに保存する
      $overwork->fill($form);
      $overwork->save();
      
      return redirect('admin/overwork');
    }
    
    //残業申請内容の一覧
    public function overIndex(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts_work = Overwork::where('requestday', $cond_title)->get();
      } else {
          // それ以外はすべての情報を取得する
          $posts_work = Overwork::all();
      }
      return view('admin.request.overworkIndex', ['posts_work' => $posts_work, 'cond_title' => $cond_title]);
  }
  
  public function overEdit(Request $request)
  {
      // News Modelからデータを取得する
      $overwork = Overwork::find($request->id);
      if (empty($overwork)) {
        abort(404);    
      }
      return view('admin.request.overworkEdit', ['overwork_form' => $overwork]);
  }


  public function overUpdate(Request $request)
  {
      // Validationをかける
      $this->validate($request, Overwork::$rules);
      // News Modelからデータを取得する
      $overwork = Overwork::find($request->id);
      // 送信されてきたフォームデータを格納する
      $overwork_form = $request->all();
      unset($overwork_form['_token']);

      // 該当するデータを上書きして保存する
      $overwork->fill($overwork_form)->save();

      return redirect('admin/overwork');
  }
  
  //休暇申請の送信処理
    public function sendHoliday(Request $request){
      // Varidationを行う
      $this->validate($request, Holiday::$rules);
      
      $holiday = new Holiday;
      $holiday->user_name = $request->user()->name;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // データベースに保存する
      $holiday->fill($form);
      $holiday->save();
      
      return redirect('admin/holiday');
    }
    
    //休暇申請内容の一覧
    public function holiIndex(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Holiday::where('requestday', $cond_title)->get();
      } else {
          // それ以外はすべての情報を取得する
          $posts = Holiday::all();
      }
      return view('admin.request.holidayIndex', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
  public function holiEdit(Request $request)
  {
      // News Modelからデータを取得する
      $holiday = Holiday::find($request->id);
      if (empty($holiday)) {
        abort(404);    
      }
      return view('admin.request.holidayEdit', ['holiday_form' => $holiday]);
  }


  public function holiUpdate(Request $request)
  {
      // Validationをかける
      $this->validate($request, Holiday::$rules);
      // News Modelからデータを取得する
      $holiday = Holiday::find($request->id);
      // 送信されてきたフォームデータを格納する
      $holiday_form = $request->all();
      unset($holiday_form['_token']);

      // 該当するデータを上書きして保存する
      $holiday->fill($holiday_form)->save();

      return redirect('admin/holiday');
  }
  

}
