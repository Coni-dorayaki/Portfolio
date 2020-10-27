@extends('layouts.main')
@section('title', '休暇申請履歴')

@section('content')
    <div class="container">
        <div class="row">
            <h2>休暇申請履歴一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\RequestController@Holiday') }}" role="button" class="btn btn-primary">新規申請</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\RequestController@holiIndex') }}" method="get">
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
                                <th width="15%">申請者</th>
                                <th width="15%">申請日</th>
                                <th width="15%">申請区分</th>
                                <th width="15%">開始時間</th>
                                <th width="15%">終了時間</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $holiday)
                                <tr>
                                    <th>{{ $holiday->user_name }}</th>
                                    <td>{{ $holiday->requestday }}</th>
                                    <td>{{ $holiday->appclass }}</th>
                                    <td>{{ $holiday->start }}</th>
                                    <td>{{ $holiday->end }}</th>
                                    <td>
                                        <div>
                                             <a href="{{ action('Admin\RequestController@holiEdit', ['id' => $holiday->id]) }}">再申請</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection