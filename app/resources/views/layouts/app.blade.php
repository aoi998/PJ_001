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
        <header>
            <h1>Instagram風画像投稿アプリケーション</h1>
        </header>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Page Footer -->
         <footer>
            <p>© 2025 Instagram風画像投稿アプリケーション v0.0.1</p>
         </footer>
    </body>
</html>
