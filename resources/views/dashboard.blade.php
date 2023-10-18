@extends('layouts.app')

@section('content')
<div>
    <image src="storage/images/FBPAKU3308_TP_V.jpg"></image>
</div>
<div class="md:grid md:grid-cols-9 md:gap-4 mb-12">
    <div class="col-span-6 bg-gray-50">
        <div class="bg-yellow-50">
            <h2 class="text-lg font-bold text-gray-800 antialiased">プラクティス登録</h2>
        </div>
        @include('practices.form')
        <div class="bg-yellow-50">
            <h2 class="text-lg font-bold text-gray-800 antialiased">みんなのプラクティス</h2>
        </div>
        @include('practices.practices', ['practices'=>$practices])
    </div>
    <div class="col-span-3 bg-gray-50">
        @if(Auth::check())
        <div class="bg-yellow-50">
            <h2 class="text-lg font-bold text-gray-800 antialiased">マイアクション</h2>
        </div>
        @include('copings.copings', ['copings'=>$mycopes])
        @endif
        <div class="bg-yellow-50">
            <h2 class="text-lg font-bold text-gray-800 antialiased">新着アクション</h2>
        </div>
        @include('copings.copings', ['copings'=>$copings])
    </div>
</div>

@endsection
