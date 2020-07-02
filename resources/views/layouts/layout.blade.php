<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Order Stackz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- Link Tag --}}
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
      {{-- Show and display other pages of data --}}
      @yield('content')

      <footer>
        Copyright &copy; 2020
      </footer>
    </body>
</html>