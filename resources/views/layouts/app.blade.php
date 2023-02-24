<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DeliveBoo') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->



    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm d-flex align-items-center">
            <div class="container d-flex align-items-center py-2">
                <a href="http://localhost:5174/">
                    <img class="deliveboo-logo"
                        src="https://logodownload.org/wp-content/uploads/2019/09/deliveroo-logo-6.png"
                        alt="Logo Deliveroo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="text-light nav-link"
                                    href="{{ route('login') }}"><strong>{{ __('Login') }}</strong></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="text-light nav-link"
                                        href="{{ route('register') }}"><strong>{{ __('Register') }}</strong></a>
                                </li>
                            @endif
                        @else
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="d-flex align-items-center">
                                    <li class="nav-item active">
                                        <a class="text-light text-decoration-none"
                                            href="{{ route('admin.companies.show', Auth::user()->company) }}">{{ __('Attività') }}</a>
                                    </li>
                                    <li class="nav-item mx-3">
                                        <a class="text-light text-decoration-none"
                                            href="{{ route('admin.products.index') }}">
                                            {{ __('Prodotti') }}</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="text-light text-decoration-none"
                                            href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>

                                    <li class="nav-item mx-3">
                                        <div class="px-2 bg-light rounded-5 dropdown-center">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu rounded-4" aria-labelledby="navbarDropdown">
                                                @if (Auth::user()->company)
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                @else
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="">
            <div class="container">
                @yield('content')
            </div>
            @yield('content-hero')
        </main>
    </div>
</body>

</html>
