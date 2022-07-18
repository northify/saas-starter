<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Title -->
        <title>{{ $content['contentMetaTitle'] }}</title>
        <!-- Meta -->
        <meta content="{{ $content['contentMetaDescription'] }}" name="description">
        <meta content="{{ $content['contentMetaTitle'] }}" property="og:title">
        <meta content="{{ $content['contentMetaDescription'] }}" property="og:description">
        <meta content="{{ $meta['metaImage'] }}" property="og:image">
        <meta content="{{ $content['contentMetaTitle'] }}" property="twitter:title">
        <meta content="{{ $content['contentMetaDescription'] }}" property="twitter:description">
        <meta content="{{ $meta['metaImage'] }}" property="twitter:image">
        <meta property="og:type" content="website">
        <meta content="summary_large_image" name="twitter:card">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">
        <!-- Analytics -->
        @if(env('APP_ENV') == 'production')
            <!-- Plausible -->
            <script async defer data-domain="{{ $meta['plausibleAnalytics'] }}" src="https://plausible.io/js/plausible.js"></script>
            <!-- Google -->
            <script async src="https://www.googletagmanager.com/gtag/js?id={{ $meta['googleAnalytics'] }}"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', '{{ $meta['googleAnalytics'] }}');
            </script>
        @endif
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="bg-gray-50">
            <header>
                @include('Marketing.Landing.Layout.nav')
            </header>
            <main>
                @yield('content')
            </main>
            <footer class="mt-24 bg-gray-900 sm:mt-12">
                @include('Marketing.Landing.Layout.footer')
            </footer>
        </div>
    </body>
</html>
