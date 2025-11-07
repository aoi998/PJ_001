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
        <header class="flex justify-between items-center h-20 p-3 bg-gray-300 dark:bg-gray-800">
            <h1 class="text-2xl font-bold dark:text-gray-200"><a href="{{ route('posts.index') }}">Instagram風画像投稿アプリ</a></h1>
            <nav>
                <button type="button" id="button" class="z-10 fixed top-7 right-2 mb-3 text-gray-800 dark:text-gray-200">
                    <i id="bars">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </i>
                    <i id="xmark" class="hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </i>
                </button>
                <ul id="menu" class="z-0 fixed top-10 right-0 w-24 text-center bg-gray-300 dark:bg-gray-800 font-bold translate-x-full pt-6 pb-3 rounded-md">
                    <li>
                        <form action="{{ route('dashboard') }}" method="GET">
                            <button type="submit" class="p-3 text-sm w-full text-left dark:text-gray-200">ユーザー情報</button>
                        </form>
                    </li>
                    <li>
                        @if (auth()->check())
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="p-3 text-sm w-full text-left dark:text-gray-200">ログアウト</button>
                        </form>
                        @else
                        <form action="{{ route('login') }}" method="GET">
                            <button type="submit" class="p-3 text-sm w-full text-left dark:text-gray-200">ログイン</button>
                        </form>
                        @endif
                    </li>
                </ul>
            </nav>
       </header>

        <!-- Page Content -->
        <main class="bg-gray-100 dark:bg-gray-900">
            <div class="mx-3">
                @yield('content')
            </div>
        </main>

        <!-- Page Footer -->
        <footer class="flex justify-center items-center h-12 bg-gray-300 dark:bg-gray-800">
            <p class="text-gray-800 dark:text-gray-200">© 2025 Instagram風画像投稿アプリケーション v0.0.1</p>
        </footer>

        <!-- Scripts -->
        <script>
            button.addEventListener('click', function () {
                bars.classList.toggle('hidden');
                xmark.classList.toggle('hidden');
                menu.classList.toggle('translate-x-full');
            })
        </script>
    </body>
</html>
