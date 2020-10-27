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
            <div class="list-overwork col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">申請者</th>
                                <th width="12%">申請日</th>
                                <th width="10%">開始時間</th>
                                <th width="10%">終了時間</th>
                                <th width="10%">残業時間</th>
                                <th width="10%">残業場所</th>
                                <th width="20%">残業理由</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($posts_work as $overwork)
                                <tr>
                                    <th>{{ $overwork->user_name }}</th>
                                    <td>{{ $overwork->requestday }}</td>
                                    <td>{{ $overwork->start }}</td>
                                    <td>{{ $overwork->end }}</td>
                                    <td>{{ $overwork->worktime }}</td>
                                    <td>{{ $overwork->place }}</td>
                                    <td>{{ $overwork->reason }}</td>
                                    <td>
                                        <div>
                                             <a href="{{ action('Admin\RequestController@overEdit', ['id' => $overwork->id]) }}">再申請</a>
                                        </div>
                                    </td>
                                    @endforeach
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection