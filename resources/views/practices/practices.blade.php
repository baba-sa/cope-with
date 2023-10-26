@inject('moods', 'App\Models\Mood')
<div class="m-4 p-4 bg-pale-orange rounded-lg">
    @if(isset($practices))
    <ul>
        @foreach($practices as $practice)
        <li>
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
                <div class="chat-bubble bg-pink-orange text-dark-brown">
                    <a class="link" href="{{ route('users.show', $practice->user_id) }}">{{$practice->user->name}}</a>
                    さんが
                    <a class="link" href="{{ route('copings.show', $practice->coping_id) }}">{{ $practice->coping->action }}</a>
                    を実施しました。 
                    {{ $moods->find($practice->mood_id_before)->name_of_mood }}→{{ $moods->find($practice->mood_id_after)->name_of_mood }}
                </div>
                <div class="chat-bubble bg-pink-orange text-dark-brown">{{ $practice->comment }}</div>
                <div class="chat-footer opacity-50 text-right">
                    {{ $practice->created_at }}
                </div>
            </div>
        @endforeach
        </li>
    </ul>
    {{ $practices->links() }}
    @else
    <p>表示できる実施記録がありません。</p>
    @endif
</div>