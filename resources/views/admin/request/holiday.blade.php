@extends('layouts.main')
@section('title', '休暇申請用フォーム')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>新規休暇申請</h2>
                <form action="{{ action('Admin\RequestController@sendHoliday') }}" method="post" enctype="multipart/form-data">


                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="requestday">申請日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="requestday" value="{{ old('requestday') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="appclass">申請区分</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="appclass" value="{{ old('appclass') }}">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="start">開始時間</label>
                        <div class="col-md-10">
                            <input type="time" class="form-control" name="start" value="{{ old('start') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="end">終了時間</label>
                        <div class="col-md-10">
                            <input type="time" class="form-control" name="end" value="{{ old('end') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="alltime">申請時間</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="alltime" value="{{ old('alltime') }}">
                        </div>
                    </div>
                    
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
        </div>
    </div>
@endsection