<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="bg-red-100 dark:bg-gray-700 mb-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="flex items-center" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="flex items-center space-x-4">
                
                    </ul>
                
                    <!-- Right Side Of Navbar -->
                    <ul class="flex items-center space-x-4">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="text-red-500 hover:text-blue-700" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="text-blue-500 hover:text-blue-700" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="relative group">
                                <button class="text-blue-500 group-hover:text-blue-700 focus:outline-none" x-data="{ open: false }" @click="open = !open">
                                    {{ Auth::user()->name }}
                                </button>
                
                                <div x-show="open" @click.away="open = false" class="origin-top-right right-0 mt-2 bg-white border rounded shadow-md absolute hidden">
                                    <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
