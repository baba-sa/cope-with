<form method="POST" action="{{route('my_action.add', $coping->id)}}">
    @csrf
    @if(Auth::user()->isMyAction($coping->id))
    @method("DELETE")
    <button class="btn formaction="{{route('my_action.remove', $coping->id)}}">
        マイアクションから削除
    </button>
    @else
    <button class="btn">
        マイアクションに追加
    </button>
    @endif
</form>