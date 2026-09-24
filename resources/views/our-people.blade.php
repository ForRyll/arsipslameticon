<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our People - Slameticon Digital Valley</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/slameticon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-black antialiased selection:bg-[#1112A2] selection:text-white">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- SPACER --}}
    <div class="pt-24 md:pt-28"></div>

    {{-- =========================================
       SECTION 1: OUR PEOPLE (FOUNDER)
       ========================================= --}}
    <section class="py-12 md:py-16 px-6 md:px-12 bg-white">
        <div class="max-w-[1000px] mx-auto w-full">

            {{-- JUDUL SECTION --}}
            <div class="text-center mb-12 md:mb-16">
                <h1 class="text-3xl md:text-4xl font-bold text-[#1112A2]">
                    {{ __('Our People') }}
                </h1>
            </div>

            @if ($founder)
                {{-- LAYOUT FOUNDER (FOTO KIRI, DETAIL KANAN) --}}
                <div class="flex flex-col md:flex-row items-center md:items-start gap-10 md:gap-14">

                    {{-- FOTO FOUNDER --}}
                    <div class="w-[280px] h-[320px] flex-shrink-0 overflow-hidden rounded-lg shadow-sm">
                        <img src="{{ !empty($founder->photo_url) ? asset('storage/' . $founder->photo_url) : asset('images/harryadin.png') }}" 
                             alt="{{ $founder->name }}" 
                             class="w-full h-full object-cover object-top">
                    </div>

                    {{-- INFORMASI FOUNDER --}}
                    <div class="flex-1 min-w-0 text-left">
                        <h2 class="text-3xl md:text-4xl font-bold text-[#1112A2] mb-1">
                            {{ $founder->name }}
                        </h2>

                        <p class="text-base font-semibold text-gray-800 mb-1">
                            {{ $founder->position?->getTranslation('name', app()->getLocale()) ?? $founder->position?->name }}
                        </p>

                        {{-- LAST EDUCATION --}}
                        @if (!empty($founder->last_education))
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-6">
                                {{ $founder->last_education }}
                            </p>
                        @endif

                        {{-- ABOUT --}}
                        <div class="text-xs md:text-sm text-gray-600 leading-relaxed space-y-3 text-justify max-w-[570px]">
                            {!! nl2br(e($founder->getTranslation('about', app()->getLocale()))) !!}
                        </div>
                    </div>

                </div>
            @endif

        </div>
    </section>


    {{-- =========================================
       SECTION 2: FOUNDER QUOTE (BLUE BANNER)
       ========================================= --}}
    @if ($founder && !empty($founder->getTranslation('quote', app()->getLocale())))
        <section class="w-full bg-[#1112A2] text-white py-14 px-6 md:px-12 my-6">
            <div class="max-w-[1000px] mx-auto text-center">
                <p class="text-lg md:text-2xl font-semibold leading-relaxed">
                    "{{ $founder->getTranslation('quote', app()->getLocale()) }}"
                </p>
            </div>
        </section>
    @endif


    {{-- =========================================
       SECTION 3: OUR TEAM (GRID CARDS)
       ========================================= --}}
    <section class="bg-white py-12 md:py-16 px-6 md:px-12 w-full">
        <div class="max-w-[1150px] mx-auto w-full">

            {{-- JUDUL TEAM --}}
            <div class="text-center mb-10 md:mb-14">
                <h2 class="text-2xl md:text-3xl font-bold text-[#1112A2]">
                    {{ __('Our Team') }}
                </h2>
            </div>

            {{-- TEAM GRID --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">

                {{-- Diurutkan berdasarkan display_order secara ascending --}}
                @forelse ($teams->sortBy('display_order') as $person)
                    <div class="bg-[#f8f9fb] border border-gray-100 rounded-2xl p-6 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-all duration-300">

                        <!-- FOTO PROFIL -->
                        <div class="w-32 h-32 md:w-36 md:h-36 rounded-2xl overflow-hidden mb-5 flex-shrink-0">
                            <img src="{{ !empty($person->photo_url) ? asset('storage/' . $person->photo_url) : asset('images/default-profile.png') }}" 
                                 alt="{{ $person->name }}"
                                 class="w-full h-full object-cover">
                        </div>

                        <!-- JABATAN / ROLE -->
                        <span class="text-[11px] font-bold text-[#1112A2] uppercase tracking-wider mb-1">
                            {{ $person->position?->getTranslation('name', app()->getLocale()) ?? $person->position?->name }}
                        </span>

                        <!-- NAMA -->
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            {{ $person->name }}
                        </h3>

                        <!-- DESKRIPSI -->
                        <p class="text-xs text-gray-500 leading-relaxed mb-6 flex-1 line-clamp-3">
                            {{ $person->getTranslation('about', app()->getLocale()) }}
                        </p>

                        <!-- SOCIAL MEDIA ICONS -->
                        <div class="flex items-center justify-center gap-4 text-gray-400 mt-auto">
                            @if(!empty($person->instagram_url))
                                <a href="{{ $person->instagram_url }}" target="_blank" class="hover:text-[#1112A2] transition-colors">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                </a>
                            @endif

                            @if(!empty($person->facebook_url))
                                <a href="{{ $person->facebook_url }}" target="_blank" class="hover:text-[#1112A2] transition-colors">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>
                                </a>
                            @endif

                            @if(!empty($person->x_url))
                                <a href="{{ $person->x_url }}" target="_blank" class="hover:text-[#1112A2] transition-colors">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                    </svg>
                                </a>
                            @endif
                        </div>

                    </div>
                @empty
                    <div class="col-span-full text-center py-8 text-gray-400">
                        Belum ada anggota tim.
                    </div>
                @endforelse

            </div>

        </div>
    </section>

    {{-- FOOTER --}}
    @include('partials.footer')

</body>
</html>