<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('appstack/img') }}/af.png" type="image/x-icon">

    <title>@yield('title', 'Portofolio | Achmad Fauzi')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link class="js-stylesheet" href="{{ asset('appstack/css/light.css') }}" rel="stylesheet">

</head>
<body>
<!-- Navbar -->
@include('partials.navbar')

<!-- Main Content -->
<main class="content">
    @yield('content')
</main>

<!-- Scripts -->
<script src="{{ asset('appstack/js/app.js') }}"></script>
</body>
</html>
