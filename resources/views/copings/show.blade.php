@extends('layouts.app')

@section('content')
<div>
    <div>
        <p>アクション：{{$coping->action}}</p>
        <p>　作成者：<a href="{{ route('users.show', $coping->user_id) }}">{{$coping->user->name}}</a></p>
        <p>　作成日：{{$coping->created_at}}</p>
    </div>
    <div>
        @include('practices.practices', ['practices' => $practices,])
    </div>
</div>
@endsection