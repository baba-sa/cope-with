<div class="card border border-base-300 rounded-lg">
    <div class="card-body bg-base-200 text-4xl">
        <h2 class="card-title">{{ $user->name }}</h2>
    </div>
    <div class="card-body bg-white">
        <div>
            <label class="label-text">{{ $user->name }}さんの自己紹介</label>
        </div>
        <div  class="chat chat-start">
            <div class="chat-image avatar">
                <div class="w-20 rounded-full">
                    @if(isset($user->profile->icon_path))
                    <img src="/storage/{{$user->profile->icon_path}}" alt="{{$user->name}}さんのアイコン" >
                    @else
                    <img src="/storage/images/fantasy_ocean_kraken.png" alt="クラーケン" >
                    @endif
                </div>
            </div>
        
            <div class="chat-bubble bg-gray-50 text-gray-800">{{ $user->profile->profile_comment }}</div>
        </div>
    </div>
    <div class="">
        @if($user->id===Auth::id())
        <form action="{{ route('profile.edit') }}">
            <button class="btn btn-ghost">編集</button>
        </form>
        @endif
    </div>
</div>
