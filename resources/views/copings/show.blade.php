@extends('layouts.app')

@section('content')
<div class="bg-gray-50 my-16 h-screen">
    <div class="bg-white m-4 p-4">
        <ul>
            <li>アクション：{{$coping->action}}</li>
            <li>　作成者：<a class="link" href="{{ route('users.show', $coping->user_id) }}">{{$coping->user->name}}</a></li>
            <li>　作成日：{{$coping->created_at}}</li>
        </ul>
        @include('copings.add_my_action')
    </div>
    <div>
        @include('practices.form', ['copings' => [$coping],])
    </div>
    <divclass="p-4">
        @include('practices.practices', ['practices' => $practices,])
    </div>
</div>
@endsection