<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta carset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
         <script src="{{ secure_asset('js/app.js') }}" defer>
        </script>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/.css') }}" rel="stylesheet">
    </head>
    <body>
      @include('layouts.herder')
      @yield('content')
      @include('layouts.footer')
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
