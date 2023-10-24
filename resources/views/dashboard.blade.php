@extends('layouts.app')

@section('content')
<div class="my-20">
    <div class="bg-gray-50 rounded-lg">
        <div class="">
            <div class="collapse collapse-arrow">
                <input type="checkbox" name="accordion-1" checked="checked" />
                <div class="bg-yellow-50 collapse-title">
                    <h2 class="text-lg font-bold text-gray-800 antialiased">実施記録登録</h2>
                </div>
                <div class="collapse-content">
                @include('practices.form')
                </div>
            </div>
            <div class="collapse collapse-arrow">
                <input type="checkbox" name="accordion-2" checked="checked" />
                <div class="bg-yellow-50 collapse-title">
                    <h2 class="text-lg font-bold text-gray-800 antialiased">みんなの実施記録</h2>
                </div>
                <div class="collapse-content">
                @include('practices.practices', ['practices' => $practices])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
