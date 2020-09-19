@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">申請システム AMATERAS</div>
                
                <a href="{{ action('Admin\RequestController@Overwork') }}">残業申請</a>
            　　<a href="{{ action('Admin\RequestController@Holiday') }}">休暇申請</a>
                
            </div>
        </div>
    </div>
</div>
@endsection
