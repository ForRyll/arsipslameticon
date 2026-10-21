<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO / Global Metadata --}}
    <title>Career | Slameticon Digital Valey</title>
    <meta name="description" content="Bergabung bersama PT Slameticon Digital Valey dan menjadi bagian dari tim profesional yang mengembangkan solusi digital melalui teknologi, kreativitas, dan inovasi.">
    <meta name="keywords" content="Slameticon Digital Valey, PT Slameticon Digital Valey, digital solutions, software development, software development Indonesia, digital marketing, digital marketing Indonesia, social media management, branding, brand identity, digital transformation, custom software development, digital platform, business digital solutions">
    <meta name="author" content="PT Slameticon Digital Valey">
    <meta name="robots" content="index, follow">

    {{-- Open Graph (Meta Sharing Social Media) --}}
    <meta property="og:site_name" content="Slameticon Digital Valey">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Career | Slameticon Digital Valey">
    <meta property="og:description" content="Bergabung bersama PT Slameticon Digital Valey dan menjadi bagian dari tim profesional yang mengembangkan solusi digital melalui teknologi, kreativitas, dan inovasi.">
    <meta property="og:image" content="{{ asset('images/slameticon.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/slameticon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/studio-app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
        }
    </style>
</head>

<body class="bg-[#ffffff] text-black antialiased selection:bg-[#1112A2] selection:text-white">

    @include('partials.navbar')

    <!-- ==========================================
         SECTION: CAREER
         ========================================== -->
    <section
        class="py-16 md:py-24 px-6 md:px-12 max-w-[1450px] mx-auto min-h-[calc(100vh-100px)] flex flex-col justify-center">

        <!-- Judul Atas Rata Tengah -->
        <div class="text-center mb-16 md:mb-24">
            <h1 class="text-3xl md:text-4xl font-bold text-[#1112A2] tracking-wide mb-3">
                {{ __('Career') }}
            </h1>
        </div>

        <!-- Grid Utama (Kiri Teks, Kanan Foto) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">

            <!-- KOLOM KIRI: Teks -->
            <div class="max-w-lg mx-auto lg:mx-0">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#1218ae] leading-[1.2] mb-6 tracking-tight">
                    {{ __('Join our movement to revolutionize the future of work') }}
                </h1>

                <p class="text-gray-600 font-medium text-[15px] md:text-[16px] mb-8 leading-relaxed">
                    {{ __('What\'s the best thing about working PT Slameticon Digital Valey?') }}<br>
                    {{ __('Easy. The people.') }}
                </p>

                <p class="text-gray-500 text-[14px] md:text-[15px] leading-relaxed">
                    {{ __('We\'re curious, creative, and diverse, driven by the purpose of our work and energized by the joy we get from supporting each other. We build awesome stuff that helps people and love doing it together.') }}
                </p>
            </div>

            <!-- KOLOM KANAN: FOTO CAREER -->
            <div class="flex justify-center lg:justify-end">
                <div class="w-full max-w-[520px] overflow-hidden rounded-xl">
                    <img src="{{ asset('images/career.png') }}" alt="Career Slameticon Digital Valey"
                        class="w-full h-auto object-cover">
                </div>
            </div>

        </div>
    </section>

    <!-- ==========================================
         SECTION: LIST WORK (Job Openings)
         ========================================== -->
    <section class="py-16 md:py-24 px-6 md:px-12 bg-[#ffffff] font-['Inter_Tight']">
        <div class="max-w-[1000px] mx-auto">

            <!-- Judul Section -->
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-semibold text-[#1218ae]">{{ __('List work') }}</h2>
            </div>

            <!-- Wrapper List Pekerjaan -->
            <div class="flex flex-col gap-4">

                @forelse ($jobOpenings as $job)
                    <div class="border border-gray-300 rounded-lg bg-white overflow-hidden transition-colors duration-300">
                        <!-- Header (Bisa diklik & efek hover) -->
                        <button onclick="toggleJob('job-{{ $job->id }}')"
                            class="w-full flex items-center justify-between p-5 md:p-6 text-left group hover:bg-gray-100 transition-colors duration-300">
                            <span class="text-[17px] md:text-lg font-semibold text-[#1218ae]">
                                {{ $job->title }}
                            </span>
                            <div class="flex items-center gap-4">
                                <span class="text-[13px] md:text-sm text-gray-500 hidden md:block">
                                    {{ $job->job_type ?? 'Full-Time' }}@if($job->location), {{ $job->location }} @endif
                                    @if(is_array($job->department) && isset($job->department['name']))
                                        - {{ $job->department['name'] }}
                                    @elseif(is_string($job->department) && !empty($job->department))
                                        - {{ $job->department }}
                                    @endif
                                </span>
                                <!-- Icon Panah -->
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300 group-hover:rotate-90"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </div>
                        </button>

                        <!-- Konten Tersembunyi (Expand) -->
                        <div id="job-{{ $job->id }}" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out"
                            style="max-height: 0px;">
                            <div class="p-6 border-t border-gray-200 bg-gray-50">

                                @if($job->description)
                                    <h4 class="font-semibold text-gray-900 mb-2 text-sm">Job Description</h4>
                                    <div class="text-[14px] text-gray-600 mb-5 leading-relaxed prose max-w-none">
                                        {!! $job->description !!}
                                    </div>
                                @endif

                                @if(!empty($job->requirements))
                                    <h4 class="font-semibold text-gray-900 mb-2 text-sm">Requirements</h4>

                                    @if(is_array($job->requirements))
                                        <ul class="list-disc list-outside ml-4 text-[14px] text-gray-600 mb-6 space-y-1.5">
                                            @foreach($job->requirements as $req)
                                                <li>{!! strip_tags($req) !!}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <div class="text-[14px] text-gray-600 mb-6 leading-relaxed prose max-w-none">
                                            {!! $job->requirements !!}
                                        </div>
                                    @endif
                                @endif

                                <!-- Tombol Apply -->
                                <a href="{{ url('/apply') }}?job_id={{ $job->id }}"
                                    class="inline-flex items-center justify-center bg-[#1218ae] text-white px-6 py-2.5 rounded text-[14px] font-medium hover:bg-[#1112A2] transition-colors">
                                    Apply now &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12 border border-dashed border-gray-300 rounded-lg">
                        <p class="text-gray-500 text-sm">Saat ini belum ada lowongan pekerjaan yang dibuka.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    <!-- Script JavaScript Bawaan -->
    <script>
        function toggleJob(id) {
            const content = document.getElementById(id);
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0px';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        }
    </script>
    @include('partials.footer')

</body>

</html>