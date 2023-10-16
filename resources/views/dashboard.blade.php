@extends('layouts.app')

@section('content')

<div class="md:grid md:grid-cols-9 md:gap-4">
    <div class="col-span-6">
        <h2>プラクティス登録</h2>
        @include('practices.form')
        <h2>みんなのプラクティス</h2>
        @include('practices.practices', ['practices'=>$practices])
    </div>
    <div class="col-span-3">
{{--        <h2>アクション登録</h2>
        @include('copings.form')
--}}
        <h2>マイアクション</h2>
        @include('copings.copings', ['copings'=>$mycopes])
        <h2>新着アクション</h2>
        @include('copings.copings', ['copings'=>$copings])
    </div>
</div>

@endsection
