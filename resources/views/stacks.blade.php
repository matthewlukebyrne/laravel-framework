<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Order Stackz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <!-- Blade syntax for PHP templating -->
    <!-- Passing dynamic data through to the view exactly like Django -->
    <body>
        <div class="flex-center position-ref full-height">
           
            

            <div class="content">
                <a href="/">Main</a>
                <div class="title m-b-md">
                    Stacks List
                </div>
                <p>{{ $framework }}</p>
                <p>{{ $language }}</p>
                @if($level > 10)
                    <p>this level may be too high for you! Take it easy!</p>
                @elseif($level < 5)
                    <p>this level is too easy Challenge yourself!</p>
                @else
                    <p>This level is perfect.</p>
                @endif

                @unless($language == 'JavaScript')
                    <p>you do not have enough JavaScript behind you!</p>
                @endunless
                
                {{-- Output regualr vanilla PHP (pretty handy) --}}
                @php
                    $name = 'matt';
                    echo($name);
                @endphp
            </div>
        </div>
    </body>
</html>
