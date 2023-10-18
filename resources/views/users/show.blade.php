@extends('layouts.app')
@section('content')

<div class="flex bg-gray-50 mt-12">
    <div class="m-4 p-4 w-72">
        @include('users.card', ['user'=> $user, ])
    </div>
    <div class="m-4 p-4">
        @include('copings.copings', ['copings' => $copings, ])
    </div>
</div>
<div class="bg-gray-50 mb-12 p-4">
    <div>
        @include('practices.practices', ['practices' => $practices, ])
    </div>
</div>

@endsection