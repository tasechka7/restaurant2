<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Restaurant</title>
    @vite('resources/css/admin.scss')
    @vite('resources/js/app.js')
    @livewireStyles
</head>

<body>
    <livewire:header-admin />
    <main class="admin">
        @yield('main')
    </main>
    @livewireScripts
</body>
</html>
