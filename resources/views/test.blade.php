@extends('layouts.app')
@section('title', 'IZANAGI')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                
                <div class="title m-b-md">
                    IZANAGI
                </div>
                    
                <div class="links">
                    <a href="{{ action('Admin\RequestController@Overwork') }}">残業申請</a>
                    <a href="{{ action('Admin\RequestController@Holiday') }}">休暇申請</a>
                    <a href="{{ action('MypageController@report') }}">週報提出</a>
                    <a href="{{ action('Admin\ContactController@Inquiry') }}">情報展開</a>
                    <a href="{{ action('Admin\ManageController@Key') }}">事務所鍵</a>
                </div>
                    
            </div>
        </div>
    </div>
@endsection