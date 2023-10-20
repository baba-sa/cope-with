<div class="m-4 p-4 bg-white">
    @if(Auth::check())
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
                <select id="coping_id" class="select select-bordered select-sm" name='coping_id'>
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
    @else
    <div>
        <p>プラクティスを投稿するにはログインしてください。</p>
    </div>
    @endif
</div>

<div id="ajax"></div>
<script type="text/javascript">
    $(function(){
        $('#genre_id').change(function(event) {
            event.preventDefault();
            
            var a_link = 'ProfileController.php';
            let genre_id = '#genre_id';
            
            $.ajax({
                url: a_link,
                cache: false,
                type: 'POST',
                data: { "genre_id": genre_id },
                timeout: 10000,
                dataType: 'html'
                
                }).done(function (data) { //Ajax通信に成功したときの処理
                    alert('success');
                    $("#coping_id").append('coping_id');
                    
                }).fail(function (data) { //Ajax通信に失敗したときの処理
                    alert('error');
                })
            })
        })
    });
    
</script>


