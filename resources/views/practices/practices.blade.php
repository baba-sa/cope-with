<div class="mt-4 mb-4">
    @if(isset($practices))
    <table class="table">
        <tr>
            <th>ユーザ</th>
            <th>コメント</th>
            <th>アクション</th>
        </tr>
        @foreach($practices as $practice)
        <tr>
            <td>
                <div class="avatar">
                    <div class="w-12 rounded">
                        <img src="{{ Gravatar::get($practice->user->email) }}" alt="" />
                    </div>
                </div>
                <a href="{{ route('users.show', $practice->user_id) }}">{{$practice->user->name}}</a>
            </td>
            <td>{{ $practice->comment }}</td>
            <td><a href="{{ route('users.show', $practice->coping_id) }}">{{ $practice->coping_id }}</-a></td>
        </tr>
        @endforeach
    </table>
    @else
    <p>there's no practice to show</p>
    @endif
</div>