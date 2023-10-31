@extends('layouts.app')
@section('content')
<div class="p-4 rounded-lg bg-pink-orange">
    <form action="{{ route('stats.show') }}">
        @csrf
        @method("GET")
        <div class="m-4 p-4 rounded-lg bg-pale-orange">
            <div>
                <select name="coping_id" class="select select-bordered w-full max-w-xs">
                    <option disabled selected>アクションを選択してください</option>
                    @foreach($copings as $coping)
                    <option value="{{$coping->id}}">{{$coping->action}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-center">
                <button class="btn bg-sango text-pale-orange hover:bg-matcha">フィルタ</button>
            </div>
            
        </div>
    </form>

    <div class="m-4 p-4 rounded-lg bg-pale-orange">
        <div class="tabs tabs-boxed p-4 bg-pale-orange">
            <a id="tab-today" class="kikan tab tab-lg " onclick="changeActiveTab(event, 'tab-today')">今日</a> 
            <a id="tab-sevendays" class="kikan tab tab-lg onclick="changeActiveTab(event, 'tab-sevendays')"">7日間</a> 
            <a id="tab-whole" class="kikan tab tab-lg onclick="changeActiveTab(event, 'tab-whole')"tab-active">全期間</a>
        </div>
        <div class="m-4 stats shadow">
            {{--全期間のpractice件数--}}
            <div class="stat ">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#D96B62" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                    </svg>
                </div>
                <div class="stat-title">コーピング実施件数</div>
                <div class="stat-value">{{$count_practices}}</div>
                <div class="stat-desc"></div>
            </div>
            {{--全期間のmood変化平均--}}
            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#D96B62" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <div class="stat-title">気分変化の平均</div>
                <div class="stat-value">{{$average_diff_moods}}</div>
                <div class="stat-desc"></div>
            </div>
        </div>
        <div>
            {{--全期間のpractice一覧--}}
            @include('practices.practices', $practices)
        </div>
    </div>
    
</div>
<div></div>
<script>
    function changeActiveTab(event,tabID){
    let element = event.target;
    while(element.nodeName !== "A"){
      element = element.parentNode;
    }
    
{{--    let prevElement = element.previousElementSibling;
    let nextElement = element.nextElementSibling;

    prevElement.classList.remove("tab-active");
    nextElement.classList.remove("tab-active");
--}}
    element.classList.add("tab-active");

  }

</script>
@endsection
