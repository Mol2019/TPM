<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.assets.styles')
    @yield('styles')
</head>
<body  class="materialdesign">
    @yield('content')
    @include('layouts.assets.scripts')
    @yield('scripts')
</body>
</html>
