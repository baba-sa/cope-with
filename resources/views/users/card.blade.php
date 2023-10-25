<div class="card border border-base-300 rounded-lg">
    <div class="card-body bg-dark-brown text-4xl rounded-t-lg">
        <h2 class="card-title text-pale-orange">{{ $user->name }}</h2>
    </div>
    <div class="card-body bg-pale-orange">
        <div>
            <label class="label-text text-dark-brown">{{ $user->name }}さんの自己紹介</label>
        </div>
        <div class="chat chat-start">
            <div class="chat-image avatar">
                <div class="w-20 rounded-full">
                    @if(isset($user->profile->icon_path))
                    <img src="/storage/{{$user->profile->icon_path}}" alt="{{$user->name}}さんのアイコン" >
                    @else
                    <img src="/storage/images/fantasy_ocean_kraken.png" alt="クラーケン" >
                    @endif
                </div>
            </div>
        
            <div class="chat-bubble bg-pink-orange text-dark-brown">{{ $user->profile->profile_comment }}</div>
        </div>
    </div>
    <div class="flex justify-end bg-matcha rounded-b-lg">
        @if($user->id===Auth::id())
        <form action="{{ route('profile.edit') }}">
            <button class="btn btn-ghost text-pale-orange">編集</button>
        </form>
        @endif
    </div>
</div>
