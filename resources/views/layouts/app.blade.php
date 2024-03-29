<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token">
        <title>{{ __('views.layouts.app.home') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">{{ __('views.layouts.app.home') }}</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('tasks.index')) active @endif" href="{{ route('tasks.index') }}">{{ __('views.layouts.app.tasks') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('task_statuses.index')) active @endif" href="{{ route('task_statuses.index') }}">{{ __('views.layouts.app.statuses') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('labels.index')) active @endif" href="{{ route('labels.index') }}">{{ __('views.layouts.app.labels') }}</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link @if(request()->routeIs('login')) active @endif" href="{{ route('login') }}">{{ __('views.layouts.app.login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link @if(request()->routeIs('register')) active @endif" href="{{ route('register') }}">{{ __('views.layouts.app.register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('views.layouts.app.logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="container py-4">
                @include('flash::message')
                @yield('content')
            </main>
        </div>
    </body>
</html>
