@extends('layouts.main')
@section('title', '社員一覧')

@section('content')
<div class="container">
            <div class="list-overwork col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="5%">社員ID</th>
                                <th width="10%">名前</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th>{{ $user->id }}</th>
                                    <th>{{ $user->name }}</th>
                                @endforeach
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
