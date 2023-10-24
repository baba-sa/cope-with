@extends('layouts.app')

@section('content')
<div class="bg-gray-50 my-20 ">
    <div class="bg-yellow-50 p-4 text-xl font-bold">
        <h2>アクション詳細</h2>
    </div>
    <div class="bg-white m-4 p-4">
        <ul class="my-4">
            <li>アクション：{{$coping->action}}</li>
            <li>　作成者：<a class="link" href="{{ route('users.show', $coping->user_id) }}">{{$coping->user->name}}</a></li>
            <li>　作成日：{{$coping->created_at}}</li>
        </ul>
        <div class="flex justify-center">
            @include('copings.add_my_action')
        </div>
    </div>
    <div class="">
        @include('practices.form', ['copings' => [$coping], 'page' => 'copings.show'])
    </div>
    <div class="p-4">
        @include('practices.practices', ['practices' => $practices,])
    </div>
</div>
@endsection