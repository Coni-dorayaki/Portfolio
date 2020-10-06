@extends('layouts.main')
@section('title', '残業再申請用フォーム')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>残業再申請</h2>
                <form action="{{ action('Admin\RequestController@overUpdate') }}" method="post" enctype="multipart/form-data">


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
                            <input type="date" class="form-control" name="requestday" value="{{ $overwork_form->requestday }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="start">開始時間</label>
                        <div class="col-md-10">
                            <input type="time" class="form-control" name="start" value="{{ $overwork_form->start }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="end">終了時間</label>
                        <div class="col-md-10">
                            <input type="time" class="form-control" name="end" value="{{ $overwork_form->end }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="worktimeA">残業時間A</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="worktimeA" value="{{ $overwork_form->worktimeA }}">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="worktimeB">残業時間B</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="worktimeB" value="{{ $overwork_form->worktimeB }}">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="worktimeC">残業時間C</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="worktimeC" value="{{ $overwork_form->worktimeC }}">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="worktimeD">残業時間D</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="worktimeD" value="{{ $overwork_form->worktimeD }}">   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="place">残業場所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="place" value="{{ $overwork_form->place }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="reason">残業理由</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="reason" value="{{ $overwork_form->reason }}">
                        </div>
                    </div>
                    
                   <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $overwork_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="再送信">
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection