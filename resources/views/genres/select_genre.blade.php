@inject('genres', 'App\Models\Genre')
@php
$genres = $genres::all();
@endphp

<div class="form-control rounded-lg">
    <label class="label">
        <span class="label-text">ジャンル</span>
    </label>
    <select id="genre_id" name="genre_id" class="select select-bordered select-sm w-full max-w-xs">
        <option disabled selected>----</option>
        @foreach( $genres as $genre)
        <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
        @endforeach
    </select>
</div>