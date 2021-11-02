<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="copyright" content="Создание сайтов - Kirill Philips, https://vk.com/id90191490, 2021">
    <meta name="author"
          content="Kirill Philips, https://vk.com/id90191490, создание сайтов, поддержка сайтов, продвижение сайтов">
    <title>{{ $settings["site.title"]->value }}</title>
    <meta name="description" content="{{ $settings["site.description"]->value }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5f4b8b">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#5f4b8b">
    <meta name="msapplication-config" content="{{ asset('images/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#5f4b8b">
    <script defer="defer" src="{{ asset('js/main.js') }}"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('templates.komok_index.header')
    @yield('body')
    @include('templates.komok_index.footer')
</body>
</html>
