@extends('layouts.app')

@section('content')
<div class="my-20">
    <div class="bg-gray-50 drawer drawer-end rounded-lg">
        <input id="drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <div class="collapse collapse-arrow">
                <input type="checkbox" name="accordion-1" checked="checked" />
                <div class="bg-yellow-50 collapse-title">
                    <h2 class="text-lg font-bold text-gray-800 antialiased">プラクティス登録</h2>
                </div>
                <div class="collapse-content">
                @include('practices.form')
                </div>
            </div>
            <div class="collapse collapse-arrow">
                <input type="checkbox" name="accordion-2" checked="checked" />
                <div class="bg-yellow-50 collapse-title">
                    <h2 class="text-lg font-bold text-gray-800 antialiased">みんなのプラクティス</h2>
                </div>
                <div class="collapse-content">
                @include('practices.practices', ['practices'=>$practices])
                </div>
            </div>
        </div>
        <div class="drawer-side">
            <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        
            @if(Auth::check())
            <div class="collapse collapse-arrow">
                <input type="checkbox" name="accordion-3" checked="checked" />
                <div class="bg-yellow-50 collapse-title">
                    <h2 class="text-lg font-bold text-gray-800 antialiased">マイアクション</h2>
                </div>
                <div class="collapse-content">
                @include('copings.copings', ['copings'=>$mycopes])
                </div>
            </div>
            @endif
            <div class="collapse collapse-arrow">
                <input type="checkbox" name="accordion-4" checked="checked" />
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
