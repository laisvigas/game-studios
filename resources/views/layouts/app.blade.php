<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Game Studios')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-header />

    <main class="container mt-4 p-5">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
