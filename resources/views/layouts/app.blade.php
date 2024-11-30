<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.scss')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.5.0/dist/css/glide.core.min.css">

    @livewireStyles
    <title>@yield('title') Restaurant</title>

</head>

<body>
    <livewire:header />
    <main>
        @yield('main')
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show position-fixed bottom-0 end-0 m-3" role="alert"
                style="z-index: 1050;">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

    </main>
    <livewire:footer />
    @livewireScripts
</body>

</html>
