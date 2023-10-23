<div class="flex flex-wrap">
    <form action={{ route('copings.index') }}>
        @csrf
        @method("GET")
        <div class="flex justify-start ">
            <div class="p-4 form-control">
                <label class="label">
                    <span class="label-text">作成者</span>
                </label>
                <select name="created_by" class="select select-bordered select-sm w-full max-w-xs">
                    <option disabled selected>----</option>
                    <option value="1">{{ Auth::user()->name }}</option>
                    <option value="0">全ユーザ</option>
                </select>
            </div>
            
            <div class="p-4 form-control">
                @include('genres.select_genre')
            </div>
            
            <div class="inline-flex p-4 form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">マイアクションのみ</span> 
                </label>
                <input name="only_my_actions" type="checkbox" class="checkbox" />
            </div>
        </div>

        <div class="flex justify-start">
            <div class="p-4 form-control">
                <label class="label">
                    <span class="label-text">ソート条件</span>
                </label>
                <select name="sort_by" class="select select-bordered select-sm w-full max-w-xs">
                    <option value="0">作成日</option>
                </select>
            </div>
            <div class="p-4 form-control">
                <label class="label">
                    <span class="label-text">並び順</span>
                </label>
                <select name="order" class="select select-bordered select-sm w-full max-w-xs">
                    <option value="0">降順</option>
                    <option value="1">昇順</option>
                </select>
            </div>
        </div>
        
        <div class="flex justify-center p-4">
            <button class="btn btn-primary">フィルタ / ソート</button>
        </div>
    </form>
</div>