<div class="mx-4 p-4 bg-white">
    @if(isset($practices))
    <ul>
        @foreach($practices as $practice)
        <li>
            <td class="">
                <div class="chat chat-start">
                    <div class="chat-image avatar">
                        <div class="w-16 rounded-full">
                            @if(isset($practice->user->profile->icon_path))
                            <img src="/storage/{{$practice->user->profile->icon_path}}" alt="" />
                            @else
                            <img src="/storage/images/fantasy_ocean_kraken.png" alt="" />
                            @endif
                        </div>
                    </div>
                    <div class="chat-bubble bg-yellow-50 text-gray-800">
                        <a href="{{ route('users.show', $practice->user_id) }}">{{$practice->user->name}}</a>
                        さんが
                        <a class="link" href="{{ route('copings.show', $practice->coping_id) }}">{{ $practice->coping->action }}</a>
                        を実施しました。
                    </div>
                    <div class="chat-bubble bg-yellow-50 text-gray-800">{{ $practice->comment }}</div>
                    <div class="chat-footer opacity-50 text-right">
                        {{ $practice->created_at }}
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </li>
    @else
    <p>there's no practice to show</p>
    @endif
</div>