@inject('genres', 'App\Models\Genre')
@php
$genres = $genres::all();
$cops_by_genre = array();
foreach($genres as $genre){
    $cops = $genre->copings()->get();
    array_push($cops_by_genre, array($genre->id =>$cops));
}
@endphp

<div class="m-4 p-4 bg-white">
    @if(Auth::check())
    <form method="POST" action="{{ route('practices.store') }}">
        @csrf
        <div class="my-4">
            <div class="inline-flex form-control rounded-lg">
                <label class="label">
                    <span class="label-text">ジャンル</span>
                </label>
                <select id="genre_id" name="genre_id" class="select select-bordered select-sm w-full max-w-xs">
                    <option disabled selected>----</option>
                    @foreach( $genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">アクション</span>
                </label>
                <select id="coping_id" class="select select-bordered select-sm max-w-xs" name='coping_id'>
                @foreach($copings as $coping)
                    <option value="{{ $coping->id }}">{{ $coping->action }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">コメント</span>
                </label>
                <textarea class="textarea textarea-bordered max-w-sm" name='comment'></textarea>
            </div>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="btn btn-primary normal-case">投稿</button>
        </div>
        
    </form>
    @else
    <div>
        <p>実施記録を投稿するにはログインしてください。</p>
    </div>
    @endif
</div>

<div></div>

<script>
    let copingsArray = JSON.parse('<?php echo json_encode($cops_by_genre)?>');
    
    
    document.getElementById('genre_id').onchange = function () {
        let genre = this.value;
        let copings = document.getElementById('coping_id');
        copings.options.length = 0;
            for (let i = 0; i < copingsArray[genre -1][genre].length; i++) {
                let op = document.createElement('option');
                op.value = copingsArray[genre -1][genre][i].id;
                op.textContent = copingsArray[genre -1][genre][i].action;
                copings.appendChild(op);
            }
    };
    window.onload = function () {

    };
</script>