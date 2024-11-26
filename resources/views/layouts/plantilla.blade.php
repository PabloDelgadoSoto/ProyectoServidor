<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<script src="https://cdn.tailwindcss.com"></script>-->
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">

    @yield('styles')

    @yield('scripts')


    <title>@yield('title')</title>


</head>
<body>

    @include('layouts._partials.nav')
    <main>
        @yield('content')
    </main>
</body>
</html>
