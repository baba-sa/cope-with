@extends('layouts.app')
@section('content')
<div class="bg-pink-orange pb-20" >
    <div id="tabs-id" class="">
        <div class="tabs">
            <a class="tab tab-lifted tab-active text-dark-brown font-bold hover:bg-sango hover:text-pale-orange" onclick="changeActiveTab(event,'tab-kensaku')">
                検索
            </a>
            <a class="tab tab-lifted text-dark-brown font-bold hover:bg-sango hover:text-pale-orange" onclick="changeActiveTab(event,'tab-touroku')">
                登録
            </a>
        </div>
    </div>
    <div class="tab-content">
        <div id="tab-kensaku" class="">
            <div class=" p-4 w-full bg-dark-brown">
                <h2 class="text-xl font-bold text-pale-orange">
                    フィルタとソート
                </h2>
            </div>
            <div>
                @include('copings.filter_and_sort')
            </div>
        </div>
        <div id="tab-touroku" class="hidden">
            @include('copings.form')
        </div>
    </div>
    
    <div class="my-4 p-4 w-full bg-dark-brown">
        <h2 class="text-xl font-bold text-pale-orange">
            アクション一覧
        </h2>
    </div>
    <ul class="flex flex-wrap mx-4">
        @foreach( $copings as $coping )
        <li class="m-1">
            <div class="flex p-1 bg-pale-orange text-dark-brown rounded">

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
                @include('copings.add_my_action', $coping)
                </div>
                <div class="md:hidden">
                @if(Auth::user()->isMyAction($coping->id))
                <form method="post" action="{{ route('my_action.remove', $coping->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline text-sango btn-sm" >
                        -
                    </button>
                </form>
                @else
                <form method="POST" action="{{ route('my_action.add', $coping->id) }}">
                    @csrf
                    <button class="btn bg-matcha btn-sm" >
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
<div></div>
<script type="text/javascript">
  function changeActiveTab(event,tabID){
    let element = event.target;
    while(element.nodeName !== "A"){
      element = element.parentNode;
    }
    let hiddenTabId = 'tab-touroku';
    if(tabID=='tab-touroku'){
        hiddenTabId = 'tab-kensaku'
    }
    
    let nextElement = element.previousElementSibling;
    if(!nextElement){
        nextElement = element.nextElementSibling;
    }
    
    nextElement.classList.remove("tab-active");
    document.getElementById(hiddenTabId).classList.remove("blocd");
    document.getElementById(hiddenTabId).classList.add("hidden");
    
    element.classList.add("tab-active");
    document.getElementById(tabID).classList.remove("hidden");
    document.getElementById(tabID).classList.add("block");
  }
  
</script>
@endsection