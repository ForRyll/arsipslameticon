<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slameticon — Modern Studio Experience</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/slameticon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Inter+Tight:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f2f2f0] text-[#171717] font-['Inter',sans-serif] overflow-x-hidden antialiased">

    @include('partials.navbar')

    {{-- =========================================================
         1. HERO SECTION
    ========================================================= --}}
    @php
        // Data company aktif (fallback jika tidak dikirim dari Controller)
        $company = $company ?? \App\Models\CompanyProfile::where('is_active', true)->first();
        $locale  = app()->getLocale();

        // Tagline & description via Spatie Translatable
        $rawTagline  = $company ? ($company->getTranslation('tagline', $locale, false) ?? $company->getTranslation('tagline', 'en', false) ?? '') : '';
        $description = $company ? ($company->getTranslation('description', $locale, false) ?? $company->getTranslation('description', 'en', false) ?? '') : '';

        // Produk dengan img_url terisi (fallback jika $products tidak dikirim dari Controller)
        $products = $products ?? \App\Models\Product::whereNotNull('img_url')->orderBy('display_order', 'asc')->get();
    @endphp

    <section class="relative min-h-screen w-full bg-[#f2f2f0] overflow-hidden pt-24 pb-16" id="home">
        <div class="max-w-[1440px] mx-auto min-h-[calc(100vh-100px)] relative px-6 md:px-12 flex flex-col">

{{-- Hero visual (marquee diagonal statis) --}}
<div class="relative order-1 w-full h-[500px] md:absolute md:inset-0 md:h-full overflow-hidden pointer-events-none">
    <div class="hero-diagonal-wrap">
        <div class="hero-track">
            {{-- Loop diduplikasi 2x untuk efek infinite seamless scroll --}}
            @for ($i = 0; $i < 2; $i++)
                <div class="hero-card"><img src="{{ asset('images/ig.png') }}" alt="Project Preview 1"></div>
                <div class="hero-card"><img src="{{ asset('images/jalu2.png') }}" alt="Project Preview 2"></div>
                <div class="hero-card"><img src="{{ asset('images/humanusia.png') }}" alt="Project Preview 3"></div>
                <div class="hero-card"><img src="{{ asset('images/jalu1.png') }}"  alt="Project Preview 4"></div>
                <div class="hero-card"><img src="{{ asset('images/etawa.png') }}"  alt="Project Preview 5"></div>
            @endfor
        </div>
    </div>
</div>

            {{-- Hero copy / tagline --}}
            <div class="relative z-20 order-2 md:absolute md:left-[5%] md:top-[10%] max-w-xl mt-10 md:mt-0 mb-0 md:mb-0">
                <h1 class="font-['Inter_Tight'] text-5xl sm:text-4xl md:text-[3.3rem] font-normal italic leading-[1.05] tracking-tight text-[#1218ae]">
                    @if ($locale === 'en' && !empty($rawTagline))
                        @php
                            $parts = array_filter(explode(',', $rawTagline));
                        @endphp

                        @foreach ($parts as $part)
                            @php
                                $trimmed   = trim($part);
                                $words     = explode(' ', $trimmed);
                                $highlight = array_pop($words);
                                $prefix    = implode(' ', $words);
                            @endphp

                            {{ $prefix }}
                            <strong class="font-bold not-italic text-[#1218ae]">{{ $highlight }},</strong>
                            @if (!$loop->last)
                                <br>
                            @endif
                        @endforeach
                    @else
                        {{-- Tampilan default untuk Bahasa Indonesia / lainnya --}}
                        {{ $rawTagline ?: 'Digging the Treasure, Embracing the Venture, Shaping the Future' }}
                    @endif
                </h1>
            </div>

            {{-- Hero info & CTA --}}
            <div class="relative z-30 order-3 max-w-md mt-10 md:mt-0 md:absolute md:right-[5%] md:bottom-[10%]">
<p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6 font-normal">
    {{ $companyProfile?->headline ?: 'Empowering businesses with cutting-edge digital solutions. We deliver innovative technology services tailored to your needs.' }}
</p>

                <a href="{{ url('/contact') }}"
                class="inline-flex items-center gap-2 px-7 py-3.5 rounded bg-[#1218ae] text-white text-sm font-semibold hover:bg-blue-900 transition shadow-lg shadow-blue-900/20">
                    <span>{{ __('Start Collaboration') }}</span>
                    <span>&#8599;</span>
                </a>
            </div>

        </div>

        <style>
            /* ---------- Hero diagonal marquee ---------- */
            .hero-diagonal-wrap {
                position: absolute;
                inset: -60% -60%;
                transform: rotate(40deg);
                transform-origin: center;
            }

            .hero-track {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 32px;
                width: 100%;
                animation: heroScrollLoop 40s linear infinite;
                will-change: transform;
            }

            .hero-card {
                width: 380px;
                height: 220px;
                border-radius: 4px;
                overflow: hidden;
                flex-shrink: 0;
                transform: rotate(-40deg);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            }

            .hero-card img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            @keyframes heroScrollLoop {
                from { transform: translateY(0); }
                to   { transform: translateY(calc(-50% - 16px)); }
            }

            @media (max-width: 767px) {
                .hero-diagonal-wrap { inset: -55% -75%; transform: rotate(40deg); }
                .hero-card          { width: 300px; height: 180px; }
                .hero-track         { gap: 28px; animation-duration: 26s; }

                @keyframes heroScrollLoop {
                    from { transform: translateY(0); }
                    to   { transform: translateY(calc(-50% - 14px)); }
                }
            }

            @media (max-width: 390px) {
                .hero-card  { width: 270px; height: 165px; }
                .hero-track { gap: 24px; animation-duration: 24s; }

                @keyframes heroScrollLoop {
                    from { transform: translateY(0); }
                    to   { transform: translateY(calc(-50% - 12px)); }
                }
            }
        </style>
    </section>

  {{-- =========================================================
         2. INTRODUCTION SECTION
    ========================================================= --}}
    <section class="py-24 px-6 md:px-12 bg-white" id="introduction">
        <div class="max-w-[1350px] mx-auto">

            {{-- Title & intro --}}
            <div class="flex flex-col md:flex-row gap-6 md:gap-12 mb-20">
                <div class="md:w-3/4">
                    <h2 class="text-3xl md:text-[2.65rem] leading-[1.3] font-medium text-[#1218ae] tracking-tight font-['Inter_Tight'] [text-align:justify]">
                        {{ __('Slameticon redefines the digital journey with a smarter, faster, and reliable approach to business growth. Combine modern technology with strategic execution to ensure real-time visibility.') }}
                    </h2>
                </div>
            </div>

            {{-- Image & stats --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-md overflow-hidden">
                    <img src="{{ asset('images/slameticon.png') }}" alt="Slameticon Model" class="w-full h-full object-cover">
                </div>

                <div class="flex flex-col justify-center">
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed mb-10 max-w-lg">
                        {{ __('Experience a seamless, integrated flow from innovative software development to impactful digital campaigns, powered by our end-to-end solutions designed for maximum efficiency and total transparency.') }}
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-6 border-b border-gray-200 pb-6">
                            <h3 class="text-4xl md:text-5xl font-normal font-['Inter_Tight'] text-[#1218ae] w-20 shrink-0">3+</h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed max-w-xs mt-1">
                                {{ __('Years of industry experience, delivering high-value digital solutions to clients on time.') }}
                            </p>
                        </div>

                        <div class="flex items-start gap-6 border-b border-gray-200 pb-6">
                            <h3 class="text-3xl md:text-4xl font-normal font-['Inter_Tight'] text-[#1218ae] w-20 shrink-0">100%</h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed max-w-xs mt-1">
                                {{ __('Client-focused dedication, powered by tailored strategies and data-driven insights.') }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="/about"
                           class="inline-flex items-center gap-2 px-6 py-3 rounded bg-[#1218ae] text-white text-xs font-semibold hover:bg-blue-900 transition shadow-sm">
                            <span>{{ __('Learn more about us') }}</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- =========================================================
         3. WHY CHOOSE US SECTION (Responsive Mobile Click)
    ========================================================= --}}
    @php
        $chooseUses = $chooseUses ?? \App\Models\ChooseUs::where('is_active', true)->orderBy('sort_order', 'asc')->get();
    @endphp

    <section class="py-24 px-6 md:px-16 bg-white" id="why-choose-us">
        <div class="max-w-[1470px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

                {{-- Text & accordion list --}}
                <div>
                    <span class="text-xs md:text-sm font-bold text-[#1218ae] tracking-wider uppercase block mb-4">
                        {{ __('Why choose us') }}
                    </span>
                    <h2 class="text-3xl sm:text-4xl md:text-[2.6rem] font-medium text-gray-900 mb-10 leading-[1.15] font-['Inter_Tight']">
                        {{ __('Elevating Your Strategy With Measurable Impact') }}
                    </h2>
                    
                    <div class="space-y-0">
                        @forelse ($chooseUses as $index => $item)
                            @php
                                $itemTitle = $item->getTranslation('title', $locale, false) ?? $item->getTranslation('title', 'en', false) ?? '';
                                $itemDesc  = $item->getTranslation('description', $locale, false) ?? $item->getTranslation('description', 'en', false) ?? '';
                            @endphp

                            {{-- Ditambahkan onclick dan class identifikasi --}}
                            <div class="accordion-item border-t border-gray-200 {{ $loop->last ? 'border-b' : '' }} py-6 cursor-pointer" onclick="toggleAccordion(this)">
                                <div class="flex items-center gap-5">
                                    <span class="text-base font-bold text-[#1218ae] w-6">{{ $index + 1 }}</span>
                                    
                                    {{-- group-hover dihapus, dikendalikan via JS --}}
                                    <h4 class="accordion-title text-base md:text-lg font-semibold text-gray-800 transition flex-1">
                                        {{ $itemTitle }}
                                    </h4>
                                    
                                    <span class="accordion-icon-wrapper text-gray-400 transition-all duration-300">
                                        <svg class="accordion-icon w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                                        </svg>
                                    </span>
                                </div>

                                {{-- group-hover:grid-rows-[1fr] diganti menjadi status default 0fr --}}
                                <div class="accordion-content grid grid-rows-[0fr] transition-all duration-300 ease-in-out">
                                    <div class="overflow-hidden">
                                        <p class="pt-3 pl-11 text-xs md:text-sm text-gray-600 leading-relaxed max-w-lg">
                                            {{ $itemDesc }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 py-4">No information available at the moment.</p>
                        @endforelse
                    </div>
                </div>

                {{-- Illustration --}}
                <div class="w-full h-full min-h-[420px] lg:min-h-[520px] flex items-center justify-center p-8">
                    <img src="{{ asset('images/slameticon.png') }}" alt="Why Choose Us" class="w-full h-full object-contain">
                </div>

            </div>
        </div>
    </section>

    {{-- Tambahkan script ini tepat di bawah tag </section> atau sebelum </body> --}}
    <script>
        function toggleAccordion(element) {
            const content = element.querySelector('.accordion-content');
            const title = element.querySelector('.accordion-title');
            const iconWrapper = element.querySelector('.accordion-icon-wrapper');
            const icon = element.querySelector('.accordion-icon');

            // Cek apakah sedang terbuka
            const isOpen = content.classList.contains('grid-rows-[1fr]');

            // Logika tutup semua accordion lainnya terlebih dahulu (Opsional: agar terlihat lebih rapi)
            document.querySelectorAll('.accordion-item').forEach(item => {
                item.querySelector('.accordion-content').classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
                item.querySelector('.accordion-title').classList.remove('text-[#1218ae]');
                item.querySelector('.accordion-icon-wrapper').classList.remove('text-[#1218ae]');
                item.querySelector('.accordion-icon').classList.remove('rotate-90');
            });

            // Jika sebelumnya tertutup, maka buka
            if (!isOpen) {
                content.classList.replace('grid-rows-[0fr]', 'grid-rows-[1fr]');
                title.classList.add('text-[#1218ae]');
                iconWrapper.classList.add('text-[#1218ae]');
                icon.classList.add('rotate-90');
            }
        }
    </script>

{{-- =========================================================
     4. PORTFOLIO / PROJECTS SECTION
========================================================= --}}
<section class="py-24 bg-white px-6 md:px-12 lg:px-16 w-full" id="portfolio-projects">
    <div class="max-w-[1480px] mx-auto w-full">

        {{-- Header & tab buttons --}}
        <div class="flex flex-col items-center mb-14">
            <h2 class="text-3xl md:text-4xl font-semibold text-[#1112A2] mb-10 font-['Inter_Tight']">
                Portfolio / Projects
            </h2>

            {{-- Tab dinamis berdasarkan kategori produk --}}
            <div class="flex flex-wrap justify-center gap-2 md:gap-3">
                @foreach ($categories as $index => $category)
                    @php
                        $tabId    = 'tab-' . $category->id;
                        $isActive = $index === 0;

                        $catName = is_array($category->name)
                            ? ($category->name[app()->getLocale()] ?? reset($category->name))
                            : $category->name;
                    @endphp

                    <button onclick="switchPortfolioTab('{{ $tabId }}')" data-target="{{ $tabId }}"
                            class="portfolio-tab {{ $isActive ? 'active bg-[#1112A2] text-white' : 'text-gray-400 hover:text-[#1112A2] hover:bg-gray-100' }} px-4 py-2.5 text-[14px] md:text-[12px] font-medium rounded-lg transition-all duration-300">
                        {!! nl2br(e($catName)) !!}
                    </button>
                @endforeach
            </div>
        </div>

        {{-- Tab contents --}}
        <div class="relative">
            @foreach ($categories as $index => $category)
                @php
                    $tabId    = 'tab-' . $category->id;
                    $isActive = $index === 0;
                    $isDarkBg = $index % 2 === 0;

                    $catName = is_array($category->name)
                        ? ($category->name[app()->getLocale()] ?? reset($category->name))
                        : $category->name;
                @endphp

                <div id="{{ $tabId }}" class="portfolio-content animate-fade-in {{ $isActive ? 'block' : 'hidden' }}">
                    <div class="{{ $isDarkBg ? 'bg-[#1112A2] text-white' : 'bg-[#f0f2f5] text-gray-900' }} rounded-2xl p-6 md:p-10 lg:p-12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

                            {{-- Left — workphases --}}
                            <div>
                                <div class="mb-10">
                                    <span class="text-[14px] font-semibold {{ $isDarkBg ? 'text-white/60' : 'text-gray-400' }} uppercase tracking-widest">
                                        Portfolio
                                    </span>
                                    <h3 class="text-3xl md:text-5xl font-medium mt-3 leading-[1.05] font-['Inter_Tight']">
                                        {!! nl2br(e($catName)) !!}
                                    </h3>
                                </div>

                                <div class="mb-5">
                                    <span class="text-[14px] font-bold {{ $isDarkBg ? 'text-white/60' : 'text-gray-400' }} tracking-widest uppercase">
                                        Workphase
                                    </span>
                                </div>

                                <div class="flex flex-col">
                                    @forelse ($category->workPhases->sortBy('display_order') as $phaseIndex => $phase)
                                        @php
                                            $phaseTitle = is_array($phase->title)
                                                ? ($phase->title[app()->getLocale()] ?? reset($phase->title))
                                                : $phase->title;

                                            $phaseDesc = is_array($phase->description)
                                                ? ($phase->description[app()->getLocale()] ?? reset($phase->description))
                                                : $phase->description;

                                            $isLast = $loop->last;
                                        @endphp

                                        <div class="workphase-item group border-t {{ $isLast ? 'border-b' : '' }} {{ $isDarkBg ? 'border-white/20' : 'border-gray-300' }} py-4 cursor-pointer">
                                            <div class="flex items-center gap-4">
                                                <span class="workphase-number w-[26px] h-[26px] shrink-0 rounded-full border {{ $isDarkBg ? 'border-white/50 text-white' : 'border-gray-400 text-gray-700' }} flex items-center justify-center text-[10px] font-bold transition-all duration-300">
                                                    {{ $phaseIndex + 1 }}
                                                </span>

                                                <h4 class="text-[13px] md:text-[14px] font-medium flex-1">
                                                    {{ $phaseTitle }}
                                                </h4>

                                                <span class="workphase-arrow {{ $isDarkBg ? 'text-white/40' : 'text-gray-400' }} transition-all duration-300">
                                                    &rarr;
                                                </span>
                                            </div>

                                            @if ($phaseDesc)
                                                <div class="workphase-description grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                                    <div class="overflow-hidden">
                                                        <p class="pt-3 pl-[42px] pr-5 text-[14px] {{ $isDarkBg ? 'text-white/65' : 'text-gray-600' }} leading-relaxed text-justify">
                                                            {{ $phaseDesc }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @empty
                                        <p class="text-sm opacity-60">Belum ada workphase untuk kategori ini.</p>
                                    @endforelse
                                </div>
                            </div>

                            {{-- Right — selected projects marquee --}}
                            <div>
                                <div class="flex items-center justify-between mb-5">
                                    <span class="text-[14px] font-bold {{ $isDarkBg ? 'text-white/60' : 'text-gray-400' }} tracking-widest uppercase">
                                        {{ __('Selected Projects') }}
                                    </span>
                                    <span class="text-[10px] {{ $isDarkBg ? 'text-white/40' : 'text-gray-400' }}">
                                        {{ __('Click to pause') }}
                                    </span>
                                </div>

                                <div class="project-marquee-container">
                                    <div class="project-marquee">
                                        @php
                                            $products = $category->products->sortBy('display_order');
                                        @endphp

                                        @forelse ($products as $product)
                                            @php
                                                $prodName = is_array($product->name)
                                                    ? ($product->name[app()->getLocale()] ?? reset($product->name))
                                                    : $product->name;

                                                $prodSubName = is_array($product->sub_name ?? null)
                                                    ? ($product->sub_name[app()->getLocale()] ?? reset($product->sub_name))
                                                    : ($product->sub_name ?? $prodName);

                                                $prodDesc = is_array($product->description)
                                                    ? ($product->description[app()->getLocale()] ?? reset($product->description))
                                                    : $product->description;

                                                // Batas karakter dinaikkan; pemotongan baris diatur lewat CSS line-clamp
                                                $prodDescShort = \Illuminate\Support\Str::limit(strip_tags($prodDesc ?? ''), 400);

                                                $imageSrc = $product->img_url ? asset('storage/' . $product->img_url) : asset('images/default-project.png');
                                            @endphp

                                            <div onclick="openProjectModal(
                                                    '{{ addslashes($prodName) }}',
                                                    '{{ addslashes($prodSubName ?? '') }}',
                                                    '{{ addslashes($prodDesc ?? '') }}',
                                                    '{{ addslashes($catName) }}',
                                                    '{{ $imageSrc }}',
                                                    '{{ addslashes($product->link_url ?? '') }}'
                                                )" class="project-item cursor-pointer">
                                                <img src="{{ $imageSrc }}" alt="{{ $prodName }}" class="project-image">
                                                <div class="project-overlay">
                                                    <div class="project-overlay-content">
                                                        <h4 class="project-overlay-title">{{ $prodName }}</h4>
                                                        <p class="project-overlay-desc">{{ $prodDescShort }}</p>
                                                        <span class="project-overlay-cta">View Project &rarr;</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <p class="text-sm opacity-60">Belum ada proyek untuk kategori ini.</p>
                                        @endforelse

                                        {{-- Duplikasi list produk untuk efek infinite loop --}}
                                        @if ($products->count() > 0)
                                            @foreach ($products as $product)
                                                @php
                                                    $prodName = is_array($product->name)
                                                        ? ($product->name[app()->getLocale()] ?? reset($product->name))
                                                        : $product->name;

                                                    $prodSubName = is_array($product->sub_name ?? null)
                                                        ? ($product->sub_name[app()->getLocale()] ?? reset($product->sub_name))
                                                        : ($product->sub_name ?? $prodName);

                                                    $prodDesc = is_array($product->description)
                                                        ? ($product->description[app()->getLocale()] ?? reset($product->description))
                                                        : $product->description;

                                                    $prodDescShort = \Illuminate\Support\Str::limit(strip_tags($prodDesc ?? ''), 400);

                                                    $imageSrc = $product->img_url ? asset('storage/' . $product->img_url) : asset('images/default-project.png');
                                                @endphp

                                                <div onclick="openProjectModal(
                                                        '{{ addslashes($prodName) }}',
                                                        '{{ addslashes($prodSubName ?? '') }}',
                                                        '{{ addslashes($prodDesc ?? '') }}',
                                                        '{{ addslashes($catName) }}',
                                                        '{{ $imageSrc }}',
                                                        '{{ addslashes($product->link_url ?? '') }}'
                                                    )" class="project-item cursor-pointer">
                                                    <img src="{{ $imageSrc }}" alt="{{ $prodName }}" class="project-image">
                                                    <div class="project-overlay">
                                                        <div class="project-overlay-content">
                                                            <h4 class="project-overlay-title">{{ $prodName }}</h4>
                                                            <p class="project-overlay-desc">{{ $prodDescShort }}</p>
                                                            <span class="project-overlay-cta">View Project &rarr;</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

{{-- =========================================================
     MODAL POPUP (Project Detail)
========================================================= --}}
<div id="projectModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 backdrop-blur-sm p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full overflow-hidden relative animate-modal text-gray-900 shadow-2xl max-h-[90vh] flex flex-col">

        <button onclick="closeProjectModal()"
                class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-black/60 hover:bg-black/80 text-white text-xl leading-none flex items-center justify-center transition">
            &times;
        </button>

        <div class="w-full h-64 md:h-80 bg-gray-50 flex items-center justify-center overflow-hidden shrink-0">
            <img id="modalProjectImage" src="" alt="" class="max-h-full max-w-full object-contain p-10">
        </div>

        <div class="p-6 md:p-8 overflow-y-auto">
            <span id="modalProjectCategory" class="text-xs font-bold text-[#1112A2] uppercase tracking-wider block mb-2"></span>
            <h3 id="modalProjectTitle" class="text-2xl md:text-3xl font-bold font-['Inter_Tight'] mb-4"></h3>
            <p id="modalProjectDescription" class="text-sm text-gray-600 leading-relaxed whitespace-pre-line"></p>

            <div class="border-t border-gray-200 mt-6 pt-5">
                <span class="text-[11px] font-semibold text-gray-400 uppercase tracking-wider block mb-1">
                    {{ __('Project') }}
                </span>
                <span id="modalProjectSubName" class="text-sm font-medium text-gray-900"></span>
            </div>

            {{-- PROJECT LINK (disembunyikan kalau link_url kosong) --}}
            <a id="modalProjectLink" href="#" target="_blank" rel="noopener noreferrer"
                class="hidden mt-6 items-center gap-3 max-w-full border border-[#1112A2]/20 rounded-md px-4 py-3 text-[#1112A2] hover:bg-[#1112A2] hover:text-white transition group">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.5 6H18v4.5M18 6l-8 8M10.5 6H7a2 2 0 00-2 2v9a2 2 0 002 2h9a2 2 0 002-2v-3.5" />
                </svg>
                <span class="flex flex-col min-w-0">
                    <span class="text-[10px] uppercase tracking-wide font-semibold opacity-70">{{ __('Visit Project') }}</span>
                    <span id="modalProjectLinkText" class="text-[13px] font-medium truncate"></span>
                </span>
            </a>
        </div>
    </div>
</div>

{{-- =========================================================
     5. SERVICES SECTION
========================================================= --}}
@php
    $locale   = app()->getLocale();
    $services = $services ?? \App\Models\Service::orderBy('display_order', 'asc')->get();
@endphp

<section class="py-24 bg-white px-6 md:px-16 w-full text-gray-900" id="services">
    <div class="max-w-[1400px] mx-auto w-full">

        <div class="text-center mb-4">
            <h2 class="text-3xl md:text-4xl font-semibold text-[#1112A2] mb-10 font-['Inter_Tight']">
                {{ __('Services') }}
            </h2>
        </div>

        <div class="max-w-[1100px] mx-auto text-center mb-16">
            <p class="text-sm md:text-base font-medium text-gray-600 leading-relaxed">
                {{ __('PT Slameticon Digital Valey combines technology, creativity, and strategy to help businesses thrive in the digital era through end-to-end solutions in software development, digital marketing, social media management, and branding.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse ($services as $index => $service)
                @php
                    $serviceTitle = $service->getTranslation('title', $locale, false) ?? $service->getTranslation('title', 'en', false) ?? '';
                    $serviceDesc  = $service->getTranslation('description', $locale, false) ?? $service->getTranslation('description', 'en', false) ?? '';

                    $isEven      = $index % 2 === 0;
                    $cardBg      = $isEven ? 'bg-[#f0f2f5] text-gray-900 shadow-sm' : 'bg-[#1112A2] text-white shadow-lg';
                    $textColor   = $isEven ? 'text-gray-900' : 'text-white';
                    $descColor   = $isEven ? 'text-gray-600' : 'text-white/80';
                    $iconOpacity = $isEven ? 'opacity-30 text-gray-800' : 'opacity-30 text-white';

                    $iconPath = $service->icon_url
                        ? (\Illuminate\Support\Str::startsWith($service->icon_url, ['http://', 'https://'])
                            ? $service->icon_url
                            : asset('storage/' . $service->icon_url))
                        : null;
                @endphp

                <div class="{{ $cardBg }} rounded-2xl p-8 md:p-10 flex flex-col justify-between min-h-[460px] transition-transform duration-300 hover:-translate-y-1">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold min-h-[64px] mb-6 font-['Inter_Tight'] {{ $textColor }}">
                            {!! nl2br(e($serviceTitle)) !!}
                        </h3>
                        <p class="text-xs md:text-sm {{ $descColor }} leading-relaxed">
                            {{ $serviceDesc }}
                        </p>
                    </div>

                    <div class="w-full h-28 mt-6 flex items-end justify-start {{ $iconOpacity }}">
                        @if ($iconPath)
                            <img src="{{ $iconPath }}" alt="{{ $serviceTitle }}" class="w-24 h-24 object-contain">
                        @else
                            @if ($index % 4 === 0)
                                <svg class="w-24 h-24" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 9l-2 2 2 2m3-4l2 2-2 2"></path>
                                </svg>
                            @elseif ($index % 4 === 1)
                                <svg class="w-24 h-24" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.5l4.5-4.5 3 3L18 4.5m0 0h-3.75M18 4.5v3.75"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18"></path>
                                </svg>
                            @elseif ($index % 4 === 2)
                                <svg class="w-24 h-24" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
                                    <rect x="7" y="2" width="10" height="20" rx="2" stroke-linecap="round" stroke-linejoin="round"></rect>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 18h2"></path>
                                </svg>
                            @else
                                <svg class="w-24 h-24" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            @endif
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    No services available.
                </div>
            @endforelse
        </div>

    </div>
</section>

<script>
    /* PORTFOLIO — TAB SWITCHER */
    function switchPortfolioTab(tabId) {
        document.querySelectorAll('.portfolio-content').forEach((content) => {
            content.classList.add('hidden');
            content.classList.remove('block');
        });

        const targetContent = document.getElementById(tabId);
        if (targetContent) {
            targetContent.classList.remove('hidden');
            targetContent.classList.add('block');
        }

        document.querySelectorAll('.portfolio-tab').forEach((tab) => {
            tab.classList.remove('bg-[#1112A2]', 'text-white', 'active');
            tab.classList.add('text-gray-400');
        });

        const activeTab = document.querySelector(`button[data-target="${tabId}"]`);
        if (activeTab) {
            activeTab.classList.remove('text-gray-400');
            activeTab.classList.add('bg-[#1112A2]', 'text-white', 'active');
        }
    }

    /* PORTFOLIO — PROJECT MODAL */
    function openProjectModal(name, subName, description, categoryName, image, link) {
        const modal = document.getElementById('projectModal');

        document.getElementById('modalProjectTitle').textContent = name;
        document.getElementById('modalProjectSubName').textContent = subName;
        document.getElementById('modalProjectDescription').textContent = description;
        document.getElementById('modalProjectCategory').textContent = categoryName;
        document.getElementById('modalProjectImage').src = image;

        // Link project
        const linkEl = document.getElementById('modalProjectLink');
        const linkText = document.getElementById('modalProjectLinkText');
        let url = (link || '').trim();

        if (url && !/^https?:\/\//i.test(url)) {
            url = 'https://' + url; // kalau lupa tulis http(s)://
        }

        let validLink = false;
        try {
            const parsed = new URL(url);
            validLink = ['http:', 'https:'].includes(parsed.protocol);
        } catch (e) {}

        if (validLink) {
            linkEl.href = url;
            linkText.textContent = url.replace(/^https?:\/\//i, '').replace(/\/$/, '');
            linkEl.classList.remove('hidden');
            linkEl.classList.add('inline-flex');
        } else {
            linkEl.removeAttribute('href');
            linkEl.classList.remove('inline-flex');
            linkEl.classList.add('hidden');
        }

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
    }

    function closeProjectModal() {
        const modal = document.getElementById('projectModal');

        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
    }

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeProjectModal();
        }
    });

    /* PORTFOLIO — MOBILE WORKPHASE TOGGLE */
    document.querySelectorAll('.workphase-item').forEach((item) => {
        item.addEventListener('click', function () {
            if (window.innerWidth <= 768) {
                this.classList.toggle('mobile-open');
            }
        });
    });
</script>

<style>
    .animate-fade-in {
        animation: portfolioFade 0.4s ease-in-out;
    }

    @keyframes portfolioFade {
        from { opacity: 0; transform: translateY(10px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* Workphase Hover Dynamic Theme Styling */
    .bg-\[\#1112A2\] .workphase-item:hover .workphase-arrow {
        transform: rotate(90deg);
        color: #ffffff;
    }

    .bg-\[\#1112A2\] .workphase-item:hover .workphase-number {
        background: #ffffff;
        color: #1112A2;
        border-color: #ffffff;
    }

    .bg-\[\#f0f2f5\] .workphase-item:hover .workphase-arrow {
        transform: rotate(90deg);
        color: #1112A2;
    }

    .bg-\[\#f0f2f5\] .workphase-item:hover .workphase-number {
        background: #1112A2;
        color: #ffffff;
        border-color: #1112A2;
    }

    @media (max-width: 768px) {
        .workphase-item.mobile-open .workphase-description {
            grid-template-rows: 1fr;
        }

        .workphase-item.mobile-open .workphase-arrow {
            transform: rotate(90deg);
        }

        .bg-\[\#1112A2\] .workphase-item.mobile-open .workphase-number {
            background: #ffffff;
            color: #1112A2;
            border-color: #ffffff;
        }

        .bg-\[\#f0f2f5\] .workphase-item.mobile-open .workphase-number {
            background: #1112A2;
            color: #ffffff;
            border-color: #1112A2;
        }
    }

    /* ===== Marquee ===== */
    .project-marquee-container {
        /* Atur kecepatan di sini: makin besar = makin pelan */
        --marquee-duration: 40s;

        width: 100%;
        height: 520px;
        overflow: hidden;
        position: relative;
        border-radius: 14px;
    }

    .project-marquee {
        display: flex;
        flex-direction: column;
        gap: 16px;
        animation: verticalProjectScroll var(--marquee-duration) linear infinite;
    }

    .project-marquee-container:hover .project-marquee {
        animation-play-state: paused;
    }

    .project-item {
        width: 100%;
        aspect-ratio: 1.15 / 1;
        flex-shrink: 0;
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        background: white;
        padding: 14px;
        cursor: pointer;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .project-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
        transition: transform 0.5s ease, filter 0.5s ease;
    }

    .project-item:hover .project-image {
        transform: scale(1.04);
        filter: blur(6px) brightness(0.6);
    }

    .project-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 22px;
        text-align: center;
        background: rgba(17, 18, 162, 0.25);
        opacity: 0;
        transition: opacity 0.35s ease;
    }

    .project-item:hover .project-overlay {
        opacity: 1;
    }

    .project-overlay-content {
        color: white;
        max-width: 90%;
    }

    .project-overlay-title {
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 6px;
        line-height: 1.3;
    }

    /* Deskripsi hover: maksimal 5 baris di desktop */
    .project-overlay-desc {
        font-size: 11px;
        line-height: 1.5;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 12px;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .project-overlay-cta {
        background: white;
        color: #1112A2;
        padding: 8px 14px;
        border-radius: 6px;
        font-size: 10px;
        font-weight: 600;
        display: inline-block;
    }

    @keyframes verticalProjectScroll {
        0%   { transform: translateY(0); }
        100% { transform: translateY(calc(-50% - 8px)); }
    }

    .animate-modal {
        animation: modalIn 0.3s ease-out;
    }

    @keyframes modalIn {
        from { opacity: 0; transform: scale(0.94) translateY(10px); }
        to   { opacity: 1; transform: scale(1) translateY(0); }
    }

    @media (max-width: 768px) {
        .project-marquee-container { --marquee-duration: 60s; height: 430px; }
        .project-item              { aspect-ratio: 1.1 / 1; padding: 10px; }
        .project-overlay-title     { font-size: 13px; }

        /* Deskripsi hover: maksimal 2 baris di mobile */
        .project-overlay-desc {
            font-size: 10px;
            -webkit-line-clamp: 2;
            line-clamp: 2;
        }
    }
</style>

{{-- =========================================================
         6. CLIENTS & PARTNERS SECTION
    ========================================================= --}}
    @php
        $clients = $clients ?? \App\Models\Client::all();

        // Resolusi path logo client (URL eksternal / storage / default)
        $resolveLogoSrc = function ($client) {
            $path = $client->logo_url;

            if (!$path) {
                return asset('images/default-logo.png');
            }

            if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
                return $path;
            }

            if (str_starts_with($path, 'storage/')) {
                return asset($path);
            }

            return asset('storage/' . ltrim($path, '/'));
        };

        // Memecah collection client menjadi grup-grup yang berisi maksimal 10 client per baris
        $clientChunks = $clients->chunk(10);
    @endphp

    <section class="py-16 bg-white overflow-hidden" id="clients-partners">

        <div class="text-center max-w-7xl mx-auto mb-12 px-6">
            <h2 class="text-3xl md:text-4xl font-semibold text-[#1112A2] mb-10 font-['Inter_Tight']">
                {{ __('Our Clients & Partners') }}
            </h2>

            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                {{ __('From growing businesses to established organizations, we collaborate with clients and partners across diverse industries. By combining technology, creativity, and strategic thinking, we build solutions that address real business needs, create meaningful impact, and drive sustainable growth.') }}
            </p>
        </div>

        @if ($clients->isNotEmpty())
            <div class="space-y-10">

                @foreach ($clientChunks as $index => $chunk)
                    @php
                        // Index genap (0, 2, 4...) -> bergerak ke KANAN
                        // Index ganjil (1, 3, 5...) -> bergerak ke KIRI
                        $directionClass = ($index % 2 === 0) ? 'marquee-right' : 'marquee-left';
                    @endphp

                    <div class="marquee-wrapper">
                        <div class="marquee {{ $directionClass }}">
                            {{-- 2 grup diputar untuk infinite loop mulus --}}
                            @for ($g = 0; $g < 2; $g++)
                                <div class="marquee-group">
                                    @foreach ($chunk as $client)
                                        @php $logoSrc = $resolveLogoSrc($client); @endphp

                                        @if ($client->website_url)
                                            <a href="{{ $client->website_url }}" target="_blank" rel="noopener noreferrer" class="marquee-item">
                                                <img src="{{ $logoSrc }}" alt="{{ $client->name }}">
                                            </a>
                                        @else
                                            <div class="marquee-item">
                                                <img src="{{ $logoSrc }}" alt="{{ $client->name }}">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endfor
                        </div>
                    </div>
                @endforeach

            </div>
        @else
            <div class="text-center text-gray-400 text-sm">
                Belum ada data client yang ditambahkan.
            </div>
        @endif
    </section>

    <style>
        .marquee-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
            display: flex;
        }

        .marquee-wrapper::before,
        .marquee-wrapper::after {
            content: "";
            position: absolute;
            top: 0;
            width: 100px;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .marquee-wrapper::before {
            left: 0;
            background: linear-gradient(to right, white, transparent);
        }

        .marquee-wrapper::after {
            right: 0;
            background: linear-gradient(to left, white, transparent);
        }

        .marquee {
            display: flex;
            width: max-content;
            will-change: transform;
        }

        .marquee-group {
            display: flex;
            align-items: center;
            justify-content: space-around;
            gap: 60px;
            padding-right: 60px;
            flex-shrink: 0;
            min-width: 100vw; /* grup selalu memenuhi minimal 100% lebar viewport */
        }

        .marquee-item {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .marquee-group img {
            height: 65px;
            width: auto;
            max-width: 180px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .marquee-left {
            animation: marqueeLeft 25s linear infinite;
        }

        .marquee-right {
            animation: marqueeRight 25s linear infinite;
        }

        .marquee-wrapper:hover .marquee {
            animation-play-state: paused;
        }

        @keyframes marqueeLeft {
            0%   { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }

        @keyframes marqueeRight {
            0%   { transform: translateX(-50%); }
            100% { transform: translateX(0%); }
        }
    </style>

    {{-- =========================================================
         7. CTA SECTION
    ========================================================= --}}
    <section class="bg-white pt-12 pb-16 px-6 md:px-12 w-full" id="cta">
        <div class="max-w-[1200px] mx-auto w-full">
            <div class="bg-[#1112A2] rounded-2xl p-10 md:p-16 text-center relative overflow-hidden shadow-2xl">

            <div class="inline-block bg-white text-gray-950 text-[14px] font-bold px-4 py-1.5 rounded-full mb-6 tracking-wide shadow-sm">
                {{ __('Ready to') }}
            </div>

            <h2 class="text-3xl md:text-5xl font-semibold font-['Inter_Tight'] tracking-tight mb-4 text-white">
                {{ __('Dominate the Digital Market?') }}
            </h2>
            <p class="text-[13px] text-white/80 mb-8 max-w-md mx-auto">
                {{ __('Contact our team of experts for a free digital audit') }}
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="/contact"
                class="bg-white text-[#1112A2] hover:bg-gray-100 text-[13px] font-semibold px-6 py-3 rounded-lg transition shadow-sm">
                    {{ __('Start Collaboration') }}
                </a>
            </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         8. FOOTER
    ========================================================= --}}
    <footer class="bg-[#0f1423] pt-20 pb-8 px-6 md:px-12 w-full font-['Inter_Tight']" id="footer">
        @include('partials.footer')
    </footer>

    {{-- =========================================================
         9. BACK TO TOP BUTTON
    ========================================================= --}}
    <button id="backToTopBtn" onclick="scrollToTop()"
            class="fixed bottom-6 right-6 z-50 bg-[#1112A2] text-white w-11 h-11 rounded-full flex items-center justify-center shadow-lg opacity-0 pointer-events-none transition-all duration-300 hover:bg-blue-900 hover:scale-110 focus:outline-none"
            title="Kembali ke atas">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const backToTopBtn = document.getElementById('backToTopBtn');
            if (!backToTopBtn) {
                return;
            }

            // Munculkan tombol saat halaman di-scroll ke bawah sejauh 400px
            window.addEventListener('scroll', () => {
                if (window.scrollY > 400) {
                    backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                    backToTopBtn.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto');
                    backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                }
            }, { passive: true });

            // Scroll mulus ke halaman paling atas
            window.scrollToTop = function () {
                const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

                window.scrollTo({
                    top: 0,
                    behavior: prefersReducedMotion ? 'auto' : 'smooth',
                });
            };
        });
    </script>

</body>

</html>