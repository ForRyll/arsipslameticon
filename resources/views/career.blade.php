<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>About Us - Slameticon Digital Valley</title> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/slameticon.png') }}">
    <style>
        body { font-family: 'Inter Tight', sans-serif; }
    </style>
</head>
<body class="bg-[#ffffff] text-black antialiased selection:bg-[#1112A2] selection:text-white">

    @include('partials.navbar')

<!-- ==========================================
         SECTION: CAREER
         ========================================== -->
    <section class="py-16 md:py-24 px-6 md:px-12 max-w-[1450px] mx-auto min-h-[calc(100vh-100px)] flex flex-col justify-center">

        <!-- Judul Atas Rata Tengah -->
        <div class="text-center mb-16 md:mb-24">
                        <h1 class="text-3xl md:text-4xl font-bold text-[#1112A2] tracking-wide mb-3">
                Career
            </h1>
        </div>

        <!-- Grid Utama (Kiri Teks, Kanan Foto) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">

            <!-- KOLOM KIRI: Teks -->
            <div class="max-w-lg mx-auto lg:mx-0">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#1218ae] leading-[1.2] mb-6 tracking-tight">
                    Join our movement to revolutionize the future of work
                </h1>
                <p class="text-gray-600 font-medium text-[15px] md:text-[16px] mb-8 leading-relaxed">
                    What's the best thing about working PT Slameticon Digital Valley?<br>
                    Easy. The people.
                </p>
                <p class="text-gray-500 text-[14px] md:text-[15px] leading-relaxed">
                    We're curious, creative, and diverse, driven by the purpose of our work and energized by the joy we get from supporting each other. We build awesome stuff that helps people and love doing it together.
                </p>
            </div>

            <!-- KOLOM KANAN: Susunan Grid Foto Pola Berlian -->
            <div class="flex flex-col items-center gap-2 md:gap-3">

                <!-- Baris 1: 2 Foto -->
                <div class="flex justify-center gap-2 md:gap-3">
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Baris 2: 3 Foto -->
                <div class="flex justify-center gap-2 md:gap-3">
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Baris 3: 4 Foto -->
                <div class="flex justify-center gap-2 md:gap-3">
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Baris 4: 5 Foto -->
                <div class="flex justify-center gap-2 md:gap-3">
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Baris 5: 4 Foto -->
                <div class="flex justify-center gap-2 md:gap-3">
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Baris 6: 3 Foto -->
                <div class="flex justify-center gap-2 md:gap-3">
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Baris 7: 2 Foto -->
                <div class="flex justify-center gap-2 md:gap-3">
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
                    <div class="w-16 h-12 md:w-24 md:h-16 rounded-lg overflow-hidden bg-gray-100 shadow-sm">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Team" class="w-full h-full object-cover">
                    </div>
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
                <h2 class="text-2xl md:text-3xl font-semibold text-[#1218ae]">List work</h2>
            </div>

            <!-- Wrapper List Pekerjaan -->
            <div class="flex flex-col gap-4">

                <!-- ITEM 1: Graphic Designer -->
                <div class="border border-gray-300 rounded-lg bg-white overflow-hidden transition-colors duration-300">
                    <!-- Header (Bisa diklik & efek hover) -->
                    <button onclick="toggleJob('job1')" class="w-full flex items-center justify-between p-5 md:p-6 text-left group hover:bg-gray-100 transition-colors duration-300">
                        <span class="text-[17px] md:text-lg font-semibold text-[#1218ae]">Graphic Designer</span>
                        <div class="flex items-center gap-4">
                            <span class="text-[13px] md:text-sm text-gray-500 hidden md:block">Full-Time, Remote - Technical Writer & Documentation</span>
                            <!-- Icon Panah (Berputar saat di-hover grupnya) -->
                            <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300 group-hover:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </button>
                    <!-- Konten yang Tersembunyi (Expand) -->
                    <div id="job1" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out" style="max-height: 0px;">
                        <div class="p-6 border-t border-gray-200 bg-gray-50">
                            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Job Description</h4>
                            <p class="text-[14px] text-gray-600 mb-5 leading-relaxed">
                                We are looking for a creative Graphic Designer with up-to-date knowledge to interpret our clients needs and to design solutions with high visual impact. You will work on a variety of products, including websites, books, magazines, product packaging, and corporate identity.
                            </p>
                            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Key Responsibilities</h4>
                            <ul class="list-disc list-outside ml-4 text-[14px] text-gray-600 mb-6 space-y-1.5">
                                <li>Study design briefs and determine requirements.</li>
                                <li>Conceptualize visuals based on requirements.</li>
                                <li>Work with copywriters and creative director to produce final design.</li>
                                <li>Ensure final graphics and layouts are visually appealing and on-brand.</li>
                            </ul>
                            <!-- Tombol Apply -->
                            <a href="{{ url('/apply') }}?job=Graphic+Designer" class="inline-flex items-center justify-center bg-[#1218ae] text-white px-6 py-2.5 rounded text-[14px] font-medium hover:bg-[#1112A2] transition-colors">
                                Apply now &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2: Senior Data Analyst -->
                <div class="border border-gray-300 rounded-lg bg-white overflow-hidden transition-colors duration-300">
                    <button onclick="toggleJob('job2')" class="w-full flex items-center justify-between p-5 md:p-6 text-left group hover:bg-gray-100 transition-colors duration-300">
                        <span class="text-[17px] md:text-lg font-semibold text-[#1218ae]">Senior Data Analyst</span>
                        <div class="flex items-center gap-4">
                            <span class="text-[13px] md:text-sm text-gray-500 hidden md:block">Full-Time, Remote - Technical Writer & Documentation</span>
                            <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300 group-hover:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="job2" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out" style="max-height: 0px;">
                        <div class="p-6 border-t border-gray-200 bg-gray-50">
                            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Job Description</h4>
                            <p class="text-[14px] text-gray-600 mb-5 leading-relaxed">
                                Join our team to transform raw data into meaningful insights. You will be responsible for managing our master data set, developing reports, and troubleshooting data issues to help the business make better decisions.
                            </p>
                            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Key Responsibilities</h4>
                            <ul class="list-disc list-outside ml-4 text-[14px] text-gray-600 mb-6 space-y-1.5">
                                <li>Develop and maintain databases and data systems.</li>
                                <li>Identify, analyze, and interpret trends or patterns in complex data sets.</li>
                                <li>Filter and clean data to maintain system integrity.</li>
                            </ul>
                            <a href="{{ url('/apply') }}?job=Senior+Data+Analyst" class="inline-flex items-center justify-center bg-[#1218ae] text-white px-6 py-2.5 rounded text-[14px] font-medium hover:bg-[#1112A2] transition-colors">
                                Apply now &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 3: Product Manager -->
                <div class="border border-gray-300 rounded-lg bg-white overflow-hidden transition-colors duration-300">
                    <button onclick="toggleJob('job3')" class="w-full flex items-center justify-between p-5 md:p-6 text-left group hover:bg-gray-100 transition-colors duration-300">
                        <span class="text-[17px] md:text-lg font-semibold text-[#1218ae]">Product Manager</span>
                        <div class="flex items-center gap-4">
                            <span class="text-[13px] md:text-sm text-gray-500 hidden md:block">Full-Time, Remote - Technical Writer & Documentation</span>
                            <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300 group-hover:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="job3" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out" style="max-height: 0px;">
                        <div class="p-6 border-t border-gray-200 bg-gray-50">
                            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Job Description</h4>
                            <p class="text-[14px] text-gray-600 mb-5 leading-relaxed">
                                We are looking for an experienced Product Manager who is passionate about building products that customers love. You will join a dynamic and fast-paced environment and work with cross-functional teams to design, build, and roll out products.
                            </p>
                            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Key Responsibilities</h4>
                            <ul class="list-disc list-outside ml-4 text-[14px] text-gray-600 mb-6 space-y-1.5">
                                <li>Develop product pricing and positioning strategies.</li>
                                <li>Translate product strategy into detailed requirements and prototypes.</li>
                                <li>Scope and prioritize activities based on business and customer impact.</li>
                            </ul>
                            <a href="{{ url('/apply') }}?job=Product+Manager" class="inline-flex items-center justify-center bg-[#1218ae] text-white px-6 py-2.5 rounded text-[14px] font-medium hover:bg-[#1112A2] transition-colors">
                                Apply now &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 4: AI Logistics Solution Architect -->
                <div class="border border-gray-300 rounded-lg bg-white overflow-hidden transition-colors duration-300">
                    <button onclick="toggleJob('job4')" class="w-full flex items-center justify-between p-5 md:p-6 text-left group hover:bg-gray-100 transition-colors duration-300">
                        <span class="text-[17px] md:text-lg font-semibold text-[#1218ae]">AI Logistics Solution Architect</span>
                        <div class="flex items-center gap-4">
                            <span class="text-[13px] md:text-sm text-gray-500 hidden md:block">Full-Time, Remote - Technical Writer & Documentation</span>
                            <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300 group-hover:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="job4" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out" style="max-height: 0px;">
                        <div class="p-6 border-t border-gray-200 bg-gray-50">
                            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Job Description</h4>
                            <p class="text-[14px] text-gray-600 mb-5 leading-relaxed">
                                Lead the design and implementation of AI-driven logistics solutions. You will work closely with stakeholders to understand their supply chain challenges and develop advanced machine learning models to optimize routes, manage inventory, and predict demand.
                            </p>
                            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Key Responsibilities</h4>
                            <ul class="list-disc list-outside ml-4 text-[14px] text-gray-600 mb-6 space-y-1.5">
                                <li>Architect robust AI solutions for complex logistics operations.</li>
                                <li>Collaborate with data engineers to deploy models into production.</li>
                                <li>Provide technical leadership and mentor junior team members.</li>
                            </ul>
                            <a href="/apply" class="inline-flex items-center justify-center bg-[#1218ae] text-white px-6 py-2.5 rounded text-[14px] font-medium hover:bg-[#1112A2] transition-colors">
                                Apply now &rarr;
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Script JavaScript Bawaan (Taruh tepat di atas tag penutup </body>) -->
    <script>
        function toggleJob(id) {
            const content = document.getElementById(id);
            // Jika konten sedang terbuka, tutup
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0px';
            } else {
                // Jika konten tertutup, buka seukuran isi di dalamnya
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        }
    </script>
    @include('partials.footer')

</body>
</html>
