<div>
    <form action={{ route('copings.index') }}>
        @csrf
        @method("GET")
        <div class="flex justify-start ">
            <div class="inline-flex p-4 form-control">
                <label class="label">
                    <span class="label-text">作成者</span>
                </label>
                <select name="created_by" class="select select-bordered select-sm w-full max-w-xs">
                    <option disabled selected>----</option>
                    <option value="0">{{ Auth::user()->name }}</option>
                    <option value="1">全ユーザ</option>
                </select>
            </div>
            
            <div class="inline-flex p-4 form-control">
                <label class="label">
                    <span class="label-text">ジャンル</span>
                </label>
                <select name="created_by" class="select select-bordered select-sm w-full max-w-xs">
                    <option disabled selected>----</option>
                    @foreach( $genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="divider divider-horizontal m-4"></div>
            <div class="inline-flex">
                <div class="p-4 form-control">
                    <label class="label">
                        <span class="label-text">ソート条件</span>
                    </label>
                    <select name="sort_by" class="select select-bordered select-sm w-full max-w-xs">
                        <option disabled selected>----</option>
                        <option value="0">作成日</option>
                        <option value="1">更新日</option>
                    </select>
                </div>
                <div class="p-4 form-control">
                    <label class="label">
                        <span class="label-text">並び順</span>
                    </label>
                    <select name="order" class="select select-bordered select-sm w-full max-w-xs">
                        <option value="0">昇順</option>
                        <option value="1">降順</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="inline-flex p-4 form-control">
            <label class="label cursor-pointer">
                <span class="label-text">マイアクションのみ</span> 
            </label>
            <input name="only_my_actions" type="checkbox" checked="" class="checkbox" />
        </div>
        
        <div class="p-4">
            <button class="btn btn-primary">filter and sort</button>
        </div>
    </form>
</div>