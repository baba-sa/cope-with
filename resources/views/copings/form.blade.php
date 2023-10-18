<div class="h-auto">
    <div class="bg-yellow-50">
        <h2 class="text-xl font-bold antialiased">新規アクション登録</h2>
    </div>
    <form method="POST" action="{{ route('copings.store') }}">
        @csrf
        <div class="form-control rounded-lg m-4 p-4 bg-white">
            <label>アクション：</label>
            <textarea name='action' class="input input-bordered"></textarea>
        </div>
        <div class="form-control rounded-lg m-4 p-4 bg-white">
            <select name="genre_id" class="select select-bordered w-full max-w-xs">
                <option disabled selected>ジャンル</option>
                @foreach( $genres as $genre)
                <option value="{{$genre->id}}">{{ $genre->genre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-control rounded-lg m-4 p-4 bg-white">
            <label>全体公開しますか？　</label>
            <input type="checkbox" class="checkbox" name="is_public" value="1"></input>
        </div>
        <div class="w-full">
            <button type="submit" class="btn btn-primary normal-case">entry</button>
        </div>
    </form>
</div>
