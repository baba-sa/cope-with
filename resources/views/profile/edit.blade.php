@extends('layouts.app')
@section('content')
    <div class="py-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-pink-orange shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-icon-and-bio')
                </div>
            </div>
        </div>
    </div>
@endsection

