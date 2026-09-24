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
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap"
        rel="stylesheet">

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
            transition: all 0.3s ease;
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
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            margin-top: 0;
            transition: max-height 0.4s ease, opacity 0.3s ease, margin-top 0.3s ease;
        }

        .workphase-item:hover .workphase-description {
            max-height: 150px;
            opacity: 1;
            margin-top: 7px;
        }

        .workphase-item:hover .workphase-number {
            background-color: #ffffff;
            color: #1112A2;
            font-weight: 700;
        }

        /* =========================================
           PROJECT IMAGE SLIDER (MARQUEE)
           ========================================= */
        .project-slider {
            width: 100%;
            overflow: hidden;
            position: relative;
            container-type: inline-size; /* supaya satuan cqw mengacu ke lebar slider */
        }

        .project-track {
            --slide-gap: 16px;
            display: flex;
            width: max-content;
            animation: projectSlide 28s linear infinite;
        }

        .project-track.few-items {
            --slide-gap: 24px;
            animation-duration: 22s;
        }

        .project-track.single-item {
            --slide-gap: 24px;
            animation-duration: 30s;
        }

        .project-slider:hover .project-track {
            animation-play-state: paused;
        }

        /* Standar: produk >= 4 */
        .project-slide {
            width: 270px;
            height: 155px;
            flex-shrink: 0;
            overflow: hidden;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            margin-right: var(--slide-gap); /* pakai margin, bukan gap, supaya loop -50% mulus */
        }

        /* 2 - 3 produk: pas 2 gambar per layar */
        .project-slide.is-wide {
            width: calc((100cqw - var(--slide-gap)) / 2);
            height: 260px;
        }

        /* 1 produk: gambar full selebar container */
        .project-slide.is-single {
            width: 100cqw;
            height: 380px;
        }

        .project-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .project-slide:hover img {
            transform: scale(1.04);
        }

        .project-slide-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.65), transparent 60%);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: flex-end;
            padding: 16px;
        }

        .project-slide:hover .project-slide-overlay {
            opacity: 1;
        }

        @keyframes projectSlide {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
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

            .project-track,
            .project-track.few-items,
            .project-track.single-item {
                --slide-gap: 12px;
                animation-duration: 20s;
            }

            .project-slide {
                width: 230px;
                height: 135px;
            }

            .project-slide.is-wide {
                width: calc((100cqw - var(--slide-gap)) / 2);
                height: 150px;
            }

            .project-slide.is-single {
                width: 100cqw;
                height: 200px;
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
            {{ __('Products') }}
        </span>
    </div>

    <!-- =========================================================
         SECTION : PROJECT / WORKPHASE ACCORDION
         ========================================================= -->
    <section id="projects" class="bg-[#1112A2] text-white py-20 md:py-24 px-6 md:px-12 overflow-hidden">
        <div class="max-w-[1050px] mx-auto">

            @foreach($categories as $category)
                <div class="project-accordion {{ $loop->first ? 'active' : '' }} border border-white/30 rounded-md mb-3 overflow-hidden" data-accordion>
                    <!-- HEADER ACCORDION -->
                    <button type="button"
                        class="w-full flex items-center justify-between px-5 md:px-6 py-4 md:py-5 text-left"
                        onclick="toggleAccordion(this)">
                        <span class="text-[21px] md:text-[27px] font-medium">
                            {{ $category->name }}
                        </span>
                        <svg class="accordion-icon w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="1.7" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 18l6-6-6-6" />
                        </svg>
                    </button>

                    <!-- CONTENT -->
                    <div class="project-content">
                        <div class="project-content-inner">
                            <div class="px-5 md:px-6 pb-7 md:pb-9">

                                <!-- WORKPHASE -->
                                @if($category->workPhases->isNotEmpty())
                                    <div class="pt-3 mb-8">
                                        <p class="text-[10px] md:text-[11px] text-white/70 mb-4">Workphase</p>
                                        <div class="workphase-grid">
                                            @foreach($category->workPhases as $index => $phase)
                                                <div class="workphase-item">
                                                    <div class="flex items-start gap-3">
                                                        <span class="workphase-number">{{ $index + 1 }}</span>
                                                        <div>
                                                            <h4 class="workphase-title">
                                                                {{ $phase->title }}
                                                            </h4>
                                                            <p class="workphase-description text-sm md:text-base leading-relaxed text-gray-600">
                                                                {{ $phase->description }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <!-- SELECTED PROJECTS (PRODUCTS) -->
                                @if($category->products->isNotEmpty())
                                    @php
                                        $productCount = $category->products->count();
                                        $isSingle = $productCount === 1;
                                        $isFew = $productCount > 1 && $productCount < 4;

                                        // Satu set produk sudah >= lebar container,
                                        // jadi cukup 2x agar loop translateX(-50%) selalu utuh tanpa jeda kosong
                                        $repeatTimes = 2;

                                        $trackClass = $isSingle ? 'single-item' : ($isFew ? 'few-items' : '');
                                        $slideClass = $isSingle ? 'is-single' : ($isFew ? 'is-wide' : '');
                                    @endphp

                                    <div>
                                        <p class="text-[10px] md:text-[11px] text-white/70 mb-3">{{ __('Selected Projects') }}</p>

                                        <div class="project-slider">
                                            <div class="project-track {{ $trackClass }}">

                                                @for ($i = 0; $i < $repeatTimes; $i++)
                                                    @foreach($category->products as $product)
                                                        @php
                                                            if ($product->img_url) {
                                                                $imageUrl = filter_var($product->img_url, FILTER_VALIDATE_URL)
                                                                    ? $product->img_url
                                                                    : \Illuminate\Support\Facades\Storage::url($product->img_url);
                                                            } else {
                                                                $imageUrl = asset('images/default.jpg');
                                                            }
                                                        @endphp

                                                        <div class="project-slide {{ $slideClass }}"
                                                            data-title="{{ $product->name }}"
                                                            data-description="{{ $product->description }}"
                                                            data-image="{{ $imageUrl }}"
                                                            data-link="{{ $product->link_url }}"
                                                            onclick="openProjectModal(this)">
                                                            <img src="{{ $imageUrl }}" alt="{{ $product->name }}">
                                                            <div class="project-slide-overlay">
                                                                <span class="text-white text-xs md:text-sm font-medium">
                                                                    {{ $product->name }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endfor

                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- =========================================================
         PROJECT MODAL
         ========================================================= -->
    <div id="projectModal"
        class="fixed inset-0 z-[9999] hidden items-center justify-center p-5 bg-black/80 backdrop-blur-sm">
        <!-- OVERLAY -->
        <div class="absolute inset-0" onclick="closeProjectModal()"></div>

        <!-- MODAL BOX -->
        <div id="projectModalBox"
            class="relative w-full max-w-[800px] bg-white rounded-xl overflow-hidden shadow-2xl">
            <!-- CLOSE -->
            <button onclick="closeProjectModal()"
                class="absolute top-4 right-4 z-20 w-9 h-9 rounded-full bg-white/90 text-gray-700 flex items-center justify-center shadow hover:bg-[#1112A2] hover:text-white transition">
                ✕
            </button>

            <!-- IMAGE -->
            <div class="w-full bg-gray-100">
                <img id="projectModalImage" src="" alt="Project"
                    class="w-full max-h-[55vh] object-contain">
            </div>

            <!-- CONTENT -->
            <div class="p-6 md:p-8">
                <span
                    class="inline-block bg-[#eef0ff] text-[#1112A2] px-3 py-1 rounded-sm text-[10px] font-semibold uppercase tracking-wide mb-3">
                    Slameticon
                </span>
                <h3 id="projectModalTitle" class="text-xl md:text-2xl font-bold text-gray-900 mb-3"></h3>
                <p id="projectModalDescription" class="text-[14px] text-gray-600 leading-relaxed"></p>

                <!-- PRODUCT LINK (disembunyikan kalau link_url kosong) -->
                <a id="projectModalLink" href="#" target="_blank" rel="noopener noreferrer"
                    class="hidden mt-5 items-center gap-3 max-w-full border border-[#1112A2]/20 rounded-md px-4 py-3 text-[#1112A2] hover:bg-[#1112A2] hover:text-white transition group">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 6H18v4.5M18 6l-8 8M10.5 6H7a2 2 0 00-2 2v9a2 2 0 002 2h9a2 2 0 002-2v-3.5" />
                    </svg>
                    <span class="flex flex-col min-w-0">
                        <span class="text-[10px] uppercase tracking-wide font-semibold opacity-70">{{ __('Visit Product') }}</span>
                        <span id="projectModalLinkText" class="text-[13px] font-medium truncate"></span>
                    </span>
                </a>
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

        function openProjectModal(el) {
            const modal = document.getElementById('projectModal');
            document.getElementById('projectModalTitle').textContent = el.dataset.title || '';
            document.getElementById('projectModalDescription').textContent = el.dataset.description || '';
            document.getElementById('projectModalImage').src = el.dataset.image || '';

            // Link produk
            const linkEl = document.getElementById('projectModalLink');
            const linkText = document.getElementById('projectModalLinkText');
            let link = (el.dataset.link || '').trim();

            if (link && !/^https?:\/\//i.test(link)) {
                link = 'https://' + link; // kalau lupa tulis http(s)://
            }

            let validLink = false;
            try {
                const parsed = new URL(link);
                validLink = ['http:', 'https:'].includes(parsed.protocol);
            } catch (e) {}

            if (validLink) {
                linkEl.href = link;
                linkText.textContent = link.replace(/^https?:\/\//i, '').replace(/\/$/, '');
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