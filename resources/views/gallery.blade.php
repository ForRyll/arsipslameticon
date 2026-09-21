<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery - Slameticon Digital Valley</title>
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/slameticon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/slameticon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

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


<body class="bg-white text-black antialiased selection:bg-[#0c1285] selection:text-white">


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

    <main class="max-w-[1400px] mx-auto px-6 md:px-12 pb-24 min-h-screen">


        {{-- ==========================================
             TITLE
             ========================================== --}}

        <div class="text-center mb-10">

            <h1 class="text-3xl md:text-4xl font-bold text-[#0c1285] tracking-wide mb-3">
                Gallery
            </h1>

            <p class="text-gray-500 text-[14px] md:text-[15px] max-w-xl mx-auto">
                Explore our moments, projects, and behind-the-scenes at Slameticon Digital Valley.
            </p>

        </div>



        {{-- ==========================================
             FILTER
             ========================================== --}}

        <div class="flex flex-col md:flex-row justify-center items-center gap-3 mb-12">


            {{-- ALL PHOTOS --}}

            <button
                type="button"
                onclick="filterGallery()"
                class="filter-btn active-filter px-5 py-2.5 rounded-full border border-[#0c1285] bg-[#0c1285] text-white text-[13px] font-medium transition-all duration-300 hover:opacity-90"
            >
                All Photos
            </button>


            {{-- YEAR FILTER --}}

            <div class="relative">

                <select
                    id="yearFilter"
                    onchange="filterGallery()"
                    class="appearance-none w-[160px] px-5 py-2.5 pr-10 rounded-full border border-gray-300 bg-white text-gray-600 text-[13px] font-medium outline-none cursor-pointer transition-all duration-300 hover:border-[#0c1285] focus:border-[#0c1285]"
                >

                    <option value="">All Years</option>
                    <option value="2026">2026</option>
                    <option value="2025">2025</option>

                </select>

                <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs">
                    ▼
                </span>

            </div>



            {{-- MONTH FILTER --}}

            <div class="relative">

                <select
                    id="monthFilter"
                    onchange="filterGallery()"
                    class="appearance-none w-[170px] px-5 py-2.5 pr-10 rounded-full border border-gray-300 bg-white text-gray-600 text-[13px] font-medium outline-none cursor-pointer transition-all duration-300 hover:border-[#0c1285] focus:border-[#0c1285]"
                >

                    <option value="">All Months</option>

                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>

                </select>

                <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs">
                    ▼
                </span>

            </div>



            {{-- CATEGORY FILTER --}}

            <div class="relative">

                <select
                    id="categoryFilter"
                    onchange="filterGallery()"
                    class="appearance-none w-[170px] px-5 py-2.5 pr-10 rounded-full border border-gray-300 bg-white text-gray-600 text-[13px] font-medium outline-none cursor-pointer transition-all duration-300 hover:border-[#0c1285] focus:border-[#0c1285]"
                >

                    <option value="">All Categories</option>
                    <option value="Projects">Projects</option>
                    <option value="Newest">Newest</option>
                    <option value="Oldest">Oldest</option>

                </select>

                <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs">
                    ▼
                </span>

            </div>

        </div>



        {{-- ==========================================
             GALLERY GRID
             ========================================== --}}

        <div
            id="galleryGrid"
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-5"
        >


            {{-- ==========================================
                 PHOTO 1
                 ========================================== --}}

            <div
                class="gallery-item group relative cursor-pointer rounded-xl overflow-hidden border border-gray-200 hover:shadow-xl"
                data-category="Newest"
                data-date="2026-09-15"
                data-title="Mobile App Launch"
                data-caption="Perilisan aplikasi mobile terbaru untuk sektor edukasi, dibangun dengan React Native."
                data-display-date="15 September 2026"
                onclick="openGalleryModal(this)"
            >

                <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Mobile App Launch"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    >

                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">

                    <h4 class="text-white font-bold text-[15px]">
                        Mobile App Launch
                    </h4>

                    <p class="text-gray-300 text-[11px] mt-1">
                        15 September 2026
                    </p>

                </div>

            </div>



            {{-- ==========================================
                 PHOTO 2
                 ========================================== --}}

            <div
                class="gallery-item group relative cursor-pointer rounded-xl overflow-hidden border border-gray-200 hover:shadow-xl"
                data-category="Oldest"
                data-date="2025-01-10"
                data-title="Kantor Pertama Slameticon"
                data-caption="Suasana peresmian kantor pertama Slameticon Digital Valley di Purwokerto."
                data-display-date="10 Januari 2025"
                onclick="openGalleryModal(this)"
            >

                <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Kantor Pertama Slameticon"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    >

                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">

                    <h4 class="text-white font-bold text-[15px]">
                        Kantor Pertama Slameticon
                    </h4>

                    <p class="text-gray-300 text-[11px] mt-1">
                        10 Januari 2025
                    </p>

                </div>

            </div>



            {{-- ==========================================
                 PHOTO 3
                 ========================================== --}}

            <div
                class="gallery-item group relative cursor-pointer rounded-xl overflow-hidden border border-gray-200 hover:shadow-xl"
                data-category="Projects"
                data-date="2026-06-20"
                data-title="Bimbelio Dashboard"
                data-caption="Tampilan arsitektur sistem informasi akademik untuk Bimbelio."
                data-display-date="20 Juni 2026"
                onclick="openGalleryModal(this)"
            >

                <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Bimbelio Dashboard"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    >

                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">

                    <h4 class="text-white font-bold text-[15px]">
                        Bimbelio Dashboard
                    </h4>

                    <p class="text-gray-300 text-[11px] mt-1">
                        20 Juni 2026
                    </p>

                </div>

            </div>



            {{-- ==========================================
                 PHOTO 4
                 ========================================== --}}

            <div
                class="gallery-item group relative cursor-pointer rounded-xl overflow-hidden border border-gray-200 hover:shadow-xl"
                data-category="Newest"
                data-date="2026-08-30"
                data-title="Workshop AI Terapan"
                data-caption="Pelatihan pemanfaatan AI Generatif untuk produktivitas karyawan perusahaan IT."
                data-display-date="30 Agustus 2026"
                onclick="openGalleryModal(this)"
            >

                <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Workshop AI Terapan"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    >

                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">

                    <h4 class="text-white font-bold text-[15px]">
                        Workshop AI Terapan
                    </h4>

                    <p class="text-gray-300 text-[11px] mt-1">
                        30 Agustus 2026
                    </p>

                </div>

            </div>



            {{-- ==========================================
                 PHOTO 5
                 ========================================== --}}

            <div
                class="gallery-item group relative cursor-pointer rounded-xl overflow-hidden border border-gray-200 hover:shadow-xl"
                data-category="Projects"
                data-date="2026-03-12"
                data-title="Data Center Maintenance"
                data-caption="Perawatan rutin infrastruktur cloud server oleh tim infrastruktur Slameticon."
                data-display-date="12 Maret 2026"
                onclick="openGalleryModal(this)"
            >

                <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Data Center Maintenance"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    >

                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">

                    <h4 class="text-white font-bold text-[15px]">
                        Data Center Maintenance
                    </h4>

                    <p class="text-gray-300 text-[11px] mt-1">
                        12 Maret 2026
                    </p>

                </div>

            </div>



            {{-- ==========================================
                 PHOTO 6
                 ========================================== --}}

            <div
                class="gallery-item group relative cursor-pointer rounded-xl overflow-hidden border border-gray-200 hover:shadow-xl"
                data-category="Oldest"
                data-date="2025-05-25"
                data-title="Meetup Klien Pertama"
                data-caption="Diskusi roadmap digitalisasi bisnis dengan klien manufaktur pertama kami."
                data-display-date="25 Mei 2025"
                onclick="openGalleryModal(this)"
            >

                <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Meetup Klien Pertama"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    >

                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">

                    <h4 class="text-white font-bold text-[15px]">
                        Meetup Klien Pertama
                    </h4>

                    <p class="text-gray-300 text-[11px] mt-1">
                        25 Mei 2025
                    </p>

                </div>

            </div>



            {{-- ==========================================
                 PHOTO 7
                 ========================================== --}}

            <div
                class="gallery-item group relative cursor-pointer rounded-xl overflow-hidden border border-gray-200 hover:shadow-xl"
                data-category="Newest"
                data-date="2026-09-01"
                data-title="Brainstorming UI/UX"
                data-caption="Tim Design sedang melakukan wireframing untuk redesign platform e-commerce."
                data-display-date="01 September 2026"
                onclick="openGalleryModal(this)"
            >

                <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Brainstorming UI/UX"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    >

                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">

                    <h4 class="text-white font-bold text-[15px]">
                        Brainstorming UI/UX
                    </h4>

                    <p class="text-gray-300 text-[11px] mt-1">
                        01 September 2026
                    </p>

                </div>

            </div>



            {{-- ==========================================
                 PHOTO 8
                 ========================================== --}}

            <div
                class="gallery-item group relative cursor-pointer rounded-xl overflow-hidden border border-gray-200 hover:shadow-xl"
                data-category="Projects"
                data-date="2025-11-15"
                data-title="Backend API Deployment"
                data-caption="Sukses mendeploy arsitektur microservices untuk menangani 1 juta request/hari."
                data-display-date="15 November 2025"
                onclick="openGalleryModal(this)"
            >

                <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Backend API Deployment"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    >

                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">

                    <h4 class="text-white font-bold text-[15px]">
                        Backend API Deployment
                    </h4>

                    <p class="text-gray-300 text-[11px] mt-1">
                        15 November 2025
                    </p>

                </div>

            </div>


        </div>

    </main>



    {{-- ==========================================
         MODAL
         ========================================== --}}

    <div
        id="galleryModal"
        class="fixed inset-0 z-[9999] hidden items-center justify-center p-5 opacity-0 transition-opacity duration-300"
    >

        {{-- Overlay --}}

        <div
            class="absolute inset-0 bg-black/80 backdrop-blur-sm"
            onclick="closeGalleryModal()"
        ></div>


        {{-- Modal Box --}}

        <div
            id="modalBox"
            class="relative w-full max-w-[850px] bg-white rounded-2xl shadow-2xl overflow-hidden scale-95 transition-transform duration-300 flex flex-col"
        >

            {{-- Close Button --}}

            <button
                type="button"
                onclick="closeGalleryModal()"
                class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-white/90 text-gray-700 hover:bg-[#0c1285] hover:text-white transition-colors duration-200 flex items-center justify-center shadow"
            >
                ✕
            </button>


            {{-- Image --}}

            <div class="w-full bg-gray-100 border-b border-gray-200">

                <img
                    id="modalImage"
                    src=""
                    alt="Preview"
                    class="w-full max-h-[60vh] object-contain"
                >

            </div>


            {{-- Content --}}

            <div class="p-6 md:p-8 bg-white">

                <div class="flex items-center gap-2 mb-3">

                    <span class="inline-block bg-[#eef0ff] text-[#0c1285] px-3 py-1 rounded-sm text-[10px] font-semibold uppercase tracking-wide">
                        Slameticon
                    </span>

                    <span
                        id="modalDate"
                        class="text-[12px] text-gray-500 font-medium"
                    ></span>

                </div>


                <h3
                    id="modalTitle"
                    class="text-xl md:text-2xl font-bold text-gray-900 leading-tight mb-2"
                ></h3>


                <p
                    id="modalCaption"
                    class="text-[14px] text-gray-600 leading-relaxed"
                ></p>

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

            const image = element.querySelector('img');

            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalCaption').textContent = caption;
            document.getElementById('modalDate').textContent = date;
            document.getElementById('modalImage').src = image.src;


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

            const year =
                document.getElementById('yearFilter').value;

            const month =
                document.getElementById('monthFilter').value;

            const category =
                document.getElementById('categoryFilter').value;


            const items =
                document.querySelectorAll('.gallery-item');


            items.forEach(item => {

                const date =
                    item.getAttribute('data-date');

                const itemCategory =
                    item.getAttribute('data-category');


                /*
                ==========================================
                DATE
                ==========================================
                */

                const itemYear =
                    date.substring(0, 4);

                const itemMonth =
                    date.substring(5, 7);


                /*
                ==========================================
                CHECK YEAR
                ==========================================
                */

                const matchYear =
                    year === '' ||
                    itemYear === year;


                /*
                ==========================================
                CHECK MONTH
                ==========================================
                */

                const matchMonth =
                    month === '' ||
                    itemMonth === month;


                /*
                ==========================================
                CHECK CATEGORY
                ==========================================
                */

                const matchCategory =
                    category === '' ||
                    itemCategory === category;


                /*
                ==========================================
                FINAL RESULT
                ==========================================
                */

                if (
                    matchYear &&
                    matchMonth &&
                    matchCategory
                ) {

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

    </script>


</body>
</html>
