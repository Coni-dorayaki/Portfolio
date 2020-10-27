@extends('layouts.report')
@section('title', '週報提出ページ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>週報提出</h2>
                <form action="{{ action('MypageController@sendReport') }}" method="post" enctype="multipart/form-data">


                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="startday">行動報告</label>
                        <div class="col-md-4">
                            <input type="date" id="firstdate" class="form-control" name="days_1" value="{{ old('days_1') }}">
                            <div id="output"></div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="actionreport_1" value="{{ old('actionreport_1') }}">
                            <input type="text" class="form-control" name="actionreport_2" value="{{ old('actionreport_2') }}">
                            <input type="text" class="form-control" name="actionreport_3" value="{{ old('actionreport_3') }}">
                            <input type="text" class="form-control" name="actionreport_4" value="{{ old('actionreport_4') }}">
                            <input type="text" class="form-control" name="actionreport_5" value="{{ old('actionreport_5') }}">
                            <input type="text" class="form-control" name="actionreport_6" value="{{ old('actionreport_6') }}">
                            <input type="text" class="form-control" name="actionreport_7" value="{{ old('actionreport_7') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="topics">Topics</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="topics" rows="15">{{ old('topics') }}</textarea>
                        </div>
                    </div>
                    
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="提出">
                </form>
            </div>
        </div>
    </div>
@endsection