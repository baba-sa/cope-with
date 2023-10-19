@extends('layouts.app')

@section('content')
<div class="md:grid md:grid-cols-9 md:gap-4 my-20">
    <div class="col-span-6 bg-gray-50">
        <div class="collapse collapse-arrow">
            <input type="checkbox" name="my-accordion-1" checked="checked" />
            <div class="bg-yellow-50 collapse-title">
                <h2 class="text-lg font-bold text-gray-800 antialiased">プラクティス登録</h2>
            </div>
            <div class="collapse-content">
            @include('practices.form')
            </div>
        </div>
        <div class="collapse collapse-arrow">
            <input type="checkbox" name="my-accordion-1" checked="checked" />
            <div class="bg-yellow-50 collapse-title">
                <h2 class="text-lg font-bold text-gray-800 antialiased">みんなのプラクティス</h2>
            </div>
            <div class="collapse-content">
            @include('practices.practices', ['practices'=>$practices])
            </div>
        </div>
    </div>
    <div class="col-span-3 bg-gray-50">
        
        @if(Auth::check())
        <div class="collapse collapse-arrow">
            <input type="checkbox" name="my-accordion-1" checked="checked" />
            <div class="bg-yellow-50 collapse-title">
                <h2 class="text-lg font-bold text-gray-800 antialiased">マイアクション</h2>
            </div>
            <div class="collapse-content">
            @include('copings.copings', ['copings'=>$mycopes])
            </div>
        @endif
        </div>
        <div class="collapse collapse-arrow">
            <input type="checkbox" name="my-accordion-1" checked="checked" />
            <div class="bg-yellow-50 collapse-title">
                <h2 class="text-lg font-bold text-gray-800 antialiased">新着アクション</h2>
            </div>
            <div class="collapse-content">
            @include('copings.copings', ['copings'=>$copings])
            </div>
        </div>
    </div>
</div>

@endsection
