    <!-- Blade syntax for PHP templating -->
    <!-- Passing dynamic data through to the view exactly like Django -->
    {{-- Extending and yielding the file in the layout page --}}
    @extends('layouts.app')
    @section('content')

    <body>
        <div class="wrapper stack-index">
            <div class="content">
            <h1>Stack Projects</h1>

            {{-- Output the name variable on the query paramter below --}}
            {{-- http://localhost:8000/stacks?name=mario --}}
            {{-- http://localhost:8000/stacks?name=steve&age=30 --}}
            {{-- {{ $name }}
            {{ $age }} --}}

            {{-- For loop on the data in the Array --}}
            {{-- Now updated and converted into a object from the mySql database --}}
            @foreach ($stacks as $stack)
            <div class="stack-item">
            <h4><a href="/stacks/{{ $stack->id }}">{{ $stack->name }}</h4>
            <img src="/img/code_logo.png" alt="stack_icon">
            </a>
            </div>
            @endforeach
            <hr>
            <div class="links">
                <a href="/" class="back">return</a>
            </div>


            {{-- @for ($i = 0; $i < count($stacks); $i++)
                    <p>{{ $stacks[$i]['framework'] }}</p>
            @endfor --}}

            {{-- Using loops in Blade in PHP --}}
            {{-- @for ($i = 0; $i < 5; $i++)
                    <p>the value of i is {{ $i }}</p>
            @endfor --}}

            {{-- @if($level > 15)
                    <p>This level may be too high for you! Take it easy partner!</p>
                @elseif($level < 5)
                    <p>This level is too easy. Challenge yourself!</p>
                @else
                    <p>This level is perfect for you.</p>
                @endif

                {{-- Kind of the opposite to unless / unless this is true / opposite of a if check --}}
            {{-- @unless($language == 'JavaScript')
                    <p>You do not have enough JavaScript behind you!</p>
                @endunless --}}

            {{-- Output regular vanilla PHP (pretty handy) --}}
            {{-- @php
                    $name = 'matt';
                    echo($name);
                @endphp --}}
        </div>
    </div>
        @endsection
