@extends('layouts.app')
@section('content')
<div class="bg-gray-50 my-20">
    <div class="my-4 p-4 w-full bg-yellow-50">
        <h2 class="text-xl font-bold">
            フィルタとソート
        </h2>
    </div>
    <div>
        @include('copings.filter_and_sort')
    </div>
    <div class="my-4 p-4 w-full bg-yellow-50">
        <h2 class="text-xl font-bold">
            アクション一覧
        </h2>
    </div>
    <ul class="flex flex-wrap">
        @foreach( $copings as $coping )
        <li class="p-2">
            <div class="flex">

                <div class="w-56">
                <form method="GET" action="{{ route('copings.show', $coping->id) }}">
                    @csrf
                    <button class="btn btn-ghost btn-sm normal-case">
                        {{ $coping->action }}
                    </button>
                </form>
                </div>
                <div class="w-24">
                <form method="GET" action="{{ route('users.show', $coping->user_id) }}">
                    @csrf
                    <button class="btn btn-ghost btn-sm normal-case">
                        {{ $coping->user->name }}
                    </button>
                </form>
                </div>
                
                <div class="w-40 ml-4 mr-10 hidden md:block">
                @if(Auth::user()->isMyAction($coping->id))
                <form method="post" action="{{ route('my_action.remove', $coping->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline btn-warning btn-sm" >
                        マイアクションから削除
                    </button>
                </form>
                @else
                <form method="POST" action="{{ route('my_action.add', $coping->id) }}">
                    @csrf
                    <button class="btn btn-success btn-sm" >
                        マイアクションに追加
                    </button>
                </form>
                @endif
                </div>
                <div class="md:hidden">
                @if(Auth::user()->isMyAction($coping->id))
                <form method="post" action="{{ route('my_action.remove', $coping->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline btn-warning btn-sm" >
                        -
                    </button>
                </form>
                @else
                <form method="POST" action="{{ route('my_action.add', $coping->id) }}">
                    @csrf
                    <button class="btn btn-success btn-sm" >
                        +
                    </button>
                </form>
                @endif
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection