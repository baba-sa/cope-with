<div class="">
    @if(isset($copings))
    <ul class="flex flex-wrap">
        
        @foreach($copings as $coping)
        <li class="m-2">
            <form method="GET" action="{{ route('copings.show', $coping->id) }}">
                <button class="btn bg-pink-orange normal-case">{{ $coping->action }}</button>
            </form>
        </li>
        @endforeach
    </ul>
    @endif
</div>