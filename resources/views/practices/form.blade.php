<div class="m-4 p-4 bg-white">
    <form method="POST" action="{{ route('practices.store') }}">
        @csrf
        <div>
            <div>
                <label>アクション：</label>
                <select name='coping_id'>
                @foreach($copings as $coping)
                    <option value="{{ $coping->id }}">{{ $coping->action }}</option>
                @endforeach
                </select>
            </div>
            <div>
                <label>コメント：</label>
                <textarea class="w-1/2 rounded-sm border-solid" name='comment'></textarea>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary normal-case">submit</button>
    </form>
</div>
