@extends('layouts.main')
@section('title', 'マイページ')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ダッシュボード</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class='links_2'>
                    <a href="{{ action('Admin\RequestController@overIndex') }}" role="button" class="btn btn-primary linkbtn">残業申請一覧</a>
                    <a href="{{ action('Admin\RequestController@holiIndex') }}" role="button" class="btn btn-primary linkbtn">休暇申請一覧</a>
                    <a href="{{ action('MypageController@reportIndex') }}" role="button" class="btn btn-primary linkbtn">週報提出一覧</a>
                    <a href="{{ action('Admin\ContactController@inquIndex') }}" role="button" class="btn btn-primary linkbtn">情報展開一覧</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
