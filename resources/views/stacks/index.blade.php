    <!-- Blade syntax for PHP templating -->
    <!-- Passing dynamic data through to the view exactly like Django -->
    {{-- Extending and yielding the file in the layout page --}}
    @extends('layouts.layout')
    @section('content')  
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="links">
                    <a href="/">Home</a>
                </div>
                <div class="title m-b-md">
                    Stacks List
                </div>

                {{-- Output the name variable on the query paramter below --}}
                {{-- http://localhost:8000/stacks?name=mario --}}
                {{-- http://localhost:8000/stacks?name=steve&age=30 --}}
                {{ $name }}
                {{ $age }}

                {{-- For loop on the data in the Array --}}
                {{-- Now updated and converted into a object from the mySql database --}}
                @foreach ($stacks as $stack)
                    <div>
                        {{ $stack->name }} - {{ $stack->framework }} - {{ $stack->language }}
                    </div>
                @endforeach

                

                
                {{-- @for ($i = 0; $i < count($stacks); $i++)
                    <p>{{ $stacks[$i]['framework'] }}</p>
                @endfor  --}}

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