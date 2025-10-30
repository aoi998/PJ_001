<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <!-- Page Heading -->
        <header class="flex justify-center items-center h-12 mb-3 bg-gray-300">
            <h1 class="text-lg font-bold"><a href="{{ route('posts.index') }}">Instagram風画像投稿アプリケーション</a></h1>
        </header>

        <!-- Page Content -->
        <main>
            <div class="mx-3">
                @yield('content')
            </div>
        </main>

        <!-- Page Footer -->
         <footer class="flex justify-center items-center h-12 bg-gray-300">
            <p>© 2025 Instagram風画像投稿アプリケーション v0.0.1</p>
         </footer>
    </body>
</html>
