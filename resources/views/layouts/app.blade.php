<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>株式会社estra</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&amp;display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

  <body class="container">
    @component('layouts.header')
    @endcomponent
    <main class="main">
        @yield('main')
    </main>
    @component('layouts.footer')
    @endcomponent
  </body>

</html>