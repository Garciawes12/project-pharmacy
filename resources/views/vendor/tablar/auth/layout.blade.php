<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <title>@yield('title')</title>
    <!-- CSS files -->
    @vite('resources/js/app.js')
</head>
<body class=" border-top-wide border-primary d-flex flex-column">
<div class="page page-center">
    @yield('content')
</div>
</body>
</html>
