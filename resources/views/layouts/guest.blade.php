<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="vh-100">
        <div class="authincation h-100">
            <div class="container h-100">
                {{ $slot }}
            </div>
        </div>

        <script src="{{ asset('vendor/global/global.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/dlabnav-init.js') }}"></script>
    </body>
</html>
