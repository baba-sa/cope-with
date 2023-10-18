@extends('layouts.app')
@section('content')
<div class="bg-gray-50 my-20">
    <div class="m-4 p-4 w-full bg-yellow-50">
        <h2 class="text-xl font-bold">
            フィルタとソート
        </h2>
    </div>
    <div>
        @include('copings.filter_and_sort')
    </div>
    <div class="m-4 p-4 w-full bg-yellow-50">
        <h2 class="text-xl font-bold">
            アクション一覧
        </h2>
    </div>
    <ul class="flex flex-wrap">
        @foreach( $copings as $coping )
        <li>
            <div class="flex">
                <div class="w-16">
                @if(Auth::user()->isMyAction($coping->id))
                <form method="POST" action="{{ route('my_action.add', $coping->id) }}">
                    @csrf
                    <button class="btn btn-outline btn-warning"
                        formaction="{{ route('my_action.remove', $coping->id) }}">
                        ☆
                    </button>
                </form>
                @else
                <form method="POST" action="{{ route('my_action.add', $coping->id) }}">
                    @csrf
                    <button class="btn btn-success"
                        formaction="{{ route('my_action.add', $coping->id) }}">
                        ☆
                    </button>
                </form>
                @endif
                </div>
                <div class="w-48">
                <form method="GET" action="{{ route('copings.show', $coping->id) }}">
                    @csrf
                    <button class="btn btn-ghost">
                        {{ $coping->action }}
                    </button>
                </form>
                </div>
                <div class="w-32">
                <p>{{ $coping->user->name }}</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection