<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Report;

class MypageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('mypage');
    }
    
    public function report()
    {
        return view('admin/mypage/report');
    }
    
    //週報提出処理
    public function sendReport(Request $request){
      // Varidationを行う
      $this->validate($request, Report::$rules);
      
      $report = new Report;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // データベースに保存する
      $report->fill($form);
      $report->save();
      
      return redirect('mypage/report');
    }
    
    //提出週報の一覧
    public function reportIndex(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Report::where('startday', $cond_title)->get();
      } else {
          // それ以外はすべての情報を取得する
          $posts = Report::all();
      }
      return view('admin.mypage.reportIndex', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
  public function reportEdit(Request $request)
  {
      // News Modelからデータを取得する
      $report = Report::find($request->id);
      if (empty($report)) {
        abort(404);    
      }
      return view('admin.mypage.reportEdit', ['report_form' => $report]);
  }


  public function reportUpdate(Request $request)
  {
      // Validationをかける
      $this->validate($request, Report::$rules);
      // News Modelからデータを取得する
      $report = Report::find($request->id);
      // 送信されてきたフォームデータを格納する
      $report_form = $request->all();
      unset($report_form['_token']);

      // 該当するデータを上書きして保存する
      $report->fill($report_form)->save();

      return redirect('admin/report');
  }
    
}
