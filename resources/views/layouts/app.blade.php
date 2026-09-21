<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Studio Design')</title>

    {{-- Asset CSS dari HTML --}}
    <link rel="stylesheet" href="{{ asset('css/studio-style.css') }}">

    {{-- Google Fonts & Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">

    @stack('styles')
</head>
<body>
    <div class="box sd-1">
        {{-- Header Navigation Component --}}
        @include('partials.navbar')

        {{-- Main Content --}}
        <main>
            @yield('content')
        </main>

        {{-- Footer Component --}}
        @include('partials.footer')
    </div>

    {{-- Asset JS --}}
    <script src="{{ asset('js/studio-app.js') }}"></script>
    @stack('scripts')
</body>
</html>
