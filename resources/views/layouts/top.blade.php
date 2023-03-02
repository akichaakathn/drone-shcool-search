<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta carset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>しずおかドローンスクール検索</title>
         <script src="{{ secure_asset('js/app.js') }}" defer>
        </script>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class ="page-header wrapper">
      <h1 class="title"><small>しずおか</small><br>ドローンスクール検索</h1>
      <nav class="header-nav">
        <ul class="nav_items nav-items">
          <li class="nav-items_items"><a href="#">ドローンスクールって？</a>></li>
          <li class="nav-items_items"><a href="#">費用と時間は？</a></li>
          <li class="nav-items_items"><a href="#">検索</a></li>
          <li class="nav-items_items"><a href="#">マイページ</a></li>
        </ul>
      </nav>
      @yield('content')
    </body>