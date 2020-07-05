    <!-- Blade syntax for PHP templating -->
    @extends('layouts.layout')
    @section('content')  
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="flex-center position-ref full-height">
            <div class="content">
                <img src="/img/weblogo_laravel.png" alt="webquestionaire" class="main-img">
                <div class="links">
                    <a href="/stacks/create">Click to Create</a>
                </div>
                <div class="title m-b-md">
                    Pick Your Stack<br />
                    framework selector
                </div>
                <p class="mssg">{{ session('mssg') }}</p>
                <div class="links">
                    <a href="/stacks">Stack List</a>
                </div>
            </div>
        </div>
        </div>
    
        @endsection
