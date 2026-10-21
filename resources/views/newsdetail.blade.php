<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- TITLE DINAMIS --}}
    <title>{{ is_array($news->title) ? ($news->title[app()->getLocale()] ?? reset($news->title)) : $news->title }} - Slameticon Digital Valey</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo_sdv.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo_sdv.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo_sdv.png') }}">
    @vite(['resources/css/app.css', 'resources/js/studio-app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
        }

        .news-detail-content p {
            text-align: justify;
            text-justify: inter-word;
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- SPACING NAVBAR --}}
    <div class="pt-24 md:pt-28"></div>

    <main>
        <section class="bg-white px-6 md:px-10 lg:px-16 py-12 md:py-20">
            <div class="max-w-[1100px] mx-auto">

                {{-- BACK BUTTON --}}
                <div class="mb-10 md:mb-14">
                    <a href="{{ route('news') }}"
                        class="inline-flex items-center gap-2 text-[12px] md:text-[13px] font-medium text-gray-500 hover:text-[#1112A2] transition-colors duration-300">
                        <span class="text-lg leading-none">←</span>
                        <span>Back to News</span>
                    </a>
                </div>

                {{-- HEADER --}}
                <div class="max-w-[900px] mx-auto mb-12 md:mb-16">

                    {{-- KATEGORI --}}
                    <div class="mb-5">
                        <span class="text-[13px] md:text-[14px] font-semibold text-[#1112A2] tracking-wide uppercase">
                            {{ is_array($news->category->name ?? null)
                                ? ($news->category->name[app()->getLocale()] ?? reset($news->category->name))
                                : ($news->category->name ?? 'Slameticon News') }}
                        </span>
                    </div>

                    {{-- JUDUL BERITA DINAMIS --}}
                    <h1 class="text-[30px] sm:text-[36px] md:text-[48px] lg:text-[56px] font-semibold text-gray-900 leading-[1.08] tracking-tight">
                        {{ is_array($news->title) ? ($news->title[app()->getLocale()] ?? reset($news->title)) : $news->title }}
                    </h1>

                    {{-- META (TANGGAL & PENULIS) --}}
                    <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mt-7 text-[11px] md:text-[12px] text-gray-400">
                        <span>
                            {{ $news->created_at ? $news->created_at->format('d F Y') : '-' }}
                        </span>
                        <span class="hidden sm:inline">•</span>
                        <span>
                            {{-- MENGAMBIL NAMA AUTHOR SAJA (BUKAN OBJECT JSON) --}}
                            {{ $news->author->name ?? $news->author_name ?? 'Slameticon Digital Valey' }}
                        </span>
                    </div>

                </div>

                {{-- GAMBAR UTAMA DINAMIS --}}
                @php
                    if ($news->img_url) {
                        $imageUrl = filter_var($news->img_url, FILTER_VALIDATE_URL)
                            ? $news->img_url
                            : \Illuminate\Support\Facades\Storage::url($news->img_url);
                    } else {
                        $imageUrl = asset('images/logo_sdv.png');
                    }
                @endphp

                <div class="w-full aspect-[16/7] md:aspect-[16/6] overflow-hidden bg-gray-100 mb-12 md:mb-16 rounded-sm">
                    <img src="{{ $imageUrl }}" alt="{{ is_array($news->title) ? ($news->title[app()->getLocale()] ?? '') : $news->title }}" class="w-full h-full object-cover">
                </div>

                {{-- KONTEN BERITA DINAMIS --}}
                <article class="max-w-[900px] mx-auto news-detail-content text-[14px] md:text-[16px] text-gray-700 leading-[1.9]">
                    {!! is_array($news->content) ? ($news->content[app()->getLocale()] ?? reset($news->content)) : $news->content !!}
                </article>

            </div>
        </section>
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

</body>
</html>

