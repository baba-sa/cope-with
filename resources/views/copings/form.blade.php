<div class="bg-gray-50 h-screen">
    <div class="bg-yellow-50">
        <h2 class="text-xl font-bold antialiased">新規アクション登録</h2>
    </div>
    <form method="POST" action="{{ route('copings.store') }}">
        @csrf
        <div class="rounded-lg m-4 p-4 bg-white">
            <label>アクション：</label>
            <textarea name='action'></textarea>
        </div>
        <div class="rounded-lg m-4 p-4 bg-white">
            <label>全体公開しますか？　</label>
            <input type="checkbox" name="is_public" value="1"></input>
        </div>
        <div class="w-full">
            <button type="submit" class="btn btn-primary normal-case">entry</button>
        </div>
    </form>
</div>
