@if (Auth::check())
    {{--サイト説明ページへのリンク--}}
    <li><a class="link link-hover" href="/introduce">どんなサイト？</a></li>
    {{-- ユーザ詳細ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.show', Auth::user()->id) }}">{{ Auth::user()->name }}さんのプロフィール</a></li>
    {{--アクション一覧ページへのリンク--}}
    <li><a class="link link-hover" href="{{ route('copings.index') }}">アクション一覧 / 登録</a></li>

    <li class="divider lg:hidden"></li>
    {{-- ログアウトへのリンク --}}
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a></li>
@else
    {{--サイト説明ページへのリンク--}}
    <li><a class="link link-hover" href="/introduce">どんなサイト？</a></li>
    {{-- ユーザ登録ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('register') }}">ユーザ登録</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ログインページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('login') }}">ログイン</a></li>
@endif