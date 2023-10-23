@extends('layouts.app')
@section('content')

<div class="flex bg-gray-50 mt-12">
    <div class="m-4 p-4 w-84">
        @include('users.card', ['user'=> $user, ])
    </div>
    <div class="m-4 p-4">
        <div class="hidden p-4 bg-yellow-50 text-xl font-bold">
            <h2>{{$user->name}}さんのマイアクション</h2>
        </div>
        @include('copings.copings', ['copings' => $copings, ])
    </div>
</div>
<div class="bg-gray-50 mb-12 p-4">
    <div class="p-4 bg-yellow-50 text-xl font-bold">
        <h2>{{$user->name}}さんの実施記録</h2>
    </div>
    <div>
        @include('practices.practices', ['practices' => $practices, ])
    </div>
</div>

@endsection