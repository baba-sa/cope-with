<div class="m-4 p-4 bg-white">
    <form method="POST" action="{{ route('practices.store') }}">
        @csrf
        <div>
            <div>
                @include('genres.select_genre')
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">アクション</span>
                </label>
                <select class="select select-bordered" name='coping_id'>
                @foreach($copings as $coping)
                    <option value="{{ $coping->id }}">{{ $coping->action }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">コメント</span>
                </label>
                <textarea class="textarea textarea-bordered" name='comment'></textarea>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary normal-case">submit</button>
    </form>
</div>
