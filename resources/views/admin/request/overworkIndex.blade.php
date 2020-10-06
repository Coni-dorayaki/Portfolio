@extends('layouts.main')
@section('title', '残業申請履歴')

@section('content')
    <div class="container">
        <div class="row">
            <h2>残業申請履歴一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\RequestController@Overwork') }}" role="button" class="btn btn-primary">新規申請</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\RequestController@overIndex') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">申請日</label>
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
                                <th width="10%">開始時間</th>
                                <th width="10%">終了時間</th>
                                <th width="5%">残業時間A</th>
                                <th width="5%">残業時間B</th>
                                <th width="10%">残業場所</th>
                                <th width="10%">残業理由</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $overwork)
                                <tr>
                                    <th>{{ $overwork->id }}</th>
                                    <th>{{ $overwork->start }}</th>
                                    <th>{{ $overwork->end }}</th>
                                    <th>{{ $overwork->worktimeA }}</th>
                                    <th>{{ $overwork->worktimeB }}</th>
                                    <th>{{ $overwork->place }}</th>
                                    <th>{{ $overwork->reason }}</th>
                                </tr>
                                <div>
                                    <a href="{{ action('Admin\RequestController@overEdit', ['id' => $overwork->id]) }}">再申請</a>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection