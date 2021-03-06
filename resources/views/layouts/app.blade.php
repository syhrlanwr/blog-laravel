<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('mytitle')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="https://i.ibb.co/yfTtSsQ/4fd42a3a840f46cbae7b41056dc05916-2-1.png">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header x-data="{ mobileMenuOpen : false }"
            class="flex flex-wrap flex-row justify-between md:items-center shadow-lg md:space-x-4 bg-white py-6 px-6 relative">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold no-underline">
                        <img class="w-3/5" src="https://i.ibb.co/SrVVYLB/4fd42a3a840f46cbae7b41056dc05916-2.png"
                            alt="logo" border="0">
                    </a>
                </div>
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="inline-block md:hidden w-8 h-8 bg-gray-200 text-gray-600 p-1">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <nav class="absolute md:relative top-16 left-0 md:top-0 z-20 md:flex flex-col md:flex-row md:space-x-6 w-full md:w-auto bg-white shadow-md rounded-lg md:rounded-none md:shadow-none md:bg-transparent p-6 pt-0 md:p-0"
                    :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}"
                    @click.away="mobileMenuOpen = false">
                    <a class="no-underline hover:underline pb-1" href="/">Beranda</a>
                    <a class="no-underline hover:underline pb-1" href="/blog">Blog</a>
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline"
                                href="{{ route('register') }}">{{ __('Daftar') }}</a>
                        @endif
                    @else
                        <div x-data="{ open: false }" class="ml-4">
                            <button @click="open = true">
                                {{ Auth::user()->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 inline" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false" class="bg-white absolute">
                                <ul class="pt-2">
                                    <li>
                                        <a href="/mypost" class="py-2 px-4 block whitespace-no-wrap hover:bg-cool-gray-300">
                                            Postingan Saya
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/blog/create"
                                            class="py-2 px-4 block whitespace-no-wrap hover:bg-cool-gray-300">
                                            Buat Postingan Baru
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            class="py-2 px-4 block whitespace-no-wrap hover:bg-cool-gray-300" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="hidden">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endguest
                </nav>
            </div>
        </header>
        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
