@extends('layouts.main')
@section('title', '週報提出履歴')

@section('content')
    <div class="container">
        <div class="row">
            <h2>週報提出履歴一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('MypageController@report') }}" role="button" class="btn btn-primary">新規提出</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('MypageController@reportIndex') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">週開始日</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">週開始日</th>
                                <th width="30%">行動報告</th>
                                <th width="30%">Topics</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $report)
                                <tr>
                                    <th>{{ $report->id }}</th>
                                    <th>{{ $report->startday }}</th>
                                    <th>{{ $report->actionreport }}</th>
                                    <th>{{ $report->topics }}</th>
                                </tr>
                                <div>
                                    <a href="{{ action('MypageController@reportEdit', ['id' => $report->id]) }}">再提出</a>
                                </div>
                                <div>
                                    <a href="{{ action('MypageController@reportEdit', ['id' => $report->id]) }}">表示</a>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection