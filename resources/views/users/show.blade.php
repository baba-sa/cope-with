@extends('layouts.app')
@section('content')

<div class="flex">
    <div class="">
        @include('users.card', ['user'=> $user, ])
    </div>
    <div class="">
        @include('copings.copings', ['copings' => $copings, ])
    </div>
</div>
<div>
    <div>
        @include('practices.practices', ['practices' => $practices, ])
    </div>
</div>

@endsection