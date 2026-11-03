<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO / Global Metadata --}}
    <title>Gallery | Slameticon Digital Valey</title>
    <meta name="description" content="Lihat berbagai aktivitas, project, kegiatan, dan karya PT Slameticon Digital Valey dalam menghadirkan solusi digital untuk berbagai kebutuhan bisnis.">
    <meta name="keywords" content="Slameticon Digital Valey, PT Slameticon Digital Valey, digital solutions, software development, software development Indonesia, digital marketing, digital marketing Indonesia, social media management, branding, brand identity, digital transformation, custom software development, digital platform, business digital solutions">
    <meta name="author" content="PT Slameticon Digital Valey">
    <meta name="robots" content="index, follow">

    {{-- Open Graph (Meta Sharing Social Media) --}}
    <meta property="og:site_name" content="Slameticon Digital Valey">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Gallery | Slameticon Digital Valey">
    <meta property="og:description" content="Lihat berbagai aktivitas, project, kegiatan, dan karya PT Slameticon Digital Valey dalam menghadirkan solusi digital untuk berbagai kebutuhan bisnis.">
    <meta property="og:image" content="{{ asset('images/slameticon.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/slameticon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/studio-app.js'])

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
    </style>
</head>

<body class="bg-white text-black antialiased selection:bg-[#1112A2] selection:text-white">

    {{-- ==========================================
         NAVBAR
         ========================================== --}}
    @include('partials.navbar')

    {{-- ==========================================
         SPACER NAVBAR
         ========================================== --}}
    <div class="pt-32 md:pt-40"></div>

    {{-- ==========================================
         GALLERY
         ========================================== --}}
    <main class="max-w-[1600px] mx-auto px-6 md:px-12 pb-24 min-h-screen">

        {{-- ==========================================
             TITLE
             ========================================== --}}
        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-[#1112A2] tracking-wide mb-3">
                {{ __('Gallery') }}
            </h1>

            <p class="text-gray-500 text-[14px] md:text-[15px] max-w-xl mx-auto">
                {{ __('Explore our moments, projects, and behind-the-scenes at Slameticon Digital Valley.') }}
            </p>
        </div>

        {{-- ==========================================
             FILTER
             ========================================== --}}
        <div class="flex flex-col md:flex-row justify-center items-center gap-3 mb-12">

            {{-- RESET / ALL PHOTOS --}}
            <button type="button" onclick="resetGalleryFilter()"
                class="filter-btn active-filter px-5 py-2.5 rounded-full border border-[#1112A2] bg-[#1112A2] text-white text-[13px] font-medium transition-all duration-300 hover:opacity-90">
                {{ __('All Photos') }}
            </button>

            {{-- YEAR FILTER --}}
            <div class="relative">
                <select id="yearFilter" onchange="filterGallery()"
                    class="appearance-none w-[160px] px-5 py-2.5 pr-10 rounded-full border border-gray-300 bg-white text-gray-600 text-[13px] font-medium outline-none cursor-pointer transition-all duration-300 hover:border-[#1112A2] focus:border-[#1112A2]">
                    <option value="">{{ __('All Years') }}</option>
                    @foreach($years as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endforeach
                </select>
                <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs">
                    ▼
                </span>
            </div>

            {{-- MONTH FILTER --}}
            <div class="relative">
                <select id="monthFilter" onchange="filterGallery()"
                    class="appearance-none w-[170px] px-5 py-2.5 pr-10 rounded-full border border-gray-300 bg-white text-gray-600 text-[13px] font-medium outline-none cursor-pointer transition-all duration-300 hover:border-[#1112A2] focus:border-[#1112A2]">
                    <option value="">{{ __('All Months') }}</option>
                    <option value="01">{{ __('January') }}</option>
                    <option value="02">{{ __('February') }}</option>
                    <option value="03">{{ __('March') }}</option>
                    <option value="04">{{ __('April') }}</option>
                    <option value="05">{{ __('May') }}</option>
                    <option value="06">{{ __('June') }}</option>
                    <option value="07">{{ __('July') }}</option>
                    <option value="08">{{ __('August') }}</option>
                    <option value="09">{{ __('September') }}</option>
                    <option value="10">{{ __('October') }}</option>
                    <option value="11">{{ __('November') }}</option>
                    <option value="12">{{ __('December') }}</option>
                </select>
                <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs">
                    ▼
                </span>
            </div>

            {{-- CATEGORY FILTER --}}
            <div class="relative">
                <select id="categoryFilter" onchange="filterGallery()"
                    class="appearance-none w-[170px] px-5 py-2.5 pr-10 rounded-full border border-gray-300 bg-white text-gray-600 text-[13px] font-medium outline-none cursor-pointer transition-all duration-300 hover:border-[#1112A2] focus:border-[#1112A2]">
                    <option value="">{{ __('All Categories') }}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ method_exists($category, 'getTranslation') ? $category->getTranslation('name', app()->getLocale(), false) : $category->name }}
                        </option>
                    @endforeach
                </select>
                <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs">
                    ▼
                </span>
            </div>

        </div>

        {{-- ==========================================
             GALLERY GRID
             ========================================== --}}
        <div id="galleryGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-5">

            @forelse($galleries as $item)
                @php
                    // Penanganan URL gambar
                    if ($item->img_url) {
                        $imageUrl = filter_var($item->img_url, FILTER_VALIDATE_URL)
                            ? $item->img_url
                            : \Illuminate\Support\Facades\Storage::url($item->img_url);
                    } else {
                        $imageUrl = asset('images/logo_sdv.png');
                    }

                    $itemYear = $item->created_at ? $item->created_at->format('Y') : '';
                    $itemMonth = $item->created_at ? $item->created_at->format('m') : '';
                    $displayDate = $item->created_at ? $item->created_at->translatedFormat('d F Y') : '-';
                    $categoryName = $item->category->name ?? 'Uncategorized';
                @endphp

                <div class="gallery-item group relative cursor-pointer rounded-xl overflow-hidden border border-gray-200 hover:shadow-xl"
                    data-category-id="{{ $item->category_id }}"
                    data-year="{{ $itemYear }}"
                    data-month="{{ $itemMonth }}"
                    data-title="{{ $item->title }}"
                    data-caption="{{ $item->caption }}"
                    data-display-date="{{ $displayDate }}"
                    data-category-name="{{ $categoryName }}"
                    data-img="{{ $imageUrl }}"
                    onclick="openGalleryModal(this)">

                    <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">
                        <img src="{{ $imageUrl }}" alt="{{ $item->title }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white font-bold text-[15px]">
                            {{ $item->title }}
                        </h4>
                        <p class="text-gray-300 text-[11px] mt-1">
                            {{ $displayDate }}
                        </p>
                    </div>

                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-sm">{{ __('No gallery photos available.') }}</p>
                </div>
            @endforelse

        </div>

    </main>

    {{-- ==========================================
         MODAL
         ========================================== --}}
    <div id="galleryModal"
        class="fixed inset-0 z-[9999] hidden items-center justify-center p-5 opacity-0 transition-opacity duration-300">

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeGalleryModal()"></div>

        {{-- Modal Box --}}
        <div id="modalBox"
            class="relative w-full max-w-[850px] bg-white rounded-2xl shadow-2xl overflow-hidden scale-95 transition-transform duration-300 flex flex-col">

            {{-- Close Button --}}
            <button type="button" onclick="closeGalleryModal()"
                class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-white/90 text-gray-700 hover:bg-[#1112A2] hover:text-white transition-colors duration-200 flex items-center justify-center shadow">
                ✕
            </button>

            {{-- Image --}}
            <div class="w-full bg-gray-100 border-b border-gray-200">
                <img id="modalImage" src="" alt="Preview" class="w-full max-h-[60vh] object-contain">
            </div>

            {{-- Content --}}
            <div class="p-6 md:p-8 bg-white">
                <div class="flex items-center gap-2 mb-3">
                    <span id="modalCategory"
                        class="inline-block bg-[#eef0ff] text-[#1112A2] px-3 py-1 rounded-sm text-[10px] font-semibold uppercase tracking-wide">
                    </span>

                    <span id="modalDate" class="text-[12px] text-gray-500 font-medium"></span>
                </div>

                <h3 id="modalTitle" class="text-xl md:text-2xl font-bold text-gray-900 leading-tight mb-2"></h3>
                <p id="modalCaption" class="text-[14px] text-gray-600 leading-relaxed"></p>
            </div>

        </div>

    </div>

    {{-- ==========================================
         FOOTER
         ========================================== --}}
    @include('partials.footer')

    {{-- ==========================================
         JAVASCRIPT
         ========================================== --}}
    <script>
        /*
        ==========================================
        OPEN MODAL
        ==========================================
        */
        function openGalleryModal(element) {
            const title = element.getAttribute('data-title');
            const caption = element.getAttribute('data-caption');
            const date = element.getAttribute('data-display-date');
            const categoryName = element.getAttribute('data-category-name');
            const imgSrc = element.getAttribute('data-img');

            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalCaption').textContent = caption;
            document.getElementById('modalDate').textContent = date;
            document.getElementById('modalCategory').textContent = categoryName;
            document.getElementById('modalImage').src = imgSrc;

            const modal = document.getElementById('galleryModal');
            const modalBox = document.getElementById('modalBox');

            modal.classList.remove('hidden');
            modal.classList.add('flex');

            document.body.classList.add('overflow-hidden');

            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.classList.add('opacity-100');

                modalBox.classList.remove('scale-95');
                modalBox.classList.add('scale-100');
            }, 10);
        }

        /*
        ==========================================
        CLOSE MODAL
        ==========================================
        */
        function closeGalleryModal() {
            const modal = document.getElementById('galleryModal');
            const modalBox = document.getElementById('modalBox');

            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0');

            modalBox.classList.remove('scale-100');
            modalBox.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');

                document.body.classList.remove('overflow-hidden');
            }, 300);
        }

        /*
        ==========================================
        ESC KEY
        ==========================================
        */
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeGalleryModal();
            }
        });

        /*
        ==========================================
        FILTER GALLERY
        ==========================================
        */
        function filterGallery() {
            const year = document.getElementById('yearFilter').value;
            const month = document.getElementById('monthFilter').value;
            const categoryId = document.getElementById('categoryFilter').value;

            const items = document.querySelectorAll('.gallery-item');

            items.forEach(item => {
                const itemYear = item.getAttribute('data-year');
                const itemMonth = item.getAttribute('data-month');
                const itemCategoryId = item.getAttribute('data-category-id');

                const matchYear = year === '' || itemYear === year;
                const matchMonth = month === '' || itemMonth === month;
                const matchCategory = categoryId === '' || itemCategoryId === categoryId;

                if (matchYear && matchMonth && matchCategory) {
                    item.style.display = 'block';

                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 20);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.95)';

                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        }

        /*
        ==========================================
        RESET FILTER
        ==========================================
        */
        function resetGalleryFilter() {
            document.getElementById('yearFilter').value = '';
            document.getElementById('monthFilter').value = '';
            document.getElementById('categoryFilter').value = '';
            filterGallery();
        }
    </script>

</body>

</html>