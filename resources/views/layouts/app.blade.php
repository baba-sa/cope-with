<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/css/app.css', 'resources/js/app.js', ])
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </head>
     <body class="bg-fixed">
        <div class="fixed top-0 w-full z-50">
                    {{-- ナビゲーションバー --}}
                    @include('commons.navbar')
        </div>

        <div class="container mx-auto ">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')

        </div>
        <div class="fixed bottom-0 w-full z-50">
            <footer class="px-3 py-5 bg-yellow-900 text-sm text-gray-400 text-center">
                &copy; cope-with
            </footer>
        </div>
    </body>
</html>
