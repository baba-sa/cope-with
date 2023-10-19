@extends('layouts.app')
@section('content')
<div>
    
    {{--名前--}}
    <div class="card w-96 bg-base-100 shadow-xl">
      <figure><img src="" alt="{{$user->name}}`'`s icon" /></figure>
      <div class="card-body">
        <h2 class="card-title">Shoes!</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="card-actions justify-end">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
    
    
    {{--アイコン登録--}}
    <input type="file" class="file-input file-input-bordered w-full max-w-xs" />

    {{--プロフィール文登録--}}
    <div class="form-control">
      <label class="label">
        <span class="label-text">プロフィール文</span>
      </label>
      <textarea class="textarea textarea-bordered"></textarea>
    </div>
    
    
</div>
@endsection