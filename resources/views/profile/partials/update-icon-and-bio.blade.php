<div>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ $user->name }}
        </h2>
    </header>
    
    <form method="POST" action="{{ route('profile.update', ['id' => $user->profile->id]) }}" enctype="multipart/form-data" >
        @csrf
        @method("PATCH")
        {{--アイコン登録--}}
        <div class="my-4">
            <img
             id="preview"
             src="{{ isset($user->profile->icon_path) ? asset('storage/' . $user->profile->icon_path) : asset('storage/images/fantasy_ocean_kraken.png') }}"
             alt=""
             class="w-16 h-16 object-cover border-none bg-gray-200">
        </div>
        
        <div class="form-control my-4">
            <input type="file" name="user_icon" class="file-input file-input-bordered w-full max-w-xs" />
        </div>
        
        
        {{--プロフィール文登録--}}
        <div class="form-control my-4">
          <label class="label">
            <span class="label-text">プロフィール文</span>
          </label>
          <textarea name="user_bio" class="textarea textarea-bordered">{{$user->profile->profile_comment}}</textarea>
        </div>
        
        <div class="flex items-center gap-4">
            <button class="btn">save</button>
        </div>
    </form>
</div>