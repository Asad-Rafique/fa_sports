<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FA SPORTS — The Game Starts Before The Game')</title>
    <meta name="description" content="FA SPORTS — professional sportswear, teamwear and custom kit manufacturing. Perform. Fuel. Persist.">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Replace with your licensed condensed display + sans-serif faces. Fallback stack is tuned to still read athletic/condensed without them. --}}
    <link rel="stylesheet" href="{{ asset('css/fasports.css') }}">
    @stack('styles')
</head>
<body class="fa-body">

    @include('partials.svg-sprite')

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @section('footer')
        @include('partials.footer')
    @show

    <script src="{{ asset('js/fasports.js') }}" defer></script>
    @stack('scripts')
</body>
</html>