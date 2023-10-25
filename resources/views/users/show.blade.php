@extends('layouts.app')
@section('content')

<div class="bg-pink-orange rounded-t-lg md:grid md:grid-cols-12">
    <div class="m-4 w-84 rounded-lg md:col-span-3">
        @include('users.card', ['user'=> $user, ])
    </div>
    <div class="md:col-span-9 m-4">
        <div class=" p-4 bg-dark-brown text-pale-orange text-xl font-bold rounded-t-lg">
            <h2>{{$user->name}}さんのマイアクション</h2>
        </div>
        <div class="p-4 h-auto bg-pale-orange rounded-b-lg">
            @include('copings.copings', ['copings' => $copings, ])
        </div>
    </div>
</div>
<div class="pb-20 bg-pink-orange rounded-t-lg ">
    <div class="p-4 bg-dark-brown text-pale-orange text-xl font-bold rounded-t-lg">
        <h2>{{$user->name}}さんの実施記録</h2>
    </div>
    <div>
        @include('practices.practices', ['practices' => $practices, ])
    </div>
</div>
@endsection