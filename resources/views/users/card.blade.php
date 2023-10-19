<div class="card border border-base-300 rounded-lg">
    <div class="card-body bg-base-200 text-4xl">
        <h2 class="card-title">{{ $user->name }}</h2>
    </div>
    <figure>
        @if($user->profile->icon_path)
        <src="storage/{{$user->profile->icon_path}}" alt="{{$user->name}}さんのアイコン" />
        @else
        <src="storage/images/fantasy_ocean_kraken.png" alt="クラーケン" />
        @endif
    </figure>
    <div class="card-body bg-white ">
        <p>{{ $user->name }}さんの自己紹介</p>
        <p>{{ $user->profile->profile_comment }}</p>
    </div>
    
    <div class="">
        @if($user->id===Auth::id())
        <form action="{{ route('profile.edit') }}">
            <button class="btn btn-ghost">編集</button>
        </form>
        @endif
    </div>
</div>
