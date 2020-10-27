@extends('layouts.main')
@section('title', '問い合わせフォーム')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>問い合わせフォーム</h2>
                <form action="{{ action('Admin\ContactController@sendInquiry') }}" method="post" enctype="multipart/form-data">


                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="companyname">会社名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="companyname" value="{{ old('companyname') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="name">担当者名</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="telnumber">電話番号</label>
                        <div class="col-md-10">
                            <input type="tel" class="form-control" name="telnumber" value="{{ old('telnumber') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="document">添付資料</label>
                        <div class="col-md-10">
                            <input type="file" name="document" value="{{ old('document') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">問合せ内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
        </div>
    </div>
@endsection