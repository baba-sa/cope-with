<div class="mt-4 mb-4">
    <form method="POST" action="{{ route('practices.store') }}">
        @csrf
        <div>
            <div>
                <select name='coping_id'>
                @foreach($copings as $coping)
                    <option value="{{ $coping->id }}">{{ $coping->action }}</option>
                @endforeach
                </select>
            </div>
            <div>
                <textarea name='comment'></textarea>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary normal-case">submit</button>
    </form>
</div>
