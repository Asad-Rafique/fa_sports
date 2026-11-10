
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'FA SPORTS — The Game Starts Before The Game')</title>

    <meta name="description" content="FA SPORTS — professional sportswear, teamwear and custom kit manufacturing. Perform. Fuel. Persist.">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- MAIN WEBSITE CSS --}}
    <link rel="stylesheet" href="{{ asset('css/fasports.css') }}">

    {{-- FA SPORTS NAVIGATION CSS --}}
    <link rel="stylesheet" href="{{ asset('css/fa-navigation.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/sports-showcase.css') }}?v=1">

    @stack('styles')
</head>

<body class="fa-body">

    {{-- SVG ICON SPRITE --}}
    @include('partials.svg-sprite')

    {{-- WEBSITE NAVIGATION --}}
    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @section('footer')
        @include('partials.footer')
    @show

    {{-- MAIN WEBSITE JAVASCRIPT --}}
    <script src="{{ asset('js/fasports.js') }}?v=2"></script>

    {{-- NAVIGATION JAVASCRIPT --}}
    <script src="{{ asset('js/fa-navigation.js') }}?v={{ time() }}" defer></script>

    @stack('scripts')

</body>
</html>
