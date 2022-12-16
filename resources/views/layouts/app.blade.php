<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('panels.styles')

</head>

<body data-new-gr-c-s-check-loaded="14.1089.0" data-gr-ext-installed="">

    <!-- Page Content -->
    @yield('content')

    @include('panels.scripts')
</body>

</html>
