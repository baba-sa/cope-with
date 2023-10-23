<form method="POST" action="{{route('my_action.add', $coping->id)}}">
    @csrf
    @if(Auth::user()->isMyAction($coping->id))
    @method("DELETE")
    <button class="btn btn-warning btn-outline" formaction="{{route('my_action.remove', $coping->id)}}">
        マイアクションから削除
    </button>
    @else
    <button class="btn btn-success">
        マイアクションに追加
    </button>
    @endif
</form>