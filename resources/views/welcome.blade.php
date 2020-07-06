<!-- Blade syntax for PHP templating -->
@extends('layouts.layout')
    @section('content')  
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">User Logged In</a>
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
                    {{-- Pass in the named route --}}
                    <a href="{{ route('stacks.create') }}">Create List</a>
                </div>
                <div class="title m-b-md">
                    Pick Your project<br />
                    stack selector
                </div>
                <p class="mssg">{{ session('mssg') }}</p>
                <div class="links">
                    <a href="{{ route('stacks.store') }}">Stack List</a>
                </div>
            </div>
        </div>
    </div>
@endsection
