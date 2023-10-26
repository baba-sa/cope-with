@extends('layouts.app')
@section('content')
<div>
    
    <div>
        <select class="select select-bordered w-full max-w-xs">
            <option disabled selected>アクションを選択してください</option>
            @foreach($copings as $coping)
            <option>{{$coping->name}}</option>
            @endforeach
        </select>
        <button>Filter!</button>
    </div>
    <div>
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
    <div>
        <div>
            {{--全期間のmood変化平均--}}
            {{--上の総計パネルタップしたら集計対象期間が切り替わればいいよねー--}}
            <div class="stat">
                <div class="stat-figure text-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                </div>
                <div class="stat-title">Mood Change</div>
                <div class="stat-value">{{$whole}}</div>
                <div class="stat-desc"></div>
            </div>
        </div>
        <div>ー
            {{--全期間のpractice一覧--}}
            {{--上の総計パネルタップしたら集計対象期間が切り替わればいいよねー--}}
            
        </div>
    </div>
    
</div>
@endsection