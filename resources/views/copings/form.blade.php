<div class="h-auto mt-20">
    <div class="bg-yellow-50 p-4">
        <h2 class="text-xl font-bold antialiased">新規アクション登録</h2>
    </div>
    <form method="POST" action="{{ route('copings.store') }}">
        @csrf
        <div class="form-control rounded-lg m-4 p-4 bg-white">
            <label class="label">
                <span class="label-text">アクション</span>
            </label>
            <input type="text"  name='action' class="input input-bordered max-w-xs"></input>
        </div>
        <div class="rounded-lg m-4 p-4 bg-white">
            @include('genres.select_genre')
        </div>
        <div class="form-control rounded-lg m-4 p-4 bg-white">
            <label class="label">
                <span class="label-text">全体公開しますか？ </span>
            </label>
            <input type="checkbox" class="checkbox" name="is_public" value="1"></input>
        </div>
        <div class="flex justify-center w-full p-4">
            <button type="submit" class="btn btn-primary normal-case">アクション登録</button>
        </div>
    </form>
</div>
