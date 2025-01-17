@extends('layouts.main')
@section('title', '週報表示')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>週報</h2>


                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="startday">週開始日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="requestday" value="{{ $report_form->id }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="actionreport">行動報告</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="actionreport" rows="15">{{ $report_form->id }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="topics">Topics</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="topics" rows="15">{{ $report_form->id }}</textarea>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
@endsection