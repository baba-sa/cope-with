@extends('layouts.app')

@section('content')
<div class="pb-20 bg-sango rounded-lg">
    <div class="bg-dark-brown p-4 text-xl text-pale-orange rounded-t-lg font-bold">
        <h2>アクション詳細</h2>
    </div>
    <div class="bg-pale-orange text-dark-brown m-4 p-4 rounded-lg">
        <ul class="my-4">
            <li>アクション：{{$coping->action}}</li>
            <li>　作成者：<a class="link" href="{{ route('users.show', $coping->user_id) }}">{{$coping->user->name}}</a></li>
            <li>　作成日：{{$coping->created_at}}</li>
        </ul>
        <div class="flex justify-center">
            @include('copings.add_my_action')
        </div>
    </div>
    <div >
        @include('practices.form', ['copings' => [$coping], 'page' => 'copings.show'])
    </div>
    <div >
        @include('practices.practices', ['practices' => $practices,])
    </div>
</div>
@endsection