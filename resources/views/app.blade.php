<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Robots" content="noindex,nofollow" />

    <title>AnimaSections</title>

    <!-- Fonts -->
    @yield('preloads')
    <link rel="preload" href="/fonts/woff2/Vollkorn-Italic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/woff2/Vollkorn-Regular.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Styles -->
    @vite(['resources/scss/global/global.scss'])
    @yield('styles')

    {{-- @viteReactRefresh --}}

    @yield('script')
</head>


<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    @if (!request()->is('section-2'))
        @php
            $routesConfig = config('routes-config');
        @endphp

        @include('components.navigationDrawers')
        @vite('resources/ts/components/navigationDrawers.ts')
    @endif

    @yield('content')
</body>

</html>
