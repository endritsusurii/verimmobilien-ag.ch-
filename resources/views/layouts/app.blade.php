<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VER Immobilien AG')</title>

    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <script src="{{ asset('resources/js/app.js') }}" defer></script>

    <style>
        :root {
            --brand-red: #ED1C24;
            --brand-white: #FFFFFF;
            --brand-gray-light: #E7E7E7;
            --brand-gray-dark: #B7B7B7;
            --brand-black: #262525;
        }
    </style>

    @stack('styles')
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>

</html>
