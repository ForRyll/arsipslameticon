<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Slameticon Digital Valley</title>
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/slameticon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
        }

        /* =========================================
           PROJECT ACCORDION
           ========================================= */
        .project-accordion {
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .project-content {
            display: grid;
            grid-template-rows: 0fr;
            opacity: 0;
            transition: grid-template-rows 0.55s ease, opacity 0.35s ease;
        }

        .project-content-inner {
            overflow: hidden;
        }

        .project-accordion.active .project-content {
            grid-template-rows: 1fr;
            opacity: 1;
        }

        .accordion-icon {
            transition: transform 0.4s ease;
        }

        .project-accordion.active .accordion-icon {
            transform: rotate(90deg);
        }

        /* =========================================
           WORKPHASE (DENGAN ANIMASI HOVER)
           ========================================= */
        .workphase-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            column-gap: 70px;
            row-gap: 0;
        }

        .workphase-item {
            position: relative;
            padding: 15px 0 17px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.35);
            cursor: default;
        }

        .workphase-number {
            width: 24px;
            height: 24px;
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 10px;
            font-weight: 500;
            transition: all 0.3s ease; /* Transisi untuk warna */
        }

        .workphase-title {
            font-size: 15px;
            font-weight: 500;
            line-height: 1.3;
            transition: color 0.3s ease;
        }

        .workphase-description {
            font-size: 10px;
            line-height: 1.45;
            color: rgba(255, 255, 255, 0.72);
            max-width: 430px;

            /* Konfigurasi untuk disembunyikan secara default */
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            margin-top: 0;
            transition: max-height 0.4s ease, opacity 0.3s ease, margin-top 0.3s ease;
        }

        /* Efek saat area workphase di-hover */
        .workphase-item:hover .workphase-description {
            max-height: 150px; /* Nilai max-height untuk memunculkan teks */
            opacity: 1;
            margin-top: 7px;
        }

        /* Efek lingkaran nomor saat area workphase di-hover */
        .workphase-item:hover .workphase-number {
            background-color: #ffffff;
            color: #1112A2; /* Warna teks biru menyesuaikan background section */
            font-weight: 700;
        }

        /* =========================================
           PROJECT IMAGE SLIDER
           ========================================= */
        .project-slider {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .project-track {
            display: flex;
            width: max-content;
            gap: 12px;
            animation: projectSlide 28s linear infinite;
        }

        .project-slider:hover .project-track {
            animation-play-state: paused;
        }

        .project-slide {
            width: 270px;
            height: 155px;
            flex-shrink: 0;
            overflow: hidden;
            border-radius: 3px;
            cursor: pointer;
            position: relative;
        }

        .project-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .project-slide:hover img {
            transform: scale(1.06);
        }

        .project-slide-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.65), transparent 60%);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: flex-end;
            padding: 14px;
        }

        .project-slide:hover .project-slide-overlay {
            opacity: 1;
        }

        @keyframes projectSlide {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }

        /* =========================================
           MOBILE RESPONSIVE
           ========================================= */
        @media (max-width: 767px) {
            .workphase-grid {
                grid-template-columns: 1fr;
                column-gap: 0;
            }
            .workphase-item {
                padding: 14px 0;
            }
            .workphase-title {
                font-size: 14px;
            }
            .workphase-description {
                font-size: 10px;
                max-width: 100%;
            }
            .project-slide {
                width: 230px;
                height: 135px;
            }
            .project-track {
                gap: 10px;
                animation-duration: 24s;
            }
        }

        /* =========================================
           MODAL
           ========================================= */
        #projectModal {
            transition: opacity 0.3s ease;
        }
        #projectModalBox {
            transform: scale(0.95);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        #projectModal.show #projectModalBox {
            transform: scale(1);
            opacity: 1;
        }
    </style>
</head>

