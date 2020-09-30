@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">連絡システム SUSANOO</div>
                
                <a href="{{ action('Admin\ContactController@Inquiry') }}" role="button" class="btn btn-primary">問い合わせ用フォーム</a>
                <a href="{{ action('Admin\ContactController@Bulletin') }}" role="button" class="btn btn-primary">連絡掲示板</a>
            　　
            </div>
        </div>
    </div>
</div>
@endsection
