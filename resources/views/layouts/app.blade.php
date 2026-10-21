<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Global Metadata --}}
    <title>@yield('title', 'Slameticon Digital Valey | Digital Solutions, Software Development & Digital Marketing')</title>
    <meta name="description" content="@yield('meta_description', 'PT Slameticon Digital Valey menyediakan solusi digital meliputi software development, digital marketing, social media management, dan branding untuk membantu bisnis berkembang dan mencapai kesuksesan di era digital.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Slameticon Digital Valey, PT Slameticon Digital Valey, digital solutions, software development, software development Indonesia, digital marketing, digital marketing Indonesia, social media management, branding, brand identity, digital transformation, custom software development, digital platform, business digital solutions')">
    <meta name="author" content="PT Slameticon Digital Valey">
    <meta name="robots" content="index, follow">

    {{-- Open Graph (Meta Sharing Social Media) --}}
    <meta property="og:site_name" content="Slameticon Digital Valey">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Slameticon Digital Valey | Digital Solutions & Software Development')">
    <meta property="og:description" content="@yield('og_description', 'Innovative and practical digital solutions through software development, digital marketing, social media management, and branding.')">
    <meta property="og:image" content="@yield('meta_image', asset('images/slameticon.png'))">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Slameticon Digital Valey | Digital Solutions & Software Development')">
    <meta name="twitter:description" content="@yield('og_description', 'Innovative and practical digital solutions through software development, digital marketing, social media management, and branding.')">
    <meta name="twitter:image" content="@yield('meta_image', asset('images/slameticon.png'))">

    {{-- Favicon & Icons --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/slameticon.png') }}">

    {{-- Asset CSS dari HTML --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/studio-style.css') }}"> --}}
    @vite(['resources/css/app.css', 'resources/js/studio-app.js'])

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
    {{-- <script src="{{ asset('js/studio-app.js') }}"></script> --}}
    @stack('scripts')
</body>
</html>