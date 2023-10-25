@extends('layouts.app')

@section('content')
<div class="pb-20">
    <div class="bg-pink-orange rounded-xl">
        <div class="">
            <div class="collapse collapse-arrow">
                <input type="checkbox" name="accordion-1" checked="checked" />
                <div class="bg-dark-brown collapse-title">
                    <h2 class="text-lg font-bold text-pale-orange antialiased">実施記録登録</h2>
                </div>
                <div class="collapse-content">
                @include('practices.form')
                </div>
            </div>
            <div class="collapse collapse-arrow">
                <input type="checkbox" name="accordion-2" checked="checked" />
                <div class="bg-dark-brown collapse-title">
                    <h2 class="text-lg font-bold text-pale-orange antialiased">みんなの実施記録</h2>
                </div>
                <div class="collapse-content">
                @include('practices.practices', ['practices' => $practices])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
