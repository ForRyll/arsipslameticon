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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Inter+Tight:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f2f2f0] text-[#171717] font-['Inter',sans-serif] overflow-x-hidden antialiased">
    <!-- Manggil Navbar -->
    @include('partials.navbar')

<!-- =========================================================
     2. HERO SECTION
========================================================= -->
<section
    class="relative min-h-screen w-full bg-[#f2f2f0] overflow-hidden pt-24 pb-16"
    id="home"
>

    <div
        class="max-w-[1440px] mx-auto min-h-[calc(100vh-100px)]
               relative px-6 md:px-12
               flex flex-col"
    >

        <!-- =================================================
             HERO VISUAL
             MOBILE : tampil paling atas
             DESKTOP: tetap absolute memenuhi hero
        ================================================== -->
        <div
            class="relative
                   order-1
                   w-full
                   h-[500px]
                   md:absolute md:inset-0 md:h-full
                   overflow-hidden
                   pointer-events-none"
        >

            <div class="hero-diagonal-wrap">

                <div class="hero-track">

                    <!-- =========================
                         LOOP SET 1
                    ========================== -->

                    <div class="hero-card">
                        <img
                            src="{{ asset('images/bimbelio.jpeg') }}"
                            alt="Project Preview 1"
                        >
                    </div>

                    <div class="hero-card">
                        <img
                            src="{{ asset('images/humanusia.jpeg') }}"
                            alt="Project Preview 2"
                        >
                    </div>

                    <div class="hero-card">
                        <img
                            src="{{ asset('images/soemitro.jpeg') }}"
                            alt="Project Preview 3"
                        >
                    </div>

                    <div class="hero-card bg-white">
                        <img
                            src="{{ asset('images/logo1.png') }}"
                            class="!object-contain"
                            alt="Project Preview 4"
                        >
                    </div>

                    <div class="hero-card bg-white">
                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            class="!object-contain p-4"
                            alt="Project Preview 5"
                        >
                    </div>


                    <!-- =========================
                         LOOP SET 2
                         HARUS SAMA PERSIS
                    ========================== -->

                    <div class="hero-card">
                        <img
                            src="{{ asset('images/bimbelio.jpeg') }}"
                            alt="Project Preview 1"
                        >
                    </div>

                    <div class="hero-card">
                        <img
                            src="{{ asset('images/humanusia.jpeg') }}"
                            alt="Project Preview 2"
                        >
                    </div>

                    <div class="hero-card">
                        <img
                            src="{{ asset('images/soemitro.jpeg') }}"
                            alt="Project Preview 3"
                        >
                    </div>

                    <div class="hero-card bg-white">
                        <img
                            src="{{ asset('images/logo1.png') }}"
                            class="!object-contain"
                            alt="Project Preview 4"
                        >
                    </div>

                    <div class="hero-card bg-white">
                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            class="!object-contain p-4"
                            alt="Project Preview 5"
                        >
                    </div>

                </div>

            </div>

        </div>


        <!-- =================================================
             HERO COPY

             DESKTOP:
             kiri atas

             MOBILE:
             dipindahkan ke bawah gambar
        ================================================== -->
        <div
            class="relative
                   z-20
                   order-2
                   md:absolute
                   md:left-[5%]
                   md:top-[10%]
                   max-w-xl
                   mt-10
                   md:mt-0
                   mb-0
                   md:mb-0"
        >

            <h1
                class="font-['Inter_Tight']
                       text-5xl
                       sm:text-6xl
                       md:text-[3.3rem]
                       font-normal
                       italic
                       leading-[1.05]
                       tracking-tight
                       text-[#1218ae]"
            >

                Digging the
                <strong class="font-bold not-italic text-[#1218ae]">
                    Treasure,
                </strong>
                <br>

                Embracing the
                <strong class="font-bold not-italic text-[#1218ae]">
                    Venture,
                </strong>
                <br>

                Shaping the
                <strong class="font-bold not-italic text-[#1218ae]">
                    Future,
                </strong>

            </h1>


            <p
                class="mt-6
                       text-sm
                       font-medium
                       tracking-widest
                       text-gray-500
                       uppercase"
            >
                Architecture · Development · Creative
            </p>

        </div>


        <!-- =================================================
             HERO INFO & CTA

             DESKTOP:
             kanan bawah

             MOBILE:
             tepat di bawah Hero Copy
        ================================================== -->
        <div
            class="relative
                   z-30
                   order-3
                   max-w-md
                   mt-10
                   md:mt-0
                   md:absolute
                   md:right-[5%]
                   md:bottom-[10%]"
        >

            <p
                class="text-gray-700
                       text-base
                       md:text-lg
                       leading-relaxed
                       mb-6
                       font-normal"
            >
                Design, publish, and scale gorgeous responsive
                websites in real-time. No code required. Loved by
                over 100,000+ designers globally.
            </p>


            <a
                href="#contact"
                class="inline-flex
                       items-center
                       gap-2
                       px-7
                       py-3.5
                       rounded
                       bg-[#1218ae]
                       text-white
                       text-sm
                       font-semibold
                       hover:bg-blue-900
                       transition
                       shadow-lg
                       shadow-blue-900/20"
            >

                <span>
                    Start Collaboration
                </span>

                <span>
                    ↗
                </span>

            </a>

        </div>

    </div>


    <!-- =====================================================
         HERO ANIMATION CSS
    ====================================================== -->
    <style>

        /* =====================================================
           DIAGONAL CONTAINER
        ====================================================== */

        .hero-diagonal-wrap {
            position: absolute;

            /*
             * Dibuat jauh lebih besar supaya ketika
             * dirotasi tidak muncul area kosong.
             */
            inset: -60% -60%;

            transform: rotate(40deg);

            transform-origin: center;
        }


        /* =====================================================
           IMAGE TRACK
        ====================================================== */

        .hero-track {

            display: flex;

            flex-direction: column;

            align-items: center;

            /*
             * Jarak antar gambar tetap sama
             */
            gap: 32px;

            width: 100%;

            /*
             * Animasi dibuat linear agar kecepatannya
             * konstan dari awal sampai akhir.
             */
            animation:
                heroScrollLoop
                30s
                linear
                infinite;

            /*
             * Mengurangi kemungkinan flicker
             * saat browser melakukan repaint.
             */
            will-change: transform;
        }


        /* =====================================================
           IMAGE CARD
        ====================================================== */

        .hero-card {

            width: 380px;

            height: 220px;

            border-radius: 4px;

            overflow: hidden;

            flex-shrink: 0;

            /*
             * Membalik kembali rotasi parent
             * supaya foto tetap lurus.
             */
            transform: rotate(-40deg);

            box-shadow:
                0 4px 12px rgba(0, 0, 0, 0.08);

        }


        /* =====================================================
           IMAGE
        ====================================================== */

        .hero-card img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

        }


        /* =====================================================
           CONTINUOUS LOOP

           5 gambar pertama =
           5 gambar berikutnya

           Ketika set pertama selesai,
           set kedua sudah berada tepat
           di posisi set pertama.

           Jadi perpindahan tidak terlihat
           seperti restart dari awal.
        ====================================================== */

        @keyframes heroScrollLoop {

            from {
                transform: translateY(0);
            }

            to {
                /*
                 * -50% ditambah setengah gap.
                 *
                 * Karena ada 10 card dan 9 gap,
                 * -50% saja akan menghasilkan sedikit
                 * ketidaktepatan pada sambungan.
                 *
                 * Gap 32px → koreksi 16px.
                 */
                transform: translateY(
                    calc(-50% - 16px)
                );
            }

        }


        /* =====================================================
           MOBILE
        ====================================================== */

        @media (max-width: 767px) {

            /*
             * Visual tetap menjadi bagian pertama.
             */
            .hero-diagonal-wrap {

                /*
                 * Tetap mempertahankan sudut
                 * diagonal yang sama.
                 */
                inset: -55% -75%;

                transform: rotate(40deg);

            }


            /*
             * Ukuran card sedikit disesuaikan
             * agar tetap nyaman di layar HP.
             */
            .hero-card {

                width: 300px;

                height: 180px;

            }


            /*
             * Track sedikit lebih rapat
             * pada mobile.
             */
            .hero-track {

                gap: 28px;

                animation-duration: 26s;

            }


            /*
             * Koreksi loop mobile.
             *
             * gap 28px / 2 = 14px
             */
            @keyframes heroScrollLoop {

                from {

                    transform: translateY(0);

                }

                to {

                    transform: translateY(
                        calc(-50% - 14px)
                    );

                }

            }

        }


        /* =====================================================
           SMALL MOBILE
           Contoh: 360px - 390px
        ====================================================== */

        @media (max-width: 390px) {

            .hero-card {

                width: 270px;

                height: 165px;

            }

            .hero-track {

                gap: 24px;

                animation-duration: 24s;

            }


            @keyframes heroScrollLoop {

                from {

                    transform: translateY(0);

                }

                to {

                    transform: translateY(
                        calc(-50% - 12px)
                    );

                }

            }

        }

    </style>

</section>

    <!-- ==========================================
         4. INTRODUCTION SECTION (Sesuai Referensi)
         ========================================== -->
    <section class="py-24 px-6 md:px-12 bg-white" id="introduction">
        <div class="max-w-[1350px] mx-auto">

            <!-- Top Text: Title & Intro -->
            <div class="flex flex-col md:flex-row gap-6 md:gap-12 mb-20">
                {{-- <div class="md:w-1/4 shrink-0">
                    <span class="text-[13px] font-bold text-gray-900 tracking-wide">Introduction</span>
                </div> --}}
                <div class="md:w-3/4">
                    <h2
                        class="text-3xl md:text-[2.65rem] leading-[1.3] font-medium text-[#1218ae] tracking-tight font-['Inter_Tight'] [text-align:justify]">
                        Slameticon redefines the digital journey with a smarter, faster, and reliable approach to
                        business growth. Combine modern technology with strategic execution to ensure real-time
                        visibility.
                    </h2>
                </div>
            </div>

            <!-- Image & Stats Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <!-- Left: Image (Menggunakan slameticon.png sementara) -->
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-md overflow-hidden shadow-sm">
                    <img src="{{ asset('images/slameticon.png') }}" alt="Slameticon Model"
                        class="w-full h-full object-cover">
                </div>

                <!-- Right: Description & Stats -->
                <div class="flex flex-col justify-center">
                    <!-- Paragraf Deskripsi Utama (Diperbesar ukurannya) -->
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed mb-10 max-w-lg">
                        Experience a seamless, integrated flow from innovative software development to impactful digital
                        campaigns, powered by our end-to-end solutions designed for maximum efficiency and total
                        transparency.
                    </p>

                    <!-- Stats List -->
                    <div class="space-y-6">
                        <!-- Stat 1 -->
                        <div class="flex items-start gap-6 border-b border-gray-200 pb-6">
                            <h3
                                class="text-4xl md:text-5xl font-normal font-['Inter_Tight'] text-[#1218ae] w-20 shrink-0">
                                3+</h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed max-w-xs mt-1">
                                Years of industry experience, delivering high-value digital solutions to clients on
                                time.
                            </p>
                        </div>
                        <!-- Stat 2 -->
                        <div class="flex items-start gap-6 border-b border-gray-200 pb-6">
                            <h3 class="text-3xl md:text-4xl font-normal font-['Inter_Tight'] text-[#1218ae] w-20 shrink-0">
                                100%
                            </h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed max-w-xs mt-1">
                                Client-focused dedication, powered by tailored strategies and data-driven insights.
                            </p>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="mt-8">
                        <a href="/about"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded bg-[#1218ae] text-white text-xs font-semibold hover:bg-blue-900 transition shadow-sm">
                            <span>Learn more about us</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- ==========================================
         5. WHY CHOOSE US SECTION (Sesuai Referensi Figma)
         ========================================== -->
    <section class="py-24 px-6 md:px-16 bg-white" id="why-choose-us">
        <!-- MAX-WIDTH DIPERBESAR AGAR LEBIH LEBAR -->
        <div class="max-w-[1470px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

                <!-- Left: Text & Accordion List -->
                <div>
                    <span class="text-xs md:text-sm font-bold text-[#1218ae] tracking-wider uppercase block mb-4">Why choose us</span>
                    <h2
                        class="text-3xl sm:text-4xl md:text-[2.6rem] font-medium text-gray-900 mb-10 leading-[1.15] font-['Inter_Tight']">
                        Elevating Your Strategy With Measurable Impact
                    </h2>

                    <!-- Interactive Hover List -->
                    <div class="space-y-0">

                        <!-- Item 1 -->
                        <div class="group border-t border-gray-200 py-6 cursor-pointer">
                            <div class="flex items-center gap-5">
                                <span class="text-base font-bold text-[#1218ae] w-6">1</span>
                                <h4
                                    class="text-base md:text-lg font-semibold text-gray-800 group-hover:text-[#1218ae] transition flex-1">
                                    Integrated Digital Solutions</h4>
                                <!-- Panah Kanan -->
                                <span class="text-gray-400 group-hover:text-[#1218ae] transition-all duration-300">
                                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:rotate-90"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h14M13 6l6 6-6 6" />
                                    </svg>
                                </span>
                            </div>
                            <!-- Detail Animasi Buka/Tutup -->
                            <div
                                class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300 ease-in-out">
                                <div class="overflow-hidden">
                                    <p
                                        class="pt-3 pl-11 text-xs md:text-sm text-gray-600 leading-relaxed max-w-lg">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Kami memastikan setiap
                                        solusi digital terintegrasi sempurna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="group border-t border-gray-200 py-6 cursor-pointer">
                            <div class="flex items-center gap-5">
                                <span class="text-base font-bold text-[#1218ae] w-6">2</span>
                                <h4
                                    class="text-base md:text-lg font-semibold text-gray-800 group-hover:text-[#1218ae] transition flex-1">
                                    Tailored for Your Business</h4>
                                <span class="text-gray-400 group-hover:text-[#1218ae] transition-all duration-300">
                                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:rotate-90"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h14M13 6l6 6-6 6" />
                                    </svg>
                                </span>
                            </div>
                            <div
                                class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300 ease-in-out">
                                <div class="overflow-hidden">
                                    <p
                                        class="pt-3 pl-11 text-xs md:text-sm text-gray-600 leading-relaxed max-w-lg">
                                        Every business is unique. We develop customized strategies and solutions based
                                        on each client's objectives, challenges, and opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="group border-t border-gray-200 py-6 cursor-pointer">
                            <div class="flex items-center gap-5">
                                <span class="text-base font-bold text-[#1218ae] w-6">3</span>
                                <h4
                                    class="text-base md:text-lg font-semibold text-gray-800 group-hover:text-[#1218ae] transition flex-1">
                                    Technology-Driven Innovation</h4>
                                <span class="text-gray-400 group-hover:text-[#1218ae] transition-all duration-300">
                                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:rotate-90"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h14M13 6l6 6-6 6" />
                                    </svg>
                                </span>
                            </div>
                            <div
                                class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300 ease-in-out">
                                <div class="overflow-hidden">
                                    <p
                                        class="pt-3 pl-11 text-xs md:text-sm text-gray-600 leading-relaxed max-w-lg">
                                        Memanfaatkan teknologi terkini untuk mendorong inovasi dan efisiensi dalam
                                        setiap proses bisnis yang dijalankan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="group border-t border-gray-200 py-6 cursor-pointer">
                            <div class="flex items-center gap-5">
                                <span class="text-base font-bold text-[#1218ae] w-6">4</span>
                                <h4
                                    class="text-base md:text-lg font-semibold text-gray-800 group-hover:text-[#1218ae] transition flex-1">
                                    End-to-End Partnership</h4>
                                <span class="text-gray-400 group-hover:text-[#1218ae] transition-all duration-300">
                                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:rotate-90"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h14M13 6l6 6-6 6" />
                                    </svg>
                                </span>
                            </div>
                            <div
                                class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300 ease-in-out">
                                <div class="overflow-hidden">
                                    <p
                                        class="pt-3 pl-11 text-xs md:text-sm text-gray-600 leading-relaxed max-w-lg">
                                        Kami mendampingi klien dari tahap perencanaan, eksekusi, hingga pemeliharaan
                                        jangka panjang untuk hasil maksimal.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="group border-t border-gray-200 border-b py-6 cursor-pointer">
                            <div class="flex items-center gap-5">
                                <span class="text-base font-bold text-[#1218ae] w-6">5</span>
                                <h4
                                    class="text-base md:text-lg font-semibold text-gray-800 group-hover:text-[#1218ae] transition flex-1">
                                    Results-Oriented Approach</h4>
                                <span class="text-gray-400 group-hover:text-[#1218ae] transition-all duration-300">
                                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:rotate-90"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h14M13 6l6 6-6 6" />
                                    </svg>
                                </span>
                            </div>
                            <div
                                class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300 ease-in-out">
                                <div class="overflow-hidden">
                                    <p
                                        class="pt-3 pl-11 text-xs md:text-sm text-gray-600 leading-relaxed max-w-lg">
                                        Fokus pada pencapaian target dan metrik bisnis yang terukur untuk memastikan
                                        setiap strategi membawa dampak nyata.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right: Image Placeholder -->
                <div
                    class="w-full h-full min-h-[420px] lg:min-h-[520px] rounded-2xl overflow-hidden shadow-lg relative bg-gray-50 flex items-center justify-center p-8">
                    <img src="{{ asset('images/slameticon.png') }}" alt="Why Choose Us"
                        class="w-full h-full object-contain">
                </div>

            </div>
        </div>
    </section>

<!-- ==========================================
         8. SERVICES SECTION (Dengan Ikon Representatif)
         ========================================== -->
    <section class="py-24 bg-white px-6 md:px-16 w-full text-gray-900" id="services">
        <div class="max-w-[1400px] mx-auto w-full">

            <!-- Subtitle -->
            <div class="text-center mb-4">
                <h2 class="text-3xl md:text-4xl font-semibold text-[#1112A2] mb-10 font-['Inter_Tight']">
                    Service
                </h2>
            </div>

            <!-- Header Title / Intro Panjang (Tidak Capital Semua & Diperbesar) -->
            <div class="max-w-[1100px] mx-auto text-center mb-16">
                <p class="text-sm md:text-base font-large text-gray-600 leading-relaxed">
                    PT Slameticon Digital Valey combines technology, creativity, and strategy to help businesses thrive
                    in the digital era through end-to-end solutions in software development, digital marketing, social
                    media management, and branding.
                </p>
            </div>

            <!-- 4 Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1: Software & IT Development (Abu-abu) -->
                <div
                    class="bg-[#f0f2f5] rounded-2xl p-8 md:p-10 flex flex-col justify-between min-h-[460px] transition-transform duration-300 hover:-translate-y-1 shadow-sm">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 min-h-[64px] mb-6 font-['Inter_Tight']">
                            Software & IT<br>Development
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            Building reliable and scalable digital solutions, from websites and web applications to
                            custom software and business systems.
                        </p>
                    </div>
                    <!-- Ilustrasi Ikon Komputer & Gear -->
                    <div class="w-full h-28 mt-6 flex items-end justify-start opacity-30 text-gray-800">
                        <svg class="w-24 h-24" fill="none" stroke="currentColor" stroke-width="1.2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 9l-2 2 2 2m3-4l2 2-2 2">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Card 2: Digital Marketing (Biru) -->
                <div
                    class="bg-[#1112A2] text-white rounded-2xl p-8 md:p-10 flex flex-col justify-between min-h-[460px] transition-transform duration-300 hover:-translate-y-1 shadow-lg">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold min-h-[64px] mb-6 font-['Inter_Tight']">
                            Digital Marketing
                        </h3>
                        <p class="text-xs md:text-sm text-white/80 leading-relaxed">
                            Developing data-driven digital marketing strategies and campaigns designed to increase
                            visibility, reach, engagement, and business growth.
                        </p>
                    </div>
                    <!-- Ilustrasi Ikon Grafik / Analytics -->
                    <div class="w-full h-28 mt-6 flex items-end justify-start opacity-30 text-white">
                        <svg class="w-24 h-24" fill="none" stroke="currentColor" stroke-width="1.2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 13.5l4.5-4.5 3 3L18 4.5m0 0h-3.75M18 4.5v3.75"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18"></path>
                        </svg>
                    </div>
                </div>

                <!-- Card 3: Social Media Management (Abu-abu) -->
                <div
                    class="bg-[#f0f2f5] rounded-2xl p-8 md:p-10 flex flex-col justify-between min-h-[460px] transition-transform duration-300 hover:-translate-y-1 shadow-sm">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 min-h-[64px] mb-6 font-['Inter_Tight']">
                            Social Media<br>Management
                        </h3>
                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                            Managing and developing social media presence through strategic content planning, creative
                            content production, community engagement, and performance analysis.
                        </p>
                    </div>
                    <!-- Ilustrasi Ikon Handphone / Chat -->
                    <div class="w-full h-28 mt-6 flex items-end justify-start opacity-30 text-gray-800">
                        <svg class="w-24 h-24" fill="none" stroke="currentColor" stroke-width="1.2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <rect x="7" y="2" width="10" height="20" rx="2" stroke-linecap="round"
                                stroke-linejoin="round"></rect>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 18h2"></path>
                        </svg>
                    </div>
                </div>

                <!-- Card 4: Branding & Brand Identity (Biru) -->
                <div
                    class="bg-[#1112A2] text-white rounded-2xl p-8 md:p-10 flex flex-col justify-between min-h-[460px] transition-transform duration-300 hover:-translate-y-1 shadow-lg">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold min-h-[64px] mb-6 font-['Inter_Tight']">
                            Branding & Brand<br>Identity
                        </h3>
                        <p class="text-xs md:text-sm text-white/80 leading-relaxed">
                            Creating distinctive and consistent brand identities that communicate a business's values,
                            strengthen its positioning, and connect with its target audience.
                        </p>
                    </div>
                    <!-- Ilustrasi Ikon Desain / Pena / Kreatif -->
                    <div class="w-full h-28 mt-6 flex items-end justify-start opacity-30 text-white">
                        <svg class="w-24 h-24" fill="none" stroke="currentColor" stroke-width="1.2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                            </path>
                        </svg>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ==========================================
     6. PORTFOLIO / PROJECTS SECTION
     ========================================== -->
    <section class="py-24 bg-white px-6 md:px-12 lg:px-16 w-full" id="portfolio-projects">

        <div class="max-w-[1480px] mx-auto w-full">

            <!-- ==========================================
             HEADER
             ========================================== -->
            <div class="flex flex-col items-center mb-14">

                <h2 class="text-3xl md:text-4xl font-semibold text-[#1112A2] mb-10 font-['Inter_Tight']">
                    Portfolio / Projects
                </h2>

                <!-- Tabs -->
                <div class="flex flex-wrap justify-center gap-2 md:gap-3">

                    <!-- IT -->
                    <button onclick="switchPortfolioTab('tab-it')" data-target="tab-it"
                        class="portfolio-tab active px-4 py-2.5 text-[14px] md:text-[12px] font-medium rounded-lg transition-all duration-300 bg-[#1112A2] text-white">
                        Software & IT<br>Development
                    </button>

                    <!-- Marketing -->
                    <button onclick="switchPortfolioTab('tab-marketing')" data-target="tab-marketing"
                        class="portfolio-tab px-4 py-2.5 text-[14px] md:text-[12px] font-medium rounded-lg transition-all duration-300 text-gray-400 hover:text-[#1112A2] hover:bg-gray-100">
                        Digital<br>Marketing
                    </button>

                    <!-- Social Media -->
                    <button onclick="switchPortfolioTab('tab-social')" data-target="tab-social"
                        class="portfolio-tab px-4 py-2.5 text-[14px] md:text-[12px] font-medium rounded-lg transition-all duration-300 text-gray-400 hover:text-[#1112A2] hover:bg-gray-100">
                        Social Media<br>Management
                    </button>

                    <!-- Branding -->
                    <button onclick="switchPortfolioTab('tab-branding')" data-target="tab-branding"
                        class="portfolio-tab px-4 py-2.5 text-[14px] md:text-[12px] font-medium rounded-lg transition-all duration-300 text-gray-400 hover:text-[#1112A2] hover:bg-gray-100">
                        Branding &<br>Brand Identity
                    </button>

                </div>
            </div>


            <!-- ==========================================
             TAB CONTENT
             ========================================== -->
            <div class="relative">


                <!-- =====================================================
                 TAB 1 — SOFTWARE & IT DEVELOPMENT
                 ===================================================== -->
                <div id="tab-it" class="portfolio-content animate-fade-in block">

                    <div class="bg-[#1112A2] rounded-2xl p-6 md:p-10 lg:p-12 text-white">

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

                            <!-- LEFT — WORKPHASE -->
                            <div>

                                <div class="mb-10">

                                    <span class="text-[14px] font-semibold text-white/60 uppercase tracking-widest">
                                        Portfolio
                                    </span>

                                    <h3
                                        class="text-3xl md:text-5xl font-medium mt-3 leading-[1.05] font-['Inter_Tight']">
                                        Software & IT<br>Development
                                    </h3>

                                </div>


                                <div class="mb-5">
                                    <span class="text-[14px] font-bold text-white/60 tracking-widest uppercase">
                                        Workphase
                                    </span>
                                </div>


                                <div class="flex flex-col">


                                    <!-- 1 -->
                                    <div class="workphase-item group border-t border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="workphase-number w-[26px] h-[26px] shrink-0 rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold transition-all duration-300">
                                                1
                                            </span>

                                            <h4 class="text-[13px] md:text-[14px] font-medium flex-1">
                                                Integrated Digital Solutions
                                            </h4>

                                            <span class="workphase-arrow text-white/40 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="workphase-description grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Mengintegrasikan berbagai solusi digital agar sistem, teknologi, dan
                                                    kebutuhan bisnis dapat berjalan secara terhubung dalam satu
                                                    ekosistem yang efektif dan efisien.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 2 -->
                                    <div class="workphase-item group border-t border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="workphase-number w-[26px] h-[26px] shrink-0 rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold transition-all duration-300">
                                                2
                                            </span>

                                            <h4 class="text-[13px] md:text-[14px] font-medium flex-1">
                                                Solutions & Product Planning
                                            </h4>

                                            <span class="workphase-arrow text-white/40 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="workphase-description grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Mengidentifikasi kebutuhan pengguna dan merancang solusi digital
                                                    yang sesuai dengan tujuan, karakteristik, serta kebutuhan bisnis.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 3 -->
                                    <div class="workphase-item group border-t border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="workphase-number w-[26px] h-[26px] shrink-0 rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold transition-all duration-300">
                                                3
                                            </span>

                                            <h4 class="text-[13px] md:text-[14px] font-medium flex-1">
                                                UI & UX
                                            </h4>

                                            <span class="workphase-arrow text-white/40 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="workphase-description grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Merancang antarmuka dan pengalaman pengguna yang intuitif, inovatif,
                                                    kreatif, serta menarik sehingga produk digital mudah digunakan.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 4 -->
                                    <div class="workphase-item group border-t border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="workphase-number w-[26px] h-[26px] shrink-0 rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold transition-all duration-300">
                                                4
                                            </span>

                                            <h4 class="text-[13px] md:text-[14px] font-medium flex-1">
                                                Development
                                            </h4>

                                            <span class="workphase-arrow text-white/40 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="workphase-description grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Mengembangkan sistem berdasarkan rancangan yang telah dibuat dengan
                                                    memperhatikan kualitas kode, keamanan, performa, dan kebutuhan
                                                    fungsional.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 5 -->
                                    <div class="workphase-item group border-t border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="workphase-number w-[26px] h-[26px] shrink-0 rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold transition-all duration-300">
                                                5
                                            </span>

                                            <h4 class="text-[13px] md:text-[14px] font-medium flex-1">
                                                Testing & Quality Assurance
                                            </h4>

                                            <span class="workphase-arrow text-white/40 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="workphase-description grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Melakukan pengujian untuk memastikan sistem berjalan sesuai
                                                    kebutuhan, meminimalkan kesalahan, dan menjaga kualitas sebelum
                                                    digunakan.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 6 -->
                                    <div class="workphase-item group border-t border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="workphase-number w-[26px] h-[26px] shrink-0 rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold transition-all duration-300">
                                                6
                                            </span>

                                            <h4 class="text-[13px] md:text-[14px] font-medium flex-1">
                                                Deploy & Integration
                                            </h4>

                                            <span class="workphase-arrow text-white/40 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="workphase-description grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Menerapkan sistem ke lingkungan produksi dan mengintegrasikannya
                                                    dengan infrastruktur serta layanan yang dibutuhkan.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 7 -->
                                    <div
                                        class="workphase-item group border-t border-b border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="workphase-number w-[26px] h-[26px] shrink-0 rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold transition-all duration-300">
                                                7
                                            </span>

                                            <h4 class="text-[13px] md:text-[14px] font-medium flex-1">
                                                Maintenance & Continuous Improvement
                                            </h4>

                                            <span class="workphase-arrow text-white/40 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="workphase-description grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Melakukan pemeliharaan, pemantauan, dan pengembangan berkelanjutan
                                                    agar sistem tetap optimal serta mampu menyesuaikan perubahan
                                                    kebutuhan.
                                                </p>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- RIGHT — PROJECT ALBUM -->
                            <div>

                                <div class="flex items-center justify-between mb-5">

                                    <span class="text-[14px] font-bold text-white/60 tracking-widest uppercase">
                                        Selected Projects
                                    </span>

                                    <span class="text-[10px] text-white/40">
                                        Click to pause
                                    </span>

                                </div>


                                <div class="project-marquee-container">

                                    <div class="project-marquee">

                                        <!-- Project 1 -->
                                        <div onclick="openProjectModal(
                                            'Slameticon Digital Valley',
                                            'Software & IT Development',
                                            'Pengembangan solusi digital untuk mendukung kebutuhan bisnis melalui teknologi yang terintegrasi.',
                                            '{{ asset('images/slameticon.png') }}'
                                        )"
                                            class="project-item">

                                            <img src="{{ asset('images/slameticon.png') }}"
                                                alt="Slameticon Digital Valley" class="project-image">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <!-- Project 2 -->
                                        <div onclick="openProjectModal(
                                            'Humanusia',
                                            'Software & IT Development',
                                            'Solusi digital yang dikembangkan untuk membantu kebutuhan bisnis dan pengguna secara lebih efektif.',
                                            '{{ asset('images/humanusia.jpeg') }}'
                                        )"
                                            class="project-item">

                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="Humanusia"
                                                class="project-image">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <!-- Duplicate untuk infinite loop -->
                                        <div onclick="openProjectModal(
                                            'Slameticon Digital Valley',
                                            'Software & IT Development',
                                            'Pengembangan solusi digital untuk mendukung kebutuhan bisnis melalui teknologi yang terintegrasi.',
                                            '{{ asset('images/slameticon.png') }}'
                                        )"
                                            class="project-item">

                                            <img src="{{ asset('images/slameticon.png') }}"
                                                alt="Slameticon Digital Valley" class="project-image">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <div onclick="openProjectModal(
                                            'Humanusia',
                                            'Software & IT Development',
                                            'Solusi digital yang dikembangkan untuk membantu kebutuhan bisnis dan pengguna secara lebih efektif.',
                                            '{{ asset('images/humanusia.jpeg') }}'
                                        )"
                                            class="project-item">

                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="Humanusia"
                                                class="project-image">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- =====================================================
                 TAB 2 — DIGITAL MARKETING
                 ===================================================== -->
                <div id="tab-marketing" class="portfolio-content animate-fade-in hidden">

                    <div class="bg-[#f0f2f5] rounded-2xl p-6 md:p-10 lg:p-12 text-gray-900">

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

                            <!-- LEFT -->
                            <div>

                                <span class="text-[14px] font-semibold text-gray-400 uppercase tracking-widest">
                                    Portfolio
                                </span>

                                <h3 class="text-3xl md:text-5xl font-medium mt-3 mb-10 leading-[1.05]">
                                    Digital<br>Marketing
                                </h3>

                                <span class="text-[14px] font-bold text-gray-400 tracking-widest uppercase">
                                    Workphase
                                </span>


                                <div class="mt-5">


                                    <!-- 1 -->
                                    <div class="group border-t border-gray-300 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-gray-400 flex items-center justify-center text-[10px] font-bold">
                                                1
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Discovery & Business Analysis
                                            </h4>

                                            <span
                                                class="text-gray-400 group-hover:text-[#1112A2] group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-gray-500 leading-relaxed text-justify">
                                                    Menganalisis kondisi bisnis, target audiens, kebutuhan pasar, dan
                                                    peluang digital untuk menentukan arah strategi pemasaran.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 2 -->
                                    <div class="group border-t border-gray-300 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-gray-400 flex items-center justify-center text-[10px] font-bold">
                                                2
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Campaign Strategy & Planning
                                            </h4>

                                            <span
                                                class="text-gray-400 group-hover:text-[#1112A2] group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-gray-500 leading-relaxed text-justify">
                                                    Menyusun strategi dan perencanaan kampanye berdasarkan tujuan
                                                    bisnis, karakter audiens, platform, serta data yang tersedia.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 3 -->
                                    <div class="group border-t border-gray-300 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-gray-400 flex items-center justify-center text-[10px] font-bold">
                                                3
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Content Creation
                                            </h4>

                                            <span
                                                class="text-gray-400 group-hover:text-[#1112A2] group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-gray-500 leading-relaxed text-justify">
                                                    Membuat konten visual maupun tulisan yang relevan, kreatif, dan
                                                    sesuai dengan karakter brand serta kebutuhan target audiens.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 4 -->
                                    <div class="group border-t border-gray-300 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-gray-400 flex items-center justify-center text-[10px] font-bold">
                                                4
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Execution & Ad Placement
                                            </h4>

                                            <span
                                                class="text-gray-400 group-hover:text-[#1112A2] group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-gray-500 leading-relaxed text-justify">
                                                    Menjalankan kampanye dan melakukan penempatan iklan pada platform
                                                    yang sesuai untuk mencapai audiens yang telah ditentukan.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 5 -->
                                    <div class="group border-t border-b border-gray-300 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-gray-400 flex items-center justify-center text-[10px] font-bold">
                                                5
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Performance Tracking
                                            </h4>

                                            <span
                                                class="text-gray-400 group-hover:text-[#1112A2] group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-gray-500 leading-relaxed text-justify">
                                                    Memantau performa kampanye melalui berbagai metrik untuk
                                                    mengevaluasi hasil dan menentukan langkah optimasi berikutnya.
                                                </p>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- RIGHT -->
                            <div>

                                <div class="flex items-center justify-between mb-5">

                                    <span class="text-[14px] font-bold text-gray-400 tracking-widest uppercase">
                                        Selected Projects
                                    </span>

                                    <span class="text-[10px] text-gray-400">
                                        Hover to pause
                                    </span>

                                </div>


                                <div class="project-marquee-container">

                                    <div class="project-marquee">

                                        <div onclick="openProjectModal(
                                        'Bimbelio',
                                        'Digital Marketing',
                                        'Digital marketing campaign dan strategi pemasaran digital untuk meningkatkan awareness serta engagement.',
                                        '{{ asset('images/bimbelio.jpeg') }}'
                                    )"
                                            class="project-item">

                                            <img src="{{ asset('images/bimbelio.jpeg') }}" class="project-image"
                                                alt="Bimbelio">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <div onclick="openProjectModal(
                                        'Marketing Project',
                                        'Digital Marketing',
                                        'Strategi digital marketing yang dirancang untuk meningkatkan jangkauan dan komunikasi brand.',
                                        '{{ asset('images/logo1.png') }}'
                                    )"
                                            class="project-item">

                                            <img src="{{ asset('images/logo1.png') }}" class="project-image"
                                                alt="Marketing Project">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <div onclick="openProjectModal(
                                        'Digital Campaign',
                                        'Digital Marketing',
                                        'Pengembangan kampanye digital dengan pendekatan kreatif dan berbasis data.',
                                        '{{ asset('images/logo3.jpeg') }}'
                                    )"
                                            class="project-item">

                                            <img src="{{ asset('images/logo3.jpeg') }}" class="project-image"
                                                alt="Digital Campaign">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <!-- DUPLICATE -->
                                        <div class="project-item">

                                            <img src="{{ asset('images/bimbelio.jpeg') }}" class="project-image"
                                                alt="Bimbelio">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- =====================================================
                 TAB 3 — SOCIAL MEDIA MANAGEMENT
                 ===================================================== -->
                <div id="tab-social" class="portfolio-content animate-fade-in hidden">

                    <div class="bg-[#1112A2] rounded-2xl p-6 md:p-10 lg:p-12 text-white">

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

                            <!-- LEFT -->
                            <div>

                                <span class="text-[14px] font-semibold text-white/60 uppercase tracking-widest">
                                    Portfolio
                                </span>

                                <h3 class="text-3xl md:text-5xl font-medium mt-3 mb-10 leading-[1.05]">
                                    Social Media<br>Management
                                </h3>

                                <span class="text-[14px] font-bold text-white/60 tracking-widest uppercase">
                                    Workphase
                                </span>


                                <div class="mt-5">


                                    <!-- 1 -->
                                    <div class="group border-t border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold">
                                                1
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Social Media Audit
                                            </h4>

                                            <span
                                                class="text-white/40 group-hover:text-white group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Mengevaluasi kondisi akun media sosial, performa konten, karakter
                                                    audiens, serta strategi yang telah berjalan.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 2 -->
                                    <div class="group border-t border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold">
                                                2
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Content Calendar & Planning
                                            </h4>

                                            <span
                                                class="text-white/40 group-hover:text-white group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Menyusun kalender konten secara terstruktur agar publikasi
                                                    konsisten, relevan, dan sesuai dengan tujuan komunikasi brand.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 3 -->
                                    <div class="group border-t border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold">
                                                3
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Visual Design & Copywriting
                                            </h4>

                                            <span
                                                class="text-white/40 group-hover:text-white group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Menghasilkan desain visual dan copywriting yang menarik,
                                                    komunikatif, serta konsisten dengan identitas brand.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 4 -->
                                    <div class="group border-t border-b border-white/20 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-white/50 flex items-center justify-center text-[10px] font-bold">
                                                4
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Publishing & Community Management
                                            </h4>

                                            <span
                                                class="text-white/40 group-hover:text-white group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-white/65 leading-relaxed text-justify">
                                                    Mengelola proses publikasi sekaligus membangun interaksi dengan
                                                    audiens melalui respons, engagement, dan community management.
                                                </p>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- RIGHT -->
                            <div>

                                <div class="flex items-center justify-between mb-5">

                                    <span class="text-[14px] font-bold text-white/60 tracking-widest uppercase">
                                        Selected Projects
                                    </span>

                                    <span class="text-[10px] text-white/40">
                                        Hover to pause
                                    </span>

                                </div>


                                <div class="project-marquee-container">

                                    <div class="project-marquee">

                                        <div onclick="openProjectModal(
                                        'Social Media Project',
                                        'Social Media Management',
                                        'Pengelolaan media sosial melalui strategi konten, desain visual, dan community management.',
                                        '{{ asset('images/slameticon.png') }}'
                                    )"
                                            class="project-item">

                                            <img src="{{ asset('images/slameticon.png') }}" class="project-image"
                                                alt="Social Media Project">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <div onclick="openProjectModal(
                                        'Humanusia Social Media',
                                        'Social Media Management',
                                        'Pengembangan konten dan pengelolaan media sosial untuk meningkatkan komunikasi digital.',
                                        '{{ asset('images/humanusia.jpeg') }}'
                                    )"
                                            class="project-item">

                                            <img src="{{ asset('images/humanusia.jpeg') }}" class="project-image"
                                                alt="Humanusia">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <!-- DUPLICATE -->
                                        <div class="project-item">

                                            <img src="{{ asset('images/slameticon.png') }}" class="project-image"
                                                alt="Social Media Project">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- =====================================================
                 TAB 4 — BRANDING & BRAND IDENTITY
                 ===================================================== -->
                <div id="tab-branding" class="portfolio-content animate-fade-in hidden">

                    <div class="bg-[#f0f2f5] rounded-2xl p-6 md:p-10 lg:p-12 text-gray-900">

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

                            <!-- LEFT -->
                            <div>

                                <span class="text-[14px] font-semibold text-gray-400 uppercase tracking-widest">
                                    Portfolio
                                </span>

                                <h3 class="text-3xl md:text-5xl font-medium mt-3 mb-10 leading-[1.05]">
                                    Branding &<br>Brand Identity
                                </h3>

                                <span class="text-[14px] font-bold text-gray-400 tracking-widest uppercase">
                                    Workphase
                                </span>


                                <div class="mt-5">


                                    <!-- 1 -->
                                    <div class="group border-t border-gray-300 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-gray-400 flex items-center justify-center text-[10px] font-bold">
                                                1
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Brand Discovery & Research
                                            </h4>

                                            <span
                                                class="text-gray-400 group-hover:text-[#1112A2] group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-gray-500 leading-relaxed text-justify">
                                                    Memahami karakter bisnis, target audiens, kompetitor, positioning,
                                                    dan nilai utama brand sebagai dasar pengembangan identitas.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 2 -->
                                    <div class="group border-t border-gray-300 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-gray-400 flex items-center justify-center text-[10px] font-bold">
                                                2
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Logo & Visual Identity Design
                                            </h4>

                                            <span
                                                class="text-gray-400 group-hover:text-[#1112A2] group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-gray-500 leading-relaxed text-justify">
                                                    Mengembangkan logo, warna, tipografi, dan elemen visual lainnya
                                                    untuk membangun identitas brand yang konsisten dan mudah dikenali.
                                                </p>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- 3 -->
                                    <div class="group border-t border-b border-gray-300 py-4 cursor-pointer">

                                        <div class="flex items-center gap-4">

                                            <span
                                                class="w-[26px] h-[26px] rounded-full border border-gray-400 flex items-center justify-center text-[10px] font-bold">
                                                3
                                            </span>

                                            <h4 class="text-[13px] font-medium flex-1">
                                                Brand Guidelines
                                            </h4>

                                            <span
                                                class="text-gray-400 group-hover:text-[#1112A2] group-hover:rotate-90 transition-all duration-300">
                                                →
                                            </span>

                                        </div>

                                        <div
                                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300">
                                            <div class="overflow-hidden">

                                                <p
                                                    class="pt-3 pl-[42px] pr-5 text-[14px] text-gray-500 leading-relaxed text-justify">
                                                    Menyusun pedoman penggunaan identitas visual agar penerapan brand
                                                    tetap konsisten pada berbagai media dan kebutuhan komunikasi.
                                                </p>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- RIGHT -->
                            <div>

                                <div class="flex items-center justify-between mb-5">

                                    <span class="text-[14px] font-bold text-gray-400 tracking-widest uppercase">
                                        Selected Projects
                                    </span>

                                    <span class="text-[10px] text-gray-400">
                                        Hover to pause
                                    </span>

                                </div>


                                <div class="project-marquee-container">

                                    <div class="project-marquee">

                                        <div onclick="openProjectModal(
                                        'Brand Identity Project',
                                        'Branding & Brand Identity',
                                        'Pengembangan identitas visual dan elemen branding untuk membangun karakter brand yang kuat dan konsisten.',
                                        '{{ asset('images/logo1.png') }}'
                                    )"
                                            class="project-item">

                                            <img src="{{ asset('images/logo1.png') }}" class="project-image"
                                                alt="Brand Identity">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <div onclick="openProjectModal(
                                        'Branding Project',
                                        'Branding & Brand Identity',
                                        'Pengembangan visual identity yang disesuaikan dengan karakter dan positioning sebuah brand.',
                                        '{{ asset('images/logo3.jpeg') }}'
                                    )"
                                            class="project-item">

                                            <img src="{{ asset('images/logo3.jpeg') }}" class="project-image"
                                                alt="Branding Project">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>


                                        <!-- DUPLICATE -->
                                        <div class="project-item">

                                            <img src="{{ asset('images/logo1.png') }}" class="project-image"
                                                alt="Brand Identity">

                                            <div class="project-overlay">
                                                <span>View Project →</span>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ==========================================
     PROJECT DETAIL MODAL
     ========================================== -->
    <div id="projectModal" class="fixed inset-0 z-[999] hidden items-center justify-center px-5 py-8">

        <!-- Background -->
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeProjectModal()">
        </div>

        <!-- Modal -->
        <div id="projectModalContent"
            class="relative w-full max-w-[850px] max-h-[90vh] overflow-y-auto bg-white rounded-2xl shadow-2xl animate-modal">

            <!-- Close -->
            <button onclick="closeProjectModal()"
                class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-black/70 text-white flex items-center justify-center hover:bg-[#1112A2] transition">
                ✕
            </button>


            <!-- Image -->
            <div class="w-full h-[220px] md:h-[350px] bg-gray-100 flex items-center justify-center overflow-hidden">

                <img id="modalProjectImage" src="" alt="Project" class="w-full h-full object-contain">

            </div>


            <!-- Content -->
            <div class="p-6 md:p-10">

                <span id="modalProjectCategory"
                    class="text-[14px] font-bold text-[#1112A2] tracking-widest uppercase">
                </span>

                <h3 id="modalProjectTitle" class="text-2xl md:text-4xl font-semibold text-gray-900 mt-3 mb-5">
                </h3>

                <p id="modalProjectDescription"
                    class="text-[13px] md:text-[14px] text-gray-500 leading-relaxed text-justify">
                </p>


                <div class="mt-8 pt-5 border-t border-gray-200">

                    <span class="text-[10px] text-gray-400 uppercase tracking-widest">
                        Project
                    </span>

                    <p id="modalProjectName" class="text-[12px] font-medium text-gray-700 mt-1">
                    </p>

                </div>

            </div>

        </div>

    </div>


    <!-- ==========================================
     PORTFOLIO SCRIPT
     ========================================== -->
    <script>
        /* ==========================================
               SWITCH TAB
               ========================================== */
        function switchPortfolioTab(tabId) {

            const contents = document.querySelectorAll('.portfolio-content');

            contents.forEach(content => {

                content.classList.add('hidden');
                content.classList.remove('block');

            });


            const targetContent = document.getElementById(tabId);

            if (targetContent) {

                targetContent.classList.remove('hidden');
                targetContent.classList.add('block');

            }


            const tabs = document.querySelectorAll('.portfolio-tab');

            tabs.forEach(tab => {

                tab.classList.remove(
                    'bg-[#1112A2]',
                    'text-white'
                );

                tab.classList.add(
                    'text-gray-400'
                );

            });


            const activeTab = document.querySelector(
                `button[data-target="${tabId}"]`
            );

            if (activeTab) {

                activeTab.classList.remove(
                    'text-gray-400'
                );

                activeTab.classList.add(
                    'bg-[#1112A2]',
                    'text-white'
                );

            }

        }



        /* ==========================================
           PROJECT MODAL
           ========================================== */
        function openProjectModal(
            title,
            category,
            description,
            image
        ) {

            const modal = document.getElementById('projectModal');

            document.getElementById('modalProjectTitle').textContent = title;

            document.getElementById('modalProjectCategory').textContent = category;

            document.getElementById('modalProjectDescription').textContent = description;

            document.getElementById('modalProjectName').textContent = title;

            document.getElementById('modalProjectImage').src = image;


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



        /* ESC untuk menutup modal */
        document.addEventListener('keydown', function(event) {

            if (event.key === 'Escape') {

                closeProjectModal();

            }

        });



        /* ==========================================
           MOBILE WORKPHASE
           Klik untuk membuka deskripsi
           ========================================== */
        document.querySelectorAll('.workphase-item').forEach(item => {

            item.addEventListener('click', function(e) {

                if (window.innerWidth <= 768) {

                    this.classList.toggle('mobile-open');

                }

            });

        });
    </script>


    <!-- ==========================================
     PORTFOLIO CUSTOM CSS
     ========================================== -->
    <style>
        /* ==========================================
       TAB FADE ANIMATION
       ========================================== */

        .animate-fade-in {

            animation: portfolioFade 0.4s ease-in-out;

        }


        @keyframes portfolioFade {

            from {

                opacity: 0;

                transform: translateY(10px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }



        /* ==========================================
       WORKPHASE ARROW
       ========================================== */

        .workphase-item:hover .workphase-arrow {

            transform: rotate(90deg);

            color: white;

        }


        /* ==========================================
       WORKPHASE NUMBER
       ========================================== */

        .workphase-item:hover .workphase-number {

            background: white;

            color: #1112A2;

            border-color: white;

        }


        /* ==========================================
       MOBILE WORKPHASE
       ========================================== */

        @media (max-width: 768px) {

            .workphase-item.mobile-open .workphase-description {

                grid-template-rows: 1fr;

            }


            .workphase-item.mobile-open .workphase-arrow {

                transform: rotate(90deg);

            }


            .workphase-item.mobile-open .workphase-number {

                background: white;

                color: #1112A2;

                border-color: white;

            }

        }



        /* ==========================================
       PROJECT MARQUEE CONTAINER
       ========================================== */

        .project-marquee-container {

            width: 100%;

            height: 520px;

            overflow: hidden;

            position: relative;

            border-radius: 14px;

        }


        /* ==========================================
       PROJECT MARQUEE
       ========================================== */

        .project-marquee {

            display: flex;

            flex-direction: column;

            gap: 16px;

            animation: verticalProjectScroll 18s linear infinite;

        }


        /*
       Pause ketika cursor berada
       di area project
    */

        .project-marquee-container:hover .project-marquee {

            animation-play-state: paused;

        }


        /* ==========================================
       PROJECT ITEM
       ========================================== */

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


        /* ==========================================
       PROJECT IMAGE
       ========================================== */

        .project-image {

            width: 100%;

            height: 100%;

            object-fit: contain;

            display: block;

            transition: transform 0.5s ease;

        }


        .project-item:hover .project-image {

            transform: scale(1.04);

        }


        /* ==========================================
       PROJECT OVERLAY
       ========================================== */

        .project-overlay {

            position: absolute;

            inset: 0;

            display: flex;

            align-items: flex-end;

            justify-content: flex-end;

            padding: 18px;

            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.65),
                    rgba(0, 0, 0, 0));

            opacity: 0;

            transition: opacity 0.3s ease;

        }


        .project-item:hover .project-overlay {

            opacity: 1;

        }


        .project-overlay span {

            background: white;

            color: #1112A2;

            padding: 8px 12px;

            border-radius: 6px;

            font-size: 10px;

            font-weight: 600;

        }


        /* ==========================================
       INFINITE VERTICAL LOOP
       ========================================== */

        @keyframes verticalProjectScroll {

            0% {

                transform: translateY(0);

            }

            100% {

                transform: translateY(calc(-50% - 8px));

            }

        }


        /* ==========================================
       MODAL ANIMATION
       ========================================== */

        .animate-modal {

            animation: modalIn 0.3s ease-out;

        }


        @keyframes modalIn {

            from {

                opacity: 0;

                transform: scale(0.94) translateY(10px);

            }

            to {

                opacity: 1;

                transform: scale(1) translateY(0);

            }

        }


        /* ==========================================
       MOBILE
       ========================================== */

        @media (max-width: 768px) {

            .project-marquee-container {

                height: 430px;

            }


            .project-marquee {

                animation-duration: 24s;

            }


            .project-item {

                aspect-ratio: 1.1 / 1;

                padding: 10px;

            }

        }
    </style>

<!-- OUR CLIENTS & PARTNERS -->
    <section class="py-16 bg-white overflow-hidden">

        <!-- HEADER & TITLE -->
        <div class="text-center max-w-7xl mx-auto mb-12 px-6">
                <h2 class="text-3xl md:text-4xl font-semibold text-[#1112A2] mb-10 font-['Inter_Tight']">
                    Our Clients & Partners
                </h2>

            <!-- PARAGRAF DESKRIPSI TAMBAHAN -->
            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                From growing businesses to established organizations, we collaborate with clients and partners across diverse industries. By combining technology, creativity, and strategic thinking, we build solutions that address real business needs, create meaningful impact, and drive sustainable growth.
            </p>
        </div>

        <div class="space-y-10">

            <!-- ROW 1 : KE KANAN -->
            <div class="marquee-wrapper">
                <div class="marquee marquee-right">

                    <!-- GROUP 1 -->
                    <div class="marquee-group">
                        <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Bimbelio">
                        <img src="{{ asset('images/humanusia.jpeg') }}" alt="Humanusia">
                        <img src="{{ asset('images/soemitro.jpeg') }}" alt="Soemitro">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo 1">
                        <img src="{{ asset('images/logo3.jpeg') }}" alt="Logo 3">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Slameticon">
                    </div>

                    <!-- GROUP 2 (DUPLIKAT UNTUK LOOPING) -->
                    <div class="marquee-group">
                        <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Bimbelio">
                        <img src="{{ asset('images/humanusia.jpeg') }}" alt="Humanusia">
                        <img src="{{ asset('images/soemitro.jpeg') }}" alt="Soemitro">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo 1">
                        <img src="{{ asset('images/logo3.jpeg') }}" alt="Logo 3">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Slameticon">
                    </div>

                    <!-- GROUP 3 (DUPLIKAT UNTUK LOOPING MULUS) -->
                    <div class="marquee-group">
                        <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Bimbelio">
                        <img src="{{ asset('images/humanusia.jpeg') }}" alt="Humanusia">
                        <img src="{{ asset('images/soemitro.jpeg') }}" alt="Soemitro">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo 1">
                        <img src="{{ asset('images/logo3.jpeg') }}" alt="Logo 3">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Slameticon">
                    </div>

                </div>
            </div>


            <!-- ROW 2 : KE KIRI -->
            <div class="marquee-wrapper">
                <div class="marquee marquee-left">

                    <!-- GROUP 1 -->
                    <div class="marquee-group">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Slameticon">
                        <img src="{{ asset('images/logo3.jpeg') }}" alt="Logo 3">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo 1">
                        <img src="{{ asset('images/soemitro.jpeg') }}" alt="Soemitro">
                        <img src="{{ asset('images/humanusia.jpeg') }}" alt="Humanusia">
                        <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Bimbelio">
                    </div>

                    <!-- GROUP 2 (DUPLIKAT UNTUK LOOPING) -->
                    <div class="marquee-group">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Slameticon">
                        <img src="{{ asset('images/logo3.jpeg') }}" alt="Logo 3">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo 1">
                        <img src="{{ asset('images/soemitro.jpeg') }}" alt="Soemitro">
                        <img src="{{ asset('images/humanusia.jpeg') }}" alt="Humanusia">
                        <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Bimbelio">
                    </div>

                    <!-- GROUP 3 (DUPLIKAT UNTUK LOOPING MULUS) -->
                    <div class="marquee-group">
                        <img src="{{ asset('images/slameticon.png') }}" alt="Slameticon">
                        <img src="{{ asset('images/logo3.jpeg') }}" alt="Logo 3">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo 1">
                        <img src="{{ asset('images/soemitro.jpeg') }}" alt="Soemitro">
                        <img src="{{ asset('images/humanusia.jpeg') }}" alt="Humanusia">
                        <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Bimbelio">
                    </div>

                </div>
            </div>

        </div>
    </section>


    <style>
        .marquee-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .marquee-wrapper::before,
        .marquee-wrapper::after {
            content: "";
            position: absolute;
            top: 0;
            width: 80px;
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
            gap: 80px;
            padding-right: 80px;
            flex-shrink: 0;
        }

        .marquee-group img {
            height: 75px;
            width: auto;
            max-width: 180px;
            object-fit: contain;
            flex-shrink: 0;
            transition: filter 0.3s ease;
        }

        .marquee-right {
            animation: continuousRight 25s linear infinite;
        }

        .marquee-left {
            animation: continuousLeft 25s linear infinite;
        }

        .marquee-wrapper:hover .marquee {
            animation-play-state: paused;
        }

        @keyframes continuousRight {
            0% {
                transform: translateX(calc(-100% / 3));
            }
            100% {
                transform: translateX(0%);
            }
        }

        @keyframes continuousLeft {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(calc(-100% / 3));
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto !important;
            }

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>

    <!-- ==========================================
         9. CTA SECTION (Background Putih)
         ========================================== -->
    <section class="bg-white pt-12 pb-16 px-6 md:px-12 w-full" id="cta">
        <div class="max-w-[1200px] mx-auto w-full">
            <!-- Box Biru CTA Utama -->
            <div class="bg-[#1112A2] rounded-2xl p-10 md:p-16 text-center relative overflow-hidden shadow-2xl">

                <!-- Badge Ready to -->
                <div
                    class="inline-block bg-white text-gray-950 text-[14px] font-bold px-4 py-1.5 rounded-full mb-6 tracking-wide shadow-sm">
                    Ready to
                </div>

                <!-- Heading -->
                <h2 class="text-3xl md:text-5xl font-semibold font-['Inter_Tight'] tracking-tight mb-4 text-white">
                    Dominate the Digital Market?
                </h2>
                <p class="text-[13px] text-white/80 mb-8 max-w-md mx-auto">
                    Contact our team of experts for a free digital audit
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="#contact"
                        class="bg-white text-[#1112A2] hover:bg-gray-100 text-[13px] font-semibold px-6 py-3 rounded-lg transition shadow-sm">
                        Start Collaboration
                    </a>
                    <a href="/services"
                        class="inline-flex items-center gap-2 text-white text-[13px] font-medium hover:text-white/80 transition px-4 py-3">
                        Ask &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         10. FOOTER SECTION (Sesuai Referensi Gambar Baru)
         ========================================== -->
    <footer class="bg-[#0f1423] pt-20 pb-8 px-6 md:px-12 w-full font-['Inter_Tight']" id="footer">
        <!-- Manggil Footer -->
        @include('partials.footer')
    </footer>

    <!-- ==========================================
         BACK TO TOP FLOATING BUTTON (Shortcut)
         ========================================== -->
    <button id="backToTopBtn" onclick="scrollToTop()"
        class="fixed bottom-6 right-6 z-50 bg-[#1112A2] text-white w-11 h-11 rounded-full flex items-center justify-center shadow-lg opacity-0 pointer-events-none transition-all duration-300 hover:bg-blue-900 hover:scale-110 focus:outline-none"
        title="Kembali ke atas">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>

    <!-- JavaScript untuk Tombol Back to Top -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
            }, {
                passive: true
            });

            // Fungsi kembali mulus ke halaman paling atas
            window.scrollToTop = function() {
                const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

                window.scrollTo({
                    top: 0,
                    behavior: prefersReducedMotion ? 'auto' : 'smooth'
                });
            };
        });
    </script>




</body>

</html>
