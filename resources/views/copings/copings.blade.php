<div>
    @if(isset($copings))
    <ul class="flex flex-wrap">
        
        @foreach($copings as $coping)
        <div class="rounded-xl bg-white m-4 p-2 ">
            <li><a href="{{ route('copings.show', $coping->id) }}">{{ $coping->action }}</a>
        </div>
        @endforeach
    </ul>
    @endif
</div>