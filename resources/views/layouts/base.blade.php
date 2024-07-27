<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- begin:base-head -->
    <x-base-head />
    @yield('head')
    @stack('head')
    <!-- end:base-head -->
</head>

<body @class($bodyClass)>
    {{ $slot }}
    <x-base-script />
    @stack('scripts')
    @yield('scripts')
</body>

</html>
