<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', config('app.name')) - Laravel</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div id="app" class="{{ route_class() }}-page">
  <header id="app-header" class="bbs-header">
    @include('web.layouts.header')
  </header>
  <main id="app-main" class="bbs-main">
    @yield('content', 'Default Content')
  </main>
  <footer id="app-footer" class="bbs-footer">
    @include('web.layouts.footer')
  </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
