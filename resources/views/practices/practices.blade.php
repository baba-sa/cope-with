<div class="m-4 bg-white">
    @if(isset($practices))
    <table class="table">
        @foreach($practices as $practice)
        <tr>
            <td class="w-16">
                <aside>
                    <div class="avatar">
                        <div class="w-12 rounded">
                            <img src="{{ Gravatar::get($practice->user->email) }}" alt="" />
                        </div>
                    </div>
                </aside>
            </td>
            <td class="">
                <div>
                <a href="{{ route('users.show', $practice->user_id) }}">{{$practice->user->name}}</a>
                さんが
                <a class="link" href="{{ route('users.show', $practice->coping_id) }}">{{ $practice->coping->action }}</a>
                を実施しました。
                </div>
                <div>{{ $practice->comment }}</div>
            </td>
            <td>
                <div>{{ $practice->created_at }}</div>
            </td>
        </tr>
        @endforeach
    </table>
    @else
    <p>there's no practice to show</p>
    @endif
</div>