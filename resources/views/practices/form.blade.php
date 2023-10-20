@inject('App\Models\Coping')

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
            
            var copings = "{{Coping::where('genre_id', '=', $genre_id)}}";
            if(isempty(copings)){
                copings = "{{$copings}}";
            }else{
                var option;
                foreach(copings as coping){
                    option = '<option value="' + coping.id + '">' + coping.action + '</option>';
                    $('#coping_id').append(option);
                }
            }
            
            
            })
        })
    });
    
</script>
