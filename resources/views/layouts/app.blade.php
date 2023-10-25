<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Cope-with</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/css/app.css', 'resources/js/app.js', ])
    </head>
     <body class="bg-pale-orange">
        <div class="fixed top-0 w-full z-50">
                    {{-- ナビゲーションバー --}}
                    @include('commons.navbar')
        </div>

        <div class="pt-20 container mx-auto ">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')

        </div>
        <div class="fixed bottom-0 w-full z-50">
            <footer class="px-3 py-5 bg-matcha text-sm text-gray-400 text-center">
                &copy; cope-with
            </footer>
        </div>
    </body>
</html>
