<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>News</title>
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

<body class="bg-white">

    {{-- NAVBAR --}}
    @include('partials.navbar')


    {{-- SPACING NAVBAR --}}
    <div class="pt-22 md:pt-22"></div>


    {{-- ==========================================
         NEWS PAGE
    =========================================== --}}

    <section class="bg-white py-16 md:py-20 px-6 md:px-10 min-h-screen">

        <div class="max-w-[1200px] mx-auto">


            {{-- ==========================================
                 TITLE
            =========================================== --}}

            <div class="text-center mb-10 md:mb-12">

            <h1 class="text-3xl md:text-4xl font-bold text-[#0c1285] tracking-wide mb-3">
                News
            </h1>

            </div>


            {{-- ==========================================
                 CATEGORY FILTER
            =========================================== --}}

            <div class="flex flex-wrap justify-center gap-2 mb-8">

                {{-- ALL --}}
                <button
                    type="button"
                    onclick="filterNews('All', this)"
                    class="news-filter px-4 py-2 rounded-full border border-[#0c1285] bg-[#0c1285] text-white text-[11px] font-medium transition-all duration-300"
                >
                    All
                </button>


                {{-- COMPANY NEWS --}}
                <button
                    type="button"
                    onclick="filterNews('Company News', this)"
                    class="news-filter px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-500 text-[11px] font-medium hover:border-[#0c1285] hover:text-[#0c1285] transition-all duration-300"
                >
                    Company News
                </button>


                {{-- DIGITAL MARKETING --}}
                <button
                    type="button"
                    onclick="filterNews('Digital Marketing', this)"
                    class="news-filter px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-500 text-[11px] font-medium hover:border-[#0c1285] hover:text-[#0c1285] transition-all duration-300"
                >
                    Digital Marketing
                </button>


                {{-- TECHNOLOGY --}}
                <button
                    type="button"
                    onclick="filterNews('Technology', this)"
                    class="news-filter px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-500 text-[11px] font-medium hover:border-[#0c1285] hover:text-[#0c1285] transition-all duration-300"
                >
                    Technology
                </button>


                {{-- CLIENT STORIES --}}
                <button
                    type="button"
                    onclick="filterNews('Client Stories', this)"
                    class="news-filter px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-500 text-[11px] font-medium hover:border-[#0c1285] hover:text-[#0c1285] transition-all duration-300"
                >
                    Client Stories
                </button>

            </div>


            {{-- ==========================================
                 NEWS GRID
            =========================================== --}}

            <div
                id="newsGrid"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6"
            >


                {{-- NEWS 1 --}}
                <article
                    onclick="window.location.href='/newsdetail'"
                    class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    data-category="Technology"
                >

                    <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            alt="Technology News"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"
                        ></div>

                        <span
                            class="absolute top-3 left-3 bg-[#0c1285] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide"
                        >
                            Technology
                        </span>

                    </div>

                    <div class="p-4">

                        <h3
                            class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#0c1285] transition-colors"
                        >
                            Accelerating Growth: How Generative AI is Reshaping CRM Systems
                        </h3>

                        <p
                            class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4"
                        >
                            Discover how modern businesses are leveraging advanced AI systems to automate customer workflows and improve business efficiency.
                        </p>

                        <span
                            class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#0c1285] transition-colors"
                        >
                            Read More →
                        </span>

                    </div>

                </article>


                {{-- NEWS 2 --}}
                <article
                    onclick="window.location.href='/newsdetail'"
                    class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    data-category="Company News"
                >

                    <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            alt="Company News"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"
                        ></div>

                        <span
                            class="absolute top-3 left-3 bg-[#0c1285] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide"
                        >
                            Company News
                        </span>

                    </div>

                    <div class="p-4">

                        <h3
                            class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#0c1285] transition-colors"
                        >
                            Slameticon Digital Valey Expands Its Digital Innovation Services
                        </h3>

                        <p
                            class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4"
                        >
                            Slameticon Digital Valey continues to develop integrated digital solutions to support businesses in navigating digital transformation.
                        </p>

                        <span
                            class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#0c1285] transition-colors"
                        >
                            Read More →
                        </span>

                    </div>

                </article>


                {{-- NEWS 3 --}}
                <article
                    onclick="window.location.href='/newsdetail'"
                    class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    data-category="Digital Marketing"
                >

                    <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            alt="Digital Marketing News"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"
                        ></div>

                        <span
                            class="absolute top-3 left-3 bg-[#0c1285] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide"
                        >
                            Digital Marketing
                        </span>

                    </div>

                    <div class="p-4">

                        <h3
                            class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#0c1285] transition-colors"
                        >
                            Building Stronger Digital Presence Through Data-Driven Marketing
                        </h3>

                        <p
                            class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4"
                        >
                            Data-driven marketing enables businesses to understand their audience and create more relevant digital campaigns.
                        </p>

                        <span
                            class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#0c1285] transition-colors"
                        >
                            Read More →
                        </span>

                    </div>

                </article>


                {{-- NEWS 4 --}}
                <article
                    onclick="window.location.href='/newsdetail'"
                    class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    data-category="Technology"
                >

                    <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            alt="Technology News"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"
                        ></div>

                        <span
                            class="absolute top-3 left-3 bg-[#0c1285] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide"
                        >
                            Technology
                        </span>

                    </div>

                    <div class="p-4">

                        <h3
                            class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#0c1285] transition-colors"
                        >
                            Digital Transformation and the Future of Business Technology
                        </h3>

                        <p
                            class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4"
                        >
                            Technology continues to reshape the way businesses operate, communicate, and deliver value to their customers.
                        </p>

                        <span
                            class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#0c1285] transition-colors"
                        >
                            Read More →
                        </span>

                    </div>

                </article>


                {{-- NEWS 5 --}}
                <article
                    onclick="window.location.href='/newsdetail'"
                    class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    data-category="Client Stories"
                >

                    <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            alt="Client Stories"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"
                        ></div>

                        <span
                            class="absolute top-3 left-3 bg-[#0c1285] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide"
                        >
                            Client Stories
                        </span>

                    </div>

                    <div class="p-4">

                        <h3
                            class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#0c1285] transition-colors"
                        >
                            Helping Businesses Build Better Digital Experiences
                        </h3>

                        <p
                            class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4"
                        >
                            Through technology and creative strategies, businesses can create digital experiences that are more effective and meaningful.
                        </p>

                        <span
                            class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#0c1285] transition-colors"
                        >
                            Read More →
                        </span>

                    </div>

                </article>


                {{-- NEWS 6 --}}
                <article
                    onclick="window.location.href='/newsdetail'"
                    class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    data-category="Digital Marketing"
                >

                    <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            alt="Digital Marketing"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"
                        ></div>

                        <span
                            class="absolute top-3 left-3 bg-[#0c1285] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide"
                        >
                            Digital Marketing
                        </span>

                    </div>

                    <div class="p-4">

                        <h3
                            class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#0c1285] transition-colors"
                        >
                            Turning Creative Ideas Into Meaningful Digital Campaigns
                        </h3>

                        <p
                            class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4"
                        >
                            Creative ideas combined with strategic planning can help businesses communicate their message and reach the right audience.
                        </p>

                        <span
                            class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#0c1285] transition-colors"
                        >
                            Read More →
                        </span>

                    </div>

                </article>


                {{-- NEWS 7 --}}
                <article
                    onclick="window.location.href='/newsdetail'"
                    class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    data-category="Technology"
                >

                    <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            alt="Technology"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"
                        ></div>

                        <span
                            class="absolute top-3 left-3 bg-[#0c1285] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide"
                        >
                            Technology
                        </span>

                    </div>

                    <div class="p-4">

                        <h3
                            class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#0c1285] transition-colors"
                        >
                            Custom Technology Solutions for Modern Business Challenges
                        </h3>

                        <p
                            class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4"
                        >
                            Custom technology solutions provide businesses with flexible tools designed around their specific operational needs.
                        </p>

                        <span
                            class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#0c1285] transition-colors"
                        >
                            Read More →
                        </span>

                    </div>

                </article>


                {{-- NEWS 8 --}}
                <article
                    onclick="window.location.href='/newsdetail'"
                    class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    data-category="Company News"
                >

                    <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            alt="Company News"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"
                        ></div>

                        <span
                            class="absolute top-3 left-3 bg-[#0c1285] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide"
                        >
                            Company News
                        </span>

                    </div>

                    <div class="p-4">

                        <h3
                            class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#0c1285] transition-colors"
                        >
                            Connecting Strategy, Creativity, and Technology
                        </h3>

                        <p
                            class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4"
                        >
                            Combining strategy, creativity, and technology allows businesses to approach digital challenges from a broader perspective.
                        </p>

                        <span
                            class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#0c1285] transition-colors"
                        >
                            Read More →
                        </span>

                    </div>

                </article>


                {{-- NEWS 9 --}}
                <article
                    onclick="window.location.href='/newsdetail'"
                    class="news-card cursor-pointer bg-white border border-gray-200 rounded-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    data-category="Client Stories"
                >

                    <div class="relative aspect-[16/9] overflow-hidden bg-gray-100">

                        <img
                            src="{{ asset('images/slameticon.png') }}"
                            alt="Client Stories"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/35 transition-all duration-300"
                        ></div>

                        <span
                            class="absolute top-3 left-3 bg-[#0c1285] text-white px-3 py-1 rounded-sm text-[9px] font-semibold uppercase tracking-wide"
                        >
                            Client Stories
                        </span>

                    </div>

                    <div class="p-4">

                        <h3
                            class="text-[14px] md:text-[15px] font-bold text-gray-900 leading-snug mb-2 group-hover:text-[#0c1285] transition-colors"
                        >
                            Creating Practical Solutions That Support Business Growth
                        </h3>

                        <p
                            class="text-[11px] text-gray-500 leading-relaxed line-clamp-2 mb-4"
                        >
                            Digital solutions are most effective when they are designed to solve real business problems and create measurable value.
                        </p>

                        <span
                            class="relative z-20 inline-block text-[10px] font-semibold text-gray-700 group-hover:text-[#0c1285] transition-colors"
                        >
                            Read More →
                        </span>

                    </div>

                </article>

            </div>

        </div>

    </section>


    {{-- ==========================================
         FILTER JAVASCRIPT
    =========================================== --}}

    <script>
        function filterNews(category, button) {

            const cards = document.querySelectorAll('.news-card');
            const buttons = document.querySelectorAll('.news-filter');

            // Reset button
            buttons.forEach(btn => {

                btn.classList.remove(
                    'bg-[#0c1285]',
                    'text-white'
                );

                btn.classList.add(
                    'bg-white',
                    'text-gray-500'
                );

            });


            // Active button
            button.classList.remove(
                'bg-white',
                'text-gray-500'
            );

            button.classList.add(
                'bg-[#0c1285]',
                'text-white'
            );


            // Filter cards
            cards.forEach(card => {

                const cardCategory = card.dataset.category;

                if (
                    category === 'All' ||
                    cardCategory === category
                ) {

                    card.classList.remove('hidden-card');

                } else {

                    card.classList.add('hidden-card');

                }

            });

        }
    </script>


    {{-- FOOTER --}}
    @include('partials.footer')

</body>
</html>
