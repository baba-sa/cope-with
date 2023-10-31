@extends('layouts.app')
@section('content')
<div>
    <div class="m-4 p-4 ">
        <form action="{{ route('stats.show') }}">
        @csrf
        @method("GET")
            <select name="coping_id" class="select select-bordered w-full max-w-xs">
                <option disabled selected>アクションを選択してください</option>
                @foreach($copings as $coping)
                <option value="{{$coping->id}}">{{$coping->action}}</option>
                @endforeach
            </select>
            <button class="btn bg-sango text-pale-orange hover:bg-matcha">フィルタ</button>
        </form>
    </div>
{{--     <div>
         <div class="stat">
            <div class="stat-figure text-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="stat-title">Today</div>
            <div class="stat-value">{{$today}}</div>
            <div class="stat-desc"></div>
          </div>
          
          <div class="stat">
            <div class="stat-figure text-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
            </div>
            <div class="stat-title">7 days</div>
            <div class="stat-value">{{$seven_days}}</div>
            <div class="stat-desc"></div>
          </div>
          
          <div class="stat">
            <div class="stat-figure text-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
            </div>
            <div class="stat-title">Whole of</div>
            <div class="stat-value">{{$whole}}</div>
            <div class="stat-desc"></div>
          </div>
    </div>
--}}
    <div class="m-4 p-4 ">
        <div class="stats shadow">
            {{--全期間のprantice件数--}}
            {{--上の総計パネルタップしたら集計対象期間が切り替わればいいよねー--}}
            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                    </svg>
                </div>
                <div class="stat-title">コーピング実施件数</div>
                <div class="stat-value">{{$count_practices}}</div>
                <div class="stat-desc"></div>
            </div>
            {{--全期間のmood変化平均--}}
            {{--上の総計パネルタップしたら集計対象期間が切り替わればいいよねー--}}
            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
            {{--上の総計パネルタップしたら集計対象期間が切り替わればいいよねー--}}
            @include('practices.practices', $practices)
        </div>
    </div>
    
</div>
@endsection