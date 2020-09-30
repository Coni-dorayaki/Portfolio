@extends('layouts.app')

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

                    {{ __('ログインできました！') }}
                    
                </div>
                <div>
                    <a href="{{ action('MypageController@report') }}" role="button" class="btn btn-primary">週報提出</a>
                </div>
                <div>
                    <a href="{{ action('MypageController@reportIndex') }}" role="button" class="btn btn-primary">週報一覧</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
