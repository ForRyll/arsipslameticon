<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/slameticon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-black antialiased selection:bg-[#1112A2] selection:text-white">

    {{-- ==========================================
         NAVBAR
    =========================================== --}}
    @include('partials.navbar')


    {{-- ==========================================
         NAVBAR SPACING
    =========================================== --}}
    <div class="pt-24 md:pt-28"></div>



    {{-- ==========================================
         SECTION 1 : SERVICES
    =========================================== --}}

<section class="py-24 bg-white px-6 md:px-16 w-full text-gray-900" id="services">
    <div class="max-w-[1400px] mx-auto w-full">

        <!-- Subtitle -->
        <div class="text-center mb-4">
            <h2 class="text-3xl md:text-5xl font-semibold text-[#1112A2] mb-10 font-['Inter_Tight']">
                {{ __('Services') }}
            </h2>
        </div>

        <div class="max-w-[1100px] mx-auto text-center mb-16">
            <p class="text-sm md:text-base font-medium text-gray-600 leading-relaxed">
                {{ __('PT Slameticon Digital Valey combines technology, creativity, and strategy to help businesses thrive in the digital era through end-to-end solutions in software development, digital marketing, social media management, and branding.') }}
            </p>
        </div>

        @php
            // Helper parsing aman untuk field Spatie / JSON / Array
            $parseTrans = function ($item, $field) {
                if (!$item) return '';
                if (method_exists($item, 'getTranslation')) {
                    $val = $item->getTranslation($field, app()->getLocale(), false);
                    if ($val) return $val;
                }
                $raw = $item->{$field} ?? null;
                if (is_array($raw)) {
                    return $raw[app()->getLocale()] ?? $raw['en'] ?? $raw['id'] ?? reset($raw) ?? '';
                }
                return $raw ?? '';
            };
        @endphp

        <!-- 4 Cards Grid (Dynamic) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @forelse ($services as $index => $service)
                @php
                    $title       = $parseTrans($service, 'title');
                    $description = $parseTrans($service, 'description');
                    
                    // Pola selang-seling warna kartu: Indeks Ganjil = Abu-abu, Indeks Genap = Biru
                    $isBlue = ($index % 2 !== 0); 
                @endphp

                <div class="{{ $isBlue ? 'bg-[#1112A2] text-white shadow-lg' : 'bg-[#f0f2f5] text-gray-900 shadow-sm' }} rounded-2xl p-8 md:p-10 flex flex-col justify-between min-h-[460px] transition-transform duration-300 hover:-translate-y-1">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold min-h-[64px] mb-6 font-['Inter_Tight'] leading-snug">
                            {!! nl2br(e($title)) !!}
                        </h3>
                        <p class="text-xs md:text-sm {{ $isBlue ? 'text-white/80' : 'text-gray-600' }} leading-relaxed">
                            {{ $description }}
                        </p>
                    </div>

                    <!-- ILUSTRASI IKON -->
                    <div class="w-full h-28 mt-6 flex items-end justify-start opacity-30 {{ $isBlue ? 'text-white' : 'text-gray-800' }}">
                        @if (!empty($service->icon_url))
                            <!-- Jika ada icon_url di database -->
                            <img src="{{ asset('storage/' . $service->icon_url) }}" alt="{{ $title }}" class="w-24 h-24 object-contain filter {{ $isBlue ? 'invert-0' : '' }}">
                        @else
                            <!-- Default Fallback SVG Icon jika icon_url kosong -->
                            <svg class="w-24 h-24" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 9l-2 2 2 2m3-4l2 2-2 2"></path>
                            </svg>
                        @endif
                    </div>
                </div>

            @empty
                <div class="col-span-full text-center py-12 text-gray-400">
                    Belum ada data layanan.
                </div>
            @endforelse

        </div>

    </div>
</section>



    {{-- ==========================================
         SECTION 2
         INTEGRATED DIGITAL SOLUTIONS
    =========================================== --}}

    <section class="bg-[#f8f8fa] px-6 py-20 md:px-12 md:py-24">

        <div class="mx-auto max-w-[1200px]">

            <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-16">


                {{-- LEFT : IMAGE COLLAGE --}}

<div class="relative mx-auto w-full max-w-[520px] md:mx-0">

    {{-- Main Image (Company Logo) --}}
    <div class="aspect-square w-[78%] overflow-hidden">
        @php
            $mainImage = !empty($company?->logo_url) 
                ? asset('storage/' . $company->logo_url) 
                : asset('images/slameticon.png');
        @endphp

        <img src="{{ $mainImage }}" 
             alt="{{ $company?->name ?? 'Digital Business Solutions' }}"
             class="h-full w-full object-cover">
    </div>

    {{-- Small Image (Produk IT Pertama) --}}
    <div class="absolute bottom-[12%] right-0 aspect-[4/3] w-[45%] overflow-hidden shadow-[0_12px_25px_rgba(0,0,0,0.18)]">
        @php
            $smallImage = !empty($itProduct?->img_url) 
                ? asset('storage/' . $itProduct->img_url) 
                : asset('images/humanusia.jpeg');
        @endphp

        <img src="{{ $smallImage }}" 
             alt="{{ $itProduct?->getTranslation('name', app()->getLocale()) ?? 'Digital Solutions' }}"
             class="h-full w-full object-cover">
    </div>

</div>



         {{-- RIGHT : TEXT --}}
        <div class="max-w-[540px]">

            <h2
                class="mb-7 text-[24px] font-medium leading-[1.2] tracking-tight text-[#1112A2] md:text-[27px] lg:text-[29px]">
                {{ __('We also develop integrated digital solutions designed to support business operations, improve efficiency, and drive sustainable growth, including:') }}
            </h2>

            <ul class="space-y-3 text-[15px] leading-relaxed text-gray-500 md:text-[16px]">

                <li class="flex items-start gap-3">
                    <span class="mt-[2px]">•</span>
                    <span>
                        {{ __('Human Resources Information System (HRIS)') }}
                    </span>
                </li>

                <li class="flex items-start gap-3">
                    <span class="mt-[2px]">•</span>
                    <span>
                        {{ __('Customer Relationship Management (CRM)') }}
                    </span>
                </li>

                <li class="flex items-start gap-3">
                    <span class="mt-[2px]">•</span>
                    <span>
                        {{ __('Sales & Marketing Automation') }}
                    </span>
                </li>

                <li class="flex items-start gap-3">
                    <span class="mt-[2px]">•</span>
                    <span>
                        {{ __('Business Management Systems') }}
                    </span>
                </li>

                <li class="flex items-start gap-3">
                    <span class="mt-[2px]">•</span>
                    <span>
                        {{ __('Digital Transformation Solutions') }}
                    </span>
                </li>

                <li class="flex items-start gap-3">
                    <span class="mt-[2px]">•</span>
                    <span>
                        {{ __('Custom Technology Solutions') }}
                    </span>
                </li>

            </ul>

        </div>

    </div>

</div>

</section>


{{-- ==========================================
    SECTION 3
    MORE THAN A SERVICE PROVIDER
=========================================== --}}

<section class="bg-[#1112A2] px-6 py-16 text-white md:px-12 md:py-20">

<div class="mx-auto max-w-[1200px]">

    <div class="grid grid-cols-1 items-center gap-10 md:grid-cols-2 md:gap-16 lg:gap-20">

        {{-- LEFT --}}

        <div>

            <h2
                class="max-w-[420px] text-[34px] font-bold leading-[1.05] tracking-tight md:text-[40px] lg:text-[44px]">
                {!! __('More Than a <br> Service Provider') !!}
            </h2>

        </div>


        {{-- RIGHT --}}

        <div class="max-w-[520px]">

            <p class="text-[14px] leading-[1.5] text-white/95 md:text-[15px]">
                {{ __('More than a service provider, PT Slameticon Digital Valley serves as a strategic partner for businesses navigating the digital landscape. We combine technology, creativity, and business insight to transform ideas into practical solutions and help our clients stay competitive in a rapidly evolving market.') }}
            </p>

        </div>

    </div>

</div>

</section>



    {{-- ==========================================
         FOOTER
    =========================================== --}}

    @include('partials.footer')


</body>

</html>
