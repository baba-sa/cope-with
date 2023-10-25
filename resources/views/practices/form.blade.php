@inject('genres', 'App\Models\Genre')
@php
$genres = $genres::all();
$cops_by_genre = array();
foreach($genres as $genre){
    $cops = $genre->copings()->get();
    array_push($cops_by_genre, array($genre->id =>$cops));
}
@endphp

<div class="m-4 p-4 bg-pale-orange text-dark-brown rounded-lg">
    @if(Auth::check())
    <form method="POST" action="{{ route('practices.store') }}">
        @csrf
        <div class="my-4">
            @if(!isset($page))
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
            @endif
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
            <div class="form-control">
                <label class="label">
                    <span class="label-text">実施前の気分</span>
                </label>
                <div class="rating gap-1">
                  <input type="radio" name="mood_id_before" value="1" class="mask mask-heart bg-sango" />
                  <input type="radio" name="mood_id_before" value="2" class="mask mask-heart bg-sango" />
                  <input type="radio" name="mood_id_before" value="3" class="mask mask-heart bg-sango" checked/>
                  <input type="radio" name="mood_id_before" value="4" class="mask mask-heart bg-sango" />
                  <input type="radio" name="mood_id_before" value="5" class="mask mask-heart bg-sango" />
                </div>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">実施後の気分</span>
                </label>
                <div class="rating gap-1">
                  <input type="radio" name="mood_id_after" value="1" class="mask mask-heart bg-matcha" />
                  <input type="radio" name="mood_id_after" value="2" class="mask mask-heart bg-matcha" />
                  <input type="radio" name="mood_id_after" value="3" class="mask mask-heart bg-matcha" checked/>
                  <input type="radio" name="mood_id_after" value="4" class="mask mask-heart bg-matcha" />
                  <input type="radio" name="mood_id_after" value="5" class="mask mask-heart bg-matcha" />
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="btn bg-matcha text-pale-orange hover:bg-sango normal-case">投稿</button>
        </div>
        
    </form>
    @else
    <div>
        <p class="text-dark-brown">実施記録を投稿するにはログインしてください。</p>
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