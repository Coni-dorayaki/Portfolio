@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">連絡システム SUSANOO</div>
                
                <a href="{{ action('Admin\ContactController@Inquiry') }}">問い合わせ用フォーム</a>
                <a href="{{ action('Admin\ContactController@Bulletin') }}">連絡掲示板</a>
            　　
            </div>
        </div>
    </div>
</div>
@endsection
