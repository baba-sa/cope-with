<div class="h-auto bg-pink-orange rounded-lg">
    <div class="bg-dark-brown text-pale-orange p-4 rounded-t-lg">
        <h2 class="text-xl font-bold antialiased ">新規アクション登録</h2>
    </div>
    <form method="POST" action="{{ route('copings.store') }}">
        @csrf
        <div class="form-control rounded-lg m-4 p-4 bg-pale-orange">
            <label class="label">
                <span class="label-text text-dark-brown">アクション</span>
            </label>
            <input type="text"  name='action' class="input input-sm input-bordered max-w-xs"></input>
            @include('genres.select_genre')
            <label class="label">
                <span class="label-text text-dark-brown">全体公開しますか？ </span>
            </label>
            <input type="checkbox" class="checkbox border-2 border-matcha" name="is_public" checked></input>
        
            <div class="flex justify-center w-full p-4">
                <button type="submit" class="btn bg-matcha text-pale-orange normal-case hover:bg-sango">
                    アクション登録
                </button>
            </div>
        </div>
    </form>
</div>
