<!DOCTYPE html>
<heml lang="{{app()->getLocale}}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <script src="{{ secure_asset('js/app.js') }}" defer>
        </script>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/header.css') }}" rel="stylesheet">
    </head>
    <body>
      <header class="site-header">
        <div class="wrapper site-header__wrapper">
          <h1><small>しずおか</small>ドローンスクール検索<h1>
          <nav class="nav">
            <button class="nav__toggle" aria-expanded="false" type="button">
              menu
              </button>
              <ul class="nav__wrapper">
                <li class="nav__item"><a href="#">検索</a></li>
                <li class="nav__item"><a href="#">スクールQ＆A</a></li>
                <li class="nav__item"><a href="#">費用と時間</a></li>
                <li class="nav__item"><a href="#">マイページ</a></li>
              </ul>
          </nav>
        </div>
      </header>
    </body>
 </heml>