<body class="bg-[#ffffff] text-black antialiased selection:bg-[#1112A2] selection:text-white">

    @include('partials.navbar')

    <div class="pt-24 md:pt-28"></div>

    <!-- Subtitle -->
    <div class="text-center mb-6">
        <span class="text-3xl font-bold text-[#1112A2] tracking-widest uppercase">
            Product
        </span>
    </div>

    <!-- =========================================================
         SECTION 2 : PROJECT / WORKPHASE ACCORDION
         ========================================================= -->
    <section id="projects" class="bg-[#1112A2] text-white py-20 md:py-24 px-6 md:px-12 overflow-hidden">
        <div class="max-w-[1050px] mx-auto">

            {{-- <!-- SECTION TITLE -->
            <div class="mb-10">
                <span class="text-[12px] uppercase tracking-[0.2em] text-white/60">
                    Our Services
                </span>
                <h2 class="text-[32px] md:text-[42px] font-medium leading-tight mt-2">
                    How We Work
                </h2>
            </div> --}}

            <!-- =================================================
                 ACCORDION 1 : SOFTWARE & IT DEVELOPMENT
                 ================================================= -->
            <div class="project-accordion border border-white/30 rounded-md mb-3 overflow-hidden" data-accordion>
                <!-- HEADER -->
                <button type="button" class="w-full flex items-center justify-between px-5 md:px-6 py-4 md:py-5 text-left" onclick="toggleAccordion(this)">
                    <span class="text-[21px] md:text-[27px] font-medium">Software & IT Development</span>
                    <svg class="accordion-icon w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 18l6-6-6-6" />
                    </svg>
                </button>

                <!-- CONTENT -->
                <div class="project-content">
                    <div class="project-content-inner">
                        <div class="px-5 md:px-6 pb-7 md:pb-9">

                            <!-- WORKPHASE -->
                            <div class="pt-3 mb-8">
                                <p class="text-[10px] md:text-[11px] text-white/70 mb-4">Workphase</p>
                                <div class="workphase-grid">
                                    <!-- 01 -->
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">1</span>
                                            <div>
                                                <h4 class="workphase-title">Integrated Digital Solutions</h4>
                                                <p class="workphase-description text-sm md:text-base leading-relaxed text-gray-600">Mengembangkan solusi digital terintegrasi yang menghubungkan berbagai kebutuhan bisnis dalam satu sistem yang efektif dan mudah digunakan.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 02 -->
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">2</span>
                                            <div>
                                                <h4 class="workphase-title">Solution & Product Planning</h4>
                                                <p class="workphase-description">Kami menganalisis kebutuhan bisnis melalui riset, evaluasi sistem, fitur, alur pengguna, dan roadmap pengembangan yang jelas.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 03 -->
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">3</span>
                                            <div>
                                                <h4 class="workphase-title">UI/UX Design</h4>
                                                <p class="workphase-description">Merancang pengalaman dan antarmuka digital yang intuitif, konsisten, dan sesuai dengan kebutuhan pengguna.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 04 -->
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">4</span>
                                            <div>
                                                <h4 class="workphase-title">Development</h4>
                                                <p class="workphase-description">Mengubah rancangan menjadi produk digital yang fungsional, scalable, dan dapat digunakan dalam kebutuhan bisnis nyata.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 05 -->
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">5</span>
                                            <div>
                                                <h4 class="workphase-title">Testing & Quality Assurance</h4>
                                                <p class="workphase-description">Melakukan pengujian untuk memastikan sistem berjalan sesuai kebutuhan, stabil, aman, dan minim kesalahan.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 06 -->
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">6</span>
                                            <div>
                                                <h4 class="workphase-title">Deploy & Integration</h4>
                                                <p class="workphase-description">Mengintegrasikan dan menerapkan sistem ke lingkungan produksi agar dapat digunakan secara optimal.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 07 -->
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">7</span>
                                            <div>
                                                <h4 class="workphase-title">Maintenance & Continuous Improvement</h4>
                                                <p class="workphase-description">Melakukan pemeliharaan dan pengembangan berkelanjutan berdasarkan kebutuhan dan perkembangan bisnis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PROJECT PHOTOS -->
                            <div>
                                <p class="text-[10px] md:text-[11px] text-white/70 mb-3">Selected Projects</p>
                                <div class="project-slider">
                                    <div class="project-track">
                                        <!-- SET 1 -->
                                        <div class="project-slide" onclick="openProjectModal('Bimbelio Dashboard', 'Tampilan dashboard dan sistem informasi digital yang dikembangkan untuk mendukung kebutuhan bisnis dan pengelolaan data.', '{{ asset('images/bimbelio.jpeg') }}')">
                                            <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Bimbelio Dashboard">
                                            <div class="project-slide-overlay"><span class="text-white text-[11px] font-medium">Bimbelio Dashboard</span></div>
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Digital Business Solution', 'Pengembangan solusi digital yang dirancang untuk membantu proses bisnis menjadi lebih terintegrasi.', '{{ asset('images/humanusia.jpeg') }}')">
                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="Digital Business Solution">
                                            <div class="project-slide-overlay"><span class="text-white text-[11px] font-medium">Digital Business Solution</span></div>
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Business Platform', 'Implementasi platform digital untuk mendukung kebutuhan operasional dan pengembangan bisnis.', '{{ asset('images/soemitro.jpeg') }}')">
                                            <img src="{{ asset('images/soemitro.jpeg') }}" alt="Business Platform">
                                            <div class="project-slide-overlay"><span class="text-white text-[11px] font-medium">Business Platform</span></div>
                                        </div>
                                        <!-- SET 2 -->
                                        <div class="project-slide" onclick="openProjectModal('Bimbelio Dashboard', 'Tampilan dashboard dan sistem informasi digital yang dikembangkan untuk mendukung kebutuhan bisnis dan pengelolaan data.', '{{ asset('images/bimbelio.jpeg') }}')">
                                            <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Bimbelio Dashboard">
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Digital Business Solution', 'Pengembangan solusi digital yang dirancang untuk membantu proses bisnis menjadi lebih terintegrasi.', '{{ asset('images/humanusia.jpeg') }}')">
                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="Digital Business Solution">
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Business Platform', 'Implementasi platform digital untuk mendukung kebutuhan operasional dan pengembangan bisnis.', '{{ asset('images/soemitro.jpeg') }}')">
                                            <img src="{{ asset('images/soemitro.jpeg') }}" alt="Business Platform">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- =================================================
                 ACCORDION 2 : DIGITAL MARKETING
                 ================================================= -->
            <div class="project-accordion border border-white/30 rounded-md mb-3 overflow-hidden" data-accordion>
                <button type="button" class="w-full flex items-center justify-between px-5 md:px-6 py-4 md:py-5 text-left" onclick="toggleAccordion(this)">
                    <span class="text-[21px] md:text-[27px] font-medium">Digital Marketing</span>
                    <svg class="accordion-icon w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 18l6-6-6-6" />
                    </svg>
                </button>

                <div class="project-content">
                    <div class="project-content-inner">
                        <div class="px-5 md:px-6 pb-7 md:pb-9">
                            <div class="pt-3 mb-8">
                                <p class="text-[10px] md:text-[11px] text-white/70 mb-4">Workphase</p>
                                <div class="workphase-grid">
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">1</span>
                                            <div>
                                                <h4 class="workphase-title">Research & Market Analysis</h4>
                                                <p class="workphase-description">Menganalisis pasar, kompetitor, target audience, dan perilaku konsumen sebagai dasar strategi.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">2</span>
                                            <div>
                                                <h4 class="workphase-title">Digital Strategy</h4>
                                                <p class="workphase-description">Menyusun strategi digital berdasarkan tujuan bisnis dan karakteristik target audience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">3</span>
                                            <div>
                                                <h4 class="workphase-title">Campaign Planning</h4>
                                                <p class="workphase-description">Merancang campaign, channel, content direction, timeline, dan target performa.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">4</span>
                                            <div>
                                                <h4 class="workphase-title">Campaign Execution</h4>
                                                <p class="workphase-description">Menjalankan campaign digital secara terukur melalui berbagai platform.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">5</span>
                                            <div>
                                                <h4 class="workphase-title">Performance Analysis</h4>
                                                <p class="workphase-description">Mengevaluasi performa campaign berdasarkan data dan indikator yang telah ditentukan.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">6</span>
                                            <div>
                                                <h4 class="workphase-title">Optimization</h4>
                                                <p class="workphase-description">Mengoptimalkan campaign berdasarkan hasil evaluasi agar performa terus berkembang.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FOTO -->
                            <div>
                                <p class="text-[10px] md:text-[11px] text-white/70 mb-3">Selected Projects</p>
                                <div class="project-slider">
                                    <div class="project-track">
                                        <div class="project-slide" onclick="openProjectModal('Digital Campaign', 'Pengembangan dan implementasi campaign digital untuk meningkatkan awareness dan engagement.', '{{ asset('images/slameticon.png') }}')">
                                            <img src="{{ asset('images/slameticon.png') }}" alt="Digital Campaign">
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Marketing Strategy', 'Strategi pemasaran digital yang disusun berdasarkan data dan karakteristik target audience.', '{{ asset('images/humanusia.jpeg') }}')">
                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="Marketing Strategy">
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Campaign Development', 'Pengembangan campaign dan konten digital untuk kebutuhan brand.', '{{ asset('images/bimbelio.jpeg') }}')">
                                            <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Campaign Development">
                                        </div>
                                        <!-- DUPLICATE -->
                                        <div class="project-slide">
                                            <img src="{{ asset('images/slameticon.png') }}" alt="Digital Campaign">
                                        </div>
                                        <div class="project-slide">
                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="Marketing Strategy">
                                        </div>
                                        <div class="project-slide">
                                            <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Campaign Development">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =================================================
                 ACCORDION 3 : SOCIAL MEDIA MANAGEMENT
                 ================================================= -->
            <div class="project-accordion border border-white/30 rounded-md mb-3 overflow-hidden" data-accordion>
                <button type="button" class="w-full flex items-center justify-between px-5 md:px-6 py-4 md:py-5 text-left" onclick="toggleAccordion(this)">
                    <span class="text-[21px] md:text-[27px] font-medium">Social Media Management</span>
                    <svg class="accordion-icon w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 18l6-6-6-6" />
                    </svg>
                </button>

                <div class="project-content">
                    <div class="project-content-inner">
                        <div class="px-5 md:px-6 pb-7 md:pb-9">
                            <div class="pt-3 mb-8">
                                <p class="text-[10px] md:text-[11px] text-white/70 mb-4">Workphase</p>
                                <div class="workphase-grid">
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">1</span>
                                            <div>
                                                <h4 class="workphase-title">Social Media Audit</h4>
                                                <p class="workphase-description">Mengevaluasi kondisi akun, konten, audience, engagement, dan performa media sosial.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">2</span>
                                            <div>
                                                <h4 class="workphase-title">Content Strategy</h4>
                                                <p class="workphase-description">Menentukan content pillar, gaya komunikasi, format, dan kalender konten.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">3</span>
                                            <div>
                                                <h4 class="workphase-title">Content Production</h4>
                                                <p class="workphase-description">Menghasilkan konten visual dan copywriting yang sesuai dengan identitas brand.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">4</span>
                                            <div>
                                                <h4 class="workphase-title">Publishing & Management</h4>
                                                <p class="workphase-description">Mengatur jadwal publikasi, distribusi konten, dan pengelolaan akun.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">5</span>
                                            <div>
                                                <h4 class="workphase-title">Community Engagement</h4>
                                                <p class="workphase-description">Membangun interaksi dengan audience melalui komentar, pesan, dan aktivitas komunitas.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">6</span>
                                            <div>
                                                <h4 class="workphase-title">Performance Report</h4>
                                                <p class="workphase-description">Menganalisis performa konten dan memberikan laporan sebagai dasar pengembangan strategi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FOTO -->
                            <div>
                                <p class="text-[10px] md:text-[11px] text-white/70 mb-3">Selected Projects</p>
                                <div class="project-slider">
                                    <div class="project-track">
                                        <div class="project-slide" onclick="openProjectModal('Social Media Campaign', 'Pengelolaan media sosial melalui strategi konten dan campaign yang terarah.', '{{ asset('images/humanusia.jpeg') }}')">
                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="Social Media Campaign">
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Creative Content', 'Produksi konten kreatif yang disesuaikan dengan identitas dan karakter brand.', '{{ asset('images/bimbelio.jpeg') }}')">
                                            <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Creative Content">
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Social Media Management', 'Pengelolaan akun media sosial secara terstruktur dan konsisten.', '{{ asset('images/soemitro.jpeg') }}')">
                                            <img src="{{ asset('images/soemitro.jpeg') }}" alt="Social Media Management">
                                        </div>
                                        <!-- DUPLICATE -->
                                        <div class="project-slide">
                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="">
                                        </div>
                                        <div class="project-slide">
                                            <img src="{{ asset('images/bimbelio.jpeg') }}" alt="">
                                        </div>
                                        <div class="project-slide">
                                            <img src="{{ asset('images/soemitro.jpeg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =================================================
                 ACCORDION 4 : BRANDING & BRAND IDENTITY
                 ================================================= -->
            <div class="project-accordion border border-white/30 rounded-md overflow-hidden" data-accordion>
                <button type="button" class="w-full flex items-center justify-between px-5 md:px-6 py-4 md:py-5 text-left" onclick="toggleAccordion(this)">
                    <span class="text-[21px] md:text-[27px] font-medium">Branding & Brand Identity</span>
                    <svg class="accordion-icon w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 18l6-6-6-6" />
                    </svg>
                </button>

                <div class="project-content">
                    <div class="project-content-inner">
                        <div class="px-5 md:px-6 pb-7 md:pb-9">
                            <div class="pt-3 mb-8">
                                <p class="text-[10px] md:text-[11px] text-white/70 mb-4">Workphase</p>
                                <div class="workphase-grid">
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">1</span>
                                            <div>
                                                <h4 class="workphase-title">Brand Discovery</h4>
                                                <p class="workphase-description">Memahami karakter bisnis, nilai brand, target audience, dan positioning.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">2</span>
                                            <div>
                                                <h4 class="workphase-title">Brand Strategy</h4>
                                                <p class="workphase-description">Menentukan arah strategi, positioning, personality, dan komunikasi brand.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">3</span>
                                            <div>
                                                <h4 class="workphase-title">Visual Identity</h4>
                                                <p class="workphase-description">Mengembangkan elemen visual seperti logo, warna, typography, dan visual system.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">4</span>
                                            <div>
                                                <h4 class="workphase-title">Brand Guidelines</h4>
                                                <p class="workphase-description">Menyusun panduan penggunaan identitas agar brand tetap konsisten di berbagai media.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">5</span>
                                            <div>
                                                <h4 class="workphase-title">Brand Implementation</h4>
                                                <p class="workphase-description">Menerapkan identitas brand pada berbagai kebutuhan komunikasi bisnis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="workphase-item">
                                        <div class="flex items-start gap-3">
                                            <span class="workphase-number">6</span>
                                            <div>
                                                <h4 class="workphase-title">Brand Evaluation</h4>
                                                <p class="workphase-description">Mengevaluasi konsistensi dan efektivitas identitas brand setelah implementasi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FOTO -->
                            <div>
                                <p class="text-[10px] md:text-[11px] text-white/70 mb-3">Selected Projects</p>
                                <div class="project-slider">
                                    <div class="project-track">
                                        <div class="project-slide" onclick="openProjectModal('Brand Identity', 'Pengembangan identitas visual untuk membangun karakter brand yang kuat dan konsisten.', '{{ asset('images/soemitro.jpeg') }}')">
                                            <img src="{{ asset('images/soemitro.jpeg') }}" alt="Brand Identity">
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Visual Branding', 'Pengembangan elemen visual yang merepresentasikan nilai dan karakter sebuah brand.', '{{ asset('images/humanusia.jpeg') }}')">
                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="Visual Branding">
                                        </div>
                                        <div class="project-slide" onclick="openProjectModal('Brand Development', 'Pengembangan dan implementasi strategi brand untuk kebutuhan bisnis.', '{{ asset('images/bimbelio.jpeg') }}')">
                                            <img src="{{ asset('images/bimbelio.jpeg') }}" alt="Brand Development">
                                        </div>
                                        <!-- DUPLICATE -->
                                        <div class="project-slide">
                                            <img src="{{ asset('images/soemitro.jpeg') }}" alt="">
                                        </div>
                                        <div class="project-slide">
                                            <img src="{{ asset('images/humanusia.jpeg') }}" alt="">
                                        </div>
                                        <div class="project-slide">
                                            <img src="{{ asset('images/bimbelio.jpeg') }}" alt="">
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

    <!-- =========================================================
         PROJECT MODAL
         ========================================================= -->
    <div id="projectModal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-5 bg-black/80 backdrop-blur-sm">
        <!-- OVERLAY -->
        <div class="absolute inset-0" onclick="closeProjectModal()"></div>

        <!-- MODAL BOX -->
        <div id="projectModalBox" class="relative w-full max-w-[800px] bg-white rounded-xl overflow-hidden shadow-2xl">
            <!-- CLOSE -->
            <button onclick="closeProjectModal()" class="absolute top-4 right-4 z-20 w-9 h-9 rounded-full bg-white/90 text-gray-700 flex items-center justify-center shadow hover:bg-[#1112A2] hover:text-white transition">
                ✕
            </button>

            <!-- IMAGE -->
            <div class="w-full bg-gray-100">
                <img id="projectModalImage" src="" alt="Project" class="w-full max-h-[55vh] object-contain">
            </div>

            <!-- CONTENT -->
            <div class="p-6 md:p-8">
                <span class="inline-block bg-[#eef0ff] text-[#1112A2] px-3 py-1 rounded-sm text-[10px] font-semibold uppercase tracking-wide mb-3">
                    Slameticon
                </span>
                <h3 id="projectModalTitle" class="text-xl md:text-2xl font-bold text-gray-900 mb-3"></h3>
                <p id="projectModalDescription" class="text-[14px] text-gray-600 leading-relaxed"></p>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <!-- =========================================================
         JAVASCRIPT
         ========================================================= -->
    <script>
        function toggleAccordion(button) {
            const currentAccordion = button.closest('.project-accordion');
            const allAccordions = document.querySelectorAll('.project-accordion');

            allAccordions.forEach(accordion => {
                if (accordion !== currentAccordion) {
                    accordion.classList.remove('active');
                }
            });
            currentAccordion.classList.toggle('active');
        }

        function openProjectModal(title, description, image) {
            const modal = document.getElementById('projectModal');
            document.getElementById('projectModalTitle').textContent = title;
            document.getElementById('projectModalDescription').textContent = description;
            document.getElementById('projectModalImage').src = image;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.classList.add('overflow-hidden');

            setTimeout(() => {
                modal.classList.add('show');
            }, 10);
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            modal.classList.remove('show');

            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }, 300);
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') closeProjectModal();
        });
    </script>
</body>
</html>
