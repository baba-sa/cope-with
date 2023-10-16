<div>
    @if(isset($copings))
    <ul>
        @foreach($copings as $coping)
        <li>
            <a href="{{ route('copings.show', $coping->id) }}">{{ $coping->action }}</a>
        @endforeach
    </ul>
    @endif
</div>