<form method="POST" action="{{route('my_action.add', $coping->id)}}">
    @csrf
    @if(Auth::user()->isMyAction($coping->id))
    @method("DELETE")
    <button class="btn btn-sm text-sango btn-outline hover:bg-sango hover:text-pale-orange" formaction="{{route('my_action.remove', $coping->id)}}">
        マイアクションから削除
    </button>
    @else
    <button class="btn btn-sm bg-matcha text-pale-orange hover:bg-pale-orange hover:text-matcha hover:border-matcha">
        マイアクションに追加
    </button>
    @endif
</form>