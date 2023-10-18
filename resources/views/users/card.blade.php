<div class="card border border-base-300 rounded-lg">
    <div class="card-body bg-base-200 text-4xl">
        <h2 class="card-title">{{ $user->name }}</h2>
    </div>
    <figure>
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
    </figure>
    <div class="card-body bg-white ">
        <p>{{ $user->name }}さんの自己紹介</p>
    </div>
    <div class="">
        <button class="btn btn-ghost">編集</button>
    </div>
</div>
