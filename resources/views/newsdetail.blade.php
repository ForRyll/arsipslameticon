<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Accelerating Growth - Slameticon Digital Valey</title>
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


    {{-- ==========================================
         NEWS DETAIL
    =========================================== --}}

    <main>

        <section class="bg-white px-6 md:px-10 lg:px-16 py-12 md:py-20">

            <div class="max-w-[1100px] mx-auto">


                {{-- BACK BUTTON --}}

                <div class="mb-10 md:mb-14">

                    <a
                        href="{{ route('news') }}"
                        class="inline-flex items-center gap-2 text-[12px] md:text-[13px] font-medium text-gray-500 hover:text-[#0c1285] transition-colors duration-300"
                    >

                        <span class="text-lg leading-none">
                            ←
                        </span>

                        <span>
                            Back to News
                        </span>

                    </a>

                </div>


                {{-- HEADER --}}

                <div class="max-w-[900px] mx-auto mb-12 md:mb-16">


                    {{-- LABEL --}}

                    <div class="mb-5">

                        <span
                            class="text-[13px] md:text-[14px] font-semibold text-[#0c1285] tracking-wide"
                        >
                            Slameticon News
                        </span>

                    </div>


                    {{-- TITLE --}}

                    <h1
                        class="text-[30px] sm:text-[36px] md:text-[48px] lg:text-[56px] font-semibold text-gray-900 leading-[1.08] tracking-tight"
                    >
                        Accelerating Growth: How Generative AI is Reshaping CRM Systems
                    </h1>


                    {{-- DESCRIPTION --}}

                    <p
                        class="mt-7 text-[14px] md:text-[16px] text-gray-500 leading-relaxed max-w-[850px]"
                    >
                        Discover how modern businesses are leveraging advanced AI systems
                        to automate customer workflows and enhance user engagements.
                    </p>


                    {{-- META --}}

                    <div
                        class="flex flex-wrap items-center gap-x-6 gap-y-2 mt-7 text-[11px] md:text-[12px] text-gray-400"
                    >

                        <span>
                            12 September 2026
                        </span>

                        <span class="hidden sm:inline">
                            •
                        </span>

                        <span>
                            Slameticon Digital Valey
                        </span>

                    </div>

                </div>


                {{-- HERO IMAGE --}}

                <div
                    class="w-full aspect-[16/7] md:aspect-[16/6] overflow-hidden bg-gray-100 mb-12 md:mb-16"
                >

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Accelerating Growth: How Generative AI is Reshaping CRM Systems"
                        class="w-full h-full object-cover"
                    >

                </div>


                {{-- ARTICLE CONTENT --}}

                <article
                    class="max-w-[900px] mx-auto news-detail-content"
                >


                    {{-- INTRODUCTION --}}

                    <p
                        class="text-[15px] md:text-[17px] text-gray-700 leading-[1.9] mb-7"
                    >
                        Generative AI is changing the way businesses manage customer
                        relationships by introducing smarter automation and more
                        personalized customer interactions.
                    </p>


                    {{-- PARAGRAPH 2 --}}

                    <p
                        class="text-[14px] md:text-[16px] text-gray-600 leading-[1.9] mb-7"
                    >
                        Modern CRM platforms can use artificial intelligence to help
                        businesses analyze customer behavior, automate repetitive
                        workflows, and support teams in making faster decisions.
                        These capabilities allow organizations to focus more on
                        creating meaningful relationships with their customers.
                    </p>


                    {{-- SUBHEADING --}}

                    <h2
                        class="text-[22px] md:text-[28px] font-semibold text-gray-900 leading-tight mt-12 mb-6"
                    >
                        The Role of Generative AI in CRM
                    </h2>


                    {{-- PARAGRAPH 3 --}}

                    <p
                        class="text-[14px] md:text-[16px] text-gray-600 leading-[1.9] mb-7"
                    >
                        The integration of generative AI into customer relationship
                        management allows businesses to process large amounts of
                        customer information more efficiently. AI-powered systems
                        can assist teams in identifying patterns, generating
                        relevant responses, and improving the overall customer
                        experience.
                    </p>


                    {{-- PARAGRAPH 4 --}}

                    <p
                        class="text-[14px] md:text-[16px] text-gray-600 leading-[1.9] mb-7"
                    >
                        Automation also helps reduce repetitive tasks that previously
                        required significant amounts of manual work. By integrating
                        intelligent automation into CRM workflows, businesses can
                        provide faster responses while allowing employees to focus
                        on activities that require strategic decision-making.
                    </p>


                    {{-- SUBHEADING --}}

                    <h2
                        class="text-[22px] md:text-[28px] font-semibold text-gray-900 leading-tight mt-12 mb-6"
                    >
                        Supporting Better Business Decisions
                    </h2>


                    {{-- PARAGRAPH 5 --}}

                    <p
                        class="text-[14px] md:text-[16px] text-gray-600 leading-[1.9] mb-7"
                    >
                        Beyond automation, AI can support businesses in understanding
                        customer behavior and identifying opportunities for improvement.
                        Insights generated from customer interactions can help teams
                        develop more relevant communication strategies and improve
                        how they engage with their audiences.
                    </p>


                    {{-- PARAGRAPH 6 --}}

                    <p
                        class="text-[14px] md:text-[16px] text-gray-600 leading-[1.9] mb-7"
                    >
                        As digital technology continues to evolve, the integration of
                        AI into CRM systems is becoming an important part of modern
                        business transformation. Organizations that combine technology
                        with a clear understanding of their customers can develop
                        more efficient processes while creating better digital
                        experiences.
                    </p>


                    {{-- CLOSING --}}

                    <div
                        class="border-t border-gray-200 mt-12 md:mt-16 pt-8"
                    >

                        <p
                            class="text-[13px] md:text-[14px] text-gray-500 leading-relaxed text-justify"
                        >
                            Generative AI represents one of the technologies that
                            continues to shape the future of digital business.
                            Its application in CRM demonstrates how technology can
                            support efficiency, personalization, and stronger
                            relationships between businesses and their customers.
                        </p>

                    </div>

                </article>


                {{-- BACK BUTTON BOTTOM --}}

                <div
                    class="max-w-[900px] mx-auto mt-12 md:mt-16"
                >

                    <a
                        href="{{ route('news') }}"
                        class="inline-flex items-center gap-3 px-5 py-3 bg-[#0c1285] text-white rounded-sm text-[12px] md:text-[13px] font-medium hover:bg-[#080d68] transition-all duration-300"
                    >

                        <span class="text-base">
                            ←
                        </span>

                        <span>
                            Back to News
                        </span>

                    </a>

                </div>

            </div>

        </section>

    </main>


    {{-- FOOTER --}}
    @include('partials.footer')

</body>
</html>
