@extends('layouts.app')
@section('title', 'IZANAGI')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mainblock">
                
                <h1 class="maintitle">IZANAGI</h1>
                    
                <div class="links">
                    <a href="{{ action('Admin\RequestController@Overwork') }}" role="button" class="btn btn-primary titlebtn">残業申請</a>
                    <a href="{{ action('Admin\RequestController@Holiday') }}" role="button" class="btn btn-primary titlebtn">休暇申請</a>
                    <a href="{{ action('MypageController@report') }}" role="button" class="btn btn-primary titlebtn">週報提出</a>
                    <a href="{{ action('Admin\ContactController@Inquiry') }}" role="button" class="btn btn-primary titlebtn">情報展開</a>
                    <a href="{{ action('Admin\ManageController@Key') }}" role="button" class="btn btn-primary titlebtn">事務所鍵</a>
                </div>
                    
            </div>
        </div>
    </div>
@endsection