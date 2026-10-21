<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO / Global Metadata --}}
    <title>News & Insights | Slameticon Digital Valey</title>
    <meta name="description" content="Temukan berita, insight, informasi, dan perkembangan terbaru dari PT Slameticon Digital Valey seputar teknologi, digital marketing, branding, dan perkembangan industri digital.">
    <meta name="keywords" content="Slameticon Digital Valey, PT Slameticon Digital Valey, digital solutions, software development, software development Indonesia, digital marketing, digital marketing Indonesia, social media management, branding, brand identity, digital transformation, custom software development, digital platform, business digital solutions">
    <meta name="author" content="PT Slameticon Digital Valey">
    <meta name="robots" content="index, follow">

    {{-- Open Graph (Meta Sharing Social Media) --}}
    <meta property="og:site_name" content="Slameticon Digital Valey">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="News & Insights | Slameticon Digital Valey">
    <meta property="og:description" content="Temukan berita, insight, informasi, dan perkembangan terbaru dari PT Slameticon Digital Valey seputar teknologi, digital marketing, branding, dan perkembangan industri digital.">
    <meta property="og:image" content="{{ asset('images/slameticon.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/slameticon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
        }

        .gallery-item {
            transition:
                opacity 0.3s ease,
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        /* FIX: Tambahkan style ini agar kartu yang difilter benar-benar tersembunyi */
        .hidden-card {
            display: none !important;
        }
    </style>
</head>

<body class="bg-white">

    {{-- NAVBAR --}}
    @include('partials.navbar')


    {{-- SPACING NAVBAR --}}
    <div class="pt-22 md:pt-22"></div>


    {{-- ==========================================
         NEWS PAGE
    =========================================== --}}

    <section class="bg-white py-16 md:py-20 px-6 md:px-10 min-h-screen">
        <div class="max-w-[1400px] mx-auto">

            {{-- ==========================================
                 TITLE
            =========================================== --}}
            <div class="text-center mb-10 md:mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-[#1112A2] tracking-wide mb-3">
                    {{ __('News') }}
                </h1>
            </div>

            {{-- ==========================================
                 CATEGORY FILTER
            =========================================== --}}
            <div class="flex flex-wrap justify-center gap-2 mb-8">

                {{-- TOMBOL ALL --}}
                <button type="button" onclick="filterNews('all', this)"
                    class="news-filter-btn px-4 py-2 rounded-full border border-[#1112A2] bg-[#1112A2] text-white text-[11px] font-medium transition-all duration-300">
                    All
                </button>

                {{-- CATEGORIES DARI DATABASE --}}
                @foreach($categories as $category)
                    <button type="button" onclick="filterNews('{{ $category->id }}', this)"
                        class="news-filter-btn px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-500 text-[11px] font-medium hover:border-[#1112A2] hover:text-[#1112A2] transition-all duration-300">
                        {{ $category->name }}
                    </button>
                @endforeach

            </div>

            {{-- ==========================================
                 NEWS GRID
            =========================================== --}}
            <div id="newsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">

                @forelse($news as $item)
                    @php
                        // Penanganan URL Gambar (Storage vs External URL vs Default Asset)
                        if ($item->img_url) {
                            $imageUrl = filter_var($item->img_url, FILTER_VALIDATE_URL) 
                                ? $item->img_url 
                                : \Illuminate\Support\Facades\Storage::url($item->img_url);
                        } else {
                            $imageUrl = asset('images/logo_sdv.png');
                        }
                    @endphp

                    <article onclick="window.location.href='{{ route('news.detail', $item->slug) }}'"
                        class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                        data-category-id="{{ $item->category_id }}">

                        <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">
                            <img src="{{ $imageUrl }}" alt="{{ $item->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"></div>

                            <span class="absolute top-3 left-3 bg-[#1112A2] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide">
                                {{ $item->category->name ?? 'Uncategorized' }}
                            </span>
                        </div>

                        <div class="p-4">
                            <h3 class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#1112A2] transition-colors line-clamp-2">
                                {{ $item->title }}
                            </h3>

                            <p class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4">
                                {{ Str::limit(strip_tags($item->content), 120) }}
                            </p>

                            <span class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#1112A2] transition-colors">
                                Read More →
                            </span>
                        </div>

                    </article>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-sm">{{ __('No news available.') }}</p>
                    </div>
                @endforelse

            </div>

        </div>
    </section>

    {{-- ==========================================
         FOOTER
    =========================================== --}}
    @include('partials.footer')

    {{-- SCRIPT FILTER --}}
    <script>
        function filterNews(categoryId, clickedBtn) {
            // Toggle Active Class pada Button
            const buttons = document.querySelectorAll('.news-filter-btn');
            buttons.forEach(btn => {
                btn.classList.remove('bg-[#1112A2]', 'text-white', 'border-[#1112A2]');
                btn.classList.add('bg-white', 'text-gray-500', 'border-gray-200');
            });

            clickedBtn.classList.remove('bg-white', 'text-gray-500', 'border-gray-200');
            clickedBtn.classList.add('bg-[#1112A2]', 'text-white', 'border-[#1112A2]');

            // Filter Card berdasarkan Category ID
            const cards = document.querySelectorAll('.news-card');
            cards.forEach(card => {
                const cardCategoryId = card.getAttribute('data-category-id');
                if (categoryId === 'all' || cardCategoryId === categoryId) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>