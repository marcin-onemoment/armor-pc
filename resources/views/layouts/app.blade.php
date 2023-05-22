<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ArmorPC - Twój komputer w dobrych rękach </title>
    <meta name="description" content="Armor PC świadzczy uslug z zakresu serwisowania sprzętu komputerowego oraz laptopów. Potrzebujesz nowego laptopa? Zapraszamy do nas.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ArmorPC') }}</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100,300,400,400i,700,900%7CRoboto:400">
    <script src="https://kit.fontawesome.com/a924c70fc6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div id="app">
    <main>
        @yield('content')
    </main>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
{{--<script src="{{ asset('js/form.js') }}"></script>--}}
@stack('custom-scripts')

@production
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PQ7ZY2LKXD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PQ7ZY2LKXD');
    </script>
@endproduction

@include('cookie-consent::index')
</body>
</html>
