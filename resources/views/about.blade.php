<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Slameticon Digital Valey</title>
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/slameticon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter Tight', sans-serif; }
    </style>
</head>
<body class="bg-[#ffffff] text-black antialiased selection:bg-[#0c1285] selection:text-white">

    @include('partials.navbar')

    <div class="pt-24 md:pt-28"></div>

    <!-- ==========================================
         SECTION 1: ABOUT US
         ========================================== -->
    <section class="py-12 md:py-20 px-6 md:px-12 bg-[#ffffff] text-black flex items-center">
        <div class="max-w-[1200px] mx-auto w-full">

            <!-- Subtitle About Us (Rata Tengah) -->
            <div class="mb-8 text-center">
                            <h1 class="text-3xl md:text-4xl font-bold text-[#0c1285] tracking-wide mb-3">
                About Us
            </h1>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                <!-- Kotak Logo (Tanpa Shadow) -->
                <div class="lg:col-span-5 bg-white rounded-2xl p-8 md:p-12 flex items-center justify-center min-h-[350px] md:min-h-[420px]">
                    <img src="{{ asset('images/slameticon.png') }}" alt="Slameticon Digital Valley" class="w-full max-w-xs md:max-w-sm h-auto object-contain">
                </div>

                <div class="lg:col-span-7 flex flex-col justify-center">

                    <!-- Judul Utama -->
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0c1285] mb-6 tracking-tight leading-tight">
                        PT Slameticon Digital Valey
                    </h1>

                <p class="text-[14px] md:text-[15px] text-black/90 leading-relaxed space-y-4 font-normal text-justify">
                    PT Slameticon Digital Valey is a leading digital marketing and software development company committed to providing innovative and practical solutions to businesses of all sizes. Our team of experts combines extensive industry knowledge with cutting-edge technology to deliver exceptional results for our clients. We strive for excellence in everything we do, from crafting custom software solutions for your business to creating comprehensive digital marketing campaigns that drive results. We take pride in our ability to understand our client's unique needs and deliver tailored solutions that help them achieve their goals. With a focus on innovation, efficiency, and quality, PT Slameticon Digital Valey is the partner you can trust to help your business thrive in today's fast-paced digital landscape.
                </p>

                </div>

            </div>

        </div>
    </section>

    <!-- ==========================================
         SECTION 2: OUR VISION & MISSION
         ========================================== -->
    <section class="py-16 md:py-24 px-6 md:px-12 bg-gray-50 overflow-hidden relative">
        <div class="max-w-[1100px] mx-auto relative flex flex-col md:flex-row items-stretch gap-12 md:gap-0">

            <!-- GARIS MIRING TENGAH (Hanya Tampil di Layar Desktop/Tablet) -->
            <!-- Menggunakan rotate-[15deg] agar garis miring ke kanan persis seperti desain -->
            <div class="hidden md:block absolute left-1/2 top-4 bottom-4 w-[2px] bg-[#0c1285] transform -translate-x-1/2 rotate-[15deg]"></div>

            <!-- BAGIAN KIRI: OUR VISION -->
            <div class="w-full md:w-1/2 md:pr-16 flex flex-col text-center md:text-right">
                <h2 class="text-2xl md:text-3xl font-semibold text-[#0c1285] mb-6">Our Vision</h2>
                <p class="text-[15px] text-gray-500 leading-relaxed max-w-sm mx-auto md:ml-auto md:mr-0">
                    To become Indonesia's leading integrated digital solutions company, empowering businesses through sales, marketing, design, and technology.
                </p>
            </div>

            <!-- GARIS HORIZONTAL PEMISAH (Hanya Tampil di Layar HP) -->
            <div class="block md:hidden w-3/4 h-[2px] bg-[#0c1285] mx-auto rounded-full"></div>

            <!-- BAGIAN KANAN: OUR MISSION -->
            <div class="w-full md:w-1/2 md:pl-16 flex flex-col text-left">
                <h2 class="text-2xl md:text-3xl font-semibold text-[#0c1285] mb-6 text-center md:text-left">Our Mission</h2>
                <ul class="text-[15px] text-gray-500 leading-relaxed list-disc list-outside ml-5 space-y-2 max-w-lg mx-auto md:mx-0">
                    <li>Deliver innovative technology solutions that help businesses operate more efficiently and scale sustainably.</li>
                    <li>Empower brands through data-driven digital marketing and impactful creative content.</li>
                    <li>Build strong customer relationships through automation, CRM, and intelligent business systems.</li>
                    <li>Continuously leverage emerging technologies, including Artificial Intelligence, to create measurable value for clients.</li>
                    <li>Develop an ecosystem that integrates sales, marketing, design, and technology into one seamless business solution.</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- ==========================================
         SECTION 3: TOP #1 ECOSYSTEM
         ========================================== -->
    <section class="py-12 md:py-16 px-6 md:px-12 bg-[#0c1285] text-white">
        <div class="max-w-[1100px] mx-auto w-full flex flex-col md:flex-row items-center justify-between gap-8 md:gap-16">

            <!-- Kiri: Judul TOP #1 -->
            <div class="shrink-0 text-center md:text-left w-full md:w-auto">
                <h2 class="text-6xl md:text-7xl lg:text-[5.5rem] font-bold tracking-tight">
                    TOP #1
                </h2>
            </div>

            <!-- Kanan: Teks Deskripsi -->
            <div class="text-[15px] md:text-[16px] text-white/90 leading-relaxed space-y-6 text-center md:text-left max-w-xl">
                <p>
                    Digital Marketing, Design, and IT Development Ecosystem in Indonesia
                </p>
                <p>
                    More than thousand packages and hundred employess joined in our ecosystem
                </p>
            </div>

        </div>
    </section>

    @include('partials.footer')

</body>
</html>
