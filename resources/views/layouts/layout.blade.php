<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.scss')
    @vite('resources/js/app.js')
    <link rel="icon" href="/images/logo.png">
    @livewireStyles
    <title>@yield('title') </title>

</head>

<body>
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
    @livewireScripts
</body>

</html>
