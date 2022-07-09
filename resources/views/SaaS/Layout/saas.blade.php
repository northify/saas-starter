<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-white">
        <div x-data="{ sideOpen: false }" @keydown.window.escape="open = false">
            @include('SaaS.Layout.nav-sidebar')
            <div class="md:pl-64 flex flex-col flex-1">
                @include('SaaS.Layout.nav-open-sidebar')
                @yield('content')
            </div>
        </div>
    </body>
</html>
