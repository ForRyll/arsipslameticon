<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our People - Slameticon Digital Valley</title>
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

        /* =========================================
           OUR PEOPLE LAYOUT
           ========================================= */

        .people-container {
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
        }

        .people-content {
            display: flex;
            align-items: center;
            gap: 55px;
        }

        .people-photo {
            width: 285px;
            height: 315px;
            flex-shrink: 0;
            object-fit: cover;
            object-position: top;
            border-radius: 4px;
        }

        .people-info {
            flex: 1;
            min-width: 0;
        }

        .people-name {
            font-size: 30px;
            line-height: 1.2;
            font-weight: 700;
            color: #1218ae;
            margin: 0 0 5px 0;
        }

        .people-position {
            font-size: 16px;
            line-height: 1.4;
            font-weight: 500;
            color: #222;
            margin: 0 0 3px 0;
        }

        .people-university {
            display: block;
            font-size: 12px;
            line-height: 1.5;
            font-weight: 500;
            color: #9ca3af;
            margin-bottom: 20px;
        }

        .people-description {
            max-width: 570px;
            font-size: 12px;
            line-height: 1.65;
            color: #6b7280;
        }

        .people-description p {
            margin: 0 0 10px 0;
        }


        /* =========================================
           OUR TEAM
           ========================================= */

        .team-container {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
        }

        .team-title {
            font-size: 22px;
            font-weight: 500;
            color: #1218ae;
            margin-bottom: 32px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            column-gap: 22px;
            row-gap: 48px;
        }

        .team-card {
            min-width: 0;
        }

        .team-image {
            width: 100%;
            aspect-ratio: 1 / 1;
            overflow: hidden;
            margin-bottom: 8px;
        }

        .team-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .team-card:hover .team-image img {
            transform: scale(1.04);
        }

        .team-role {
            font-size: 10px;
            line-height: 1.4;
            color: #555;
            margin: 0 0 4px;
        }

        .team-name {
            font-size: 17px;
            line-height: 1.3;
            font-weight: 500;
            color: #1218ae;
            margin: 0 0 8px;
        }

        .team-description {
            font-size: 10px;
            line-height: 1.5;
            color: #7d8797;
            margin: 0 0 12px;
        }


        /* =========================================
           TEAM SOCIALS
           ========================================= */

        .team-socials {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .team-socials a {
            width: 20px;
            height: 20px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            color: #555;

            transition:
                color 0.25s ease,
                transform 0.25s ease;
        }

        .team-socials a:hover {
            color: #1218ae;
            transform: translateY(-2px);
        }

        .team-socials svg {
            width: 15px;
            height: 15px;
            display: block;
        }


        /* =========================================
           TABLET
           ========================================= */

        @media (max-width: 900px) {

            .team-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 32px 20px;
            }

        }


        /* =========================================
           MOBILE
           ========================================= */

        @media (max-width: 767px) {

            .people-container {
                padding: 0 24px;
            }

            .people-content {
                flex-direction: column;
                gap: 30px;
                align-items: center;
            }

            .people-photo {
                width: 280px;
                height: 310px;
            }

            .people-info {
                width: 100%;
                text-align: left;
            }

            .people-name {
                font-size: 26px;
            }

            .people-description {
                max-width: 100%;
                font-size: 12px;
            }

        }


        @media (max-width: 600px) {

            .team-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 32px 16px;
            }

            .team-title {
                font-size: 20px;
            }

            .team-name {
                font-size: 15px;
            }

        }
    </style>

</head>


<body class="bg-white text-black antialiased selection:bg-[#1218ae] selection:text-white">


    {{-- =========================================
         NAVBAR
         ========================================= --}}
    @include('partials.navbar')


    {{-- =========================================
         SPACER
         ========================================= --}}
    <div class="pt-24 md:pt-28"></div>


    {{-- =========================================
         OUR PEOPLE
         ========================================= --}}

    <section class="py-12 md:py-16 px-6 md:px-12 bg-white">

        <div class="people-container">

            {{-- TITLE --}}
            <div class="mb-10 md:mb-12 text-center">

                            <h1 class="text-3xl md:text-4xl font-bold text-[#0c1285] tracking-wide mb-3">
                Our People
            </h1>

            </div>


            {{-- FOTO + INFORMASI --}}
            <div class="people-content">

                {{-- FOTO --}}
                <img
                    src="{{ asset('images/harryadin.png') }}"
                    alt="Harryadin Mahardika"
                    class="people-photo"
                >


                {{-- INFORMASI --}}
                <div class="people-info">

                    {{-- NAMA --}}
                    <h2 class="people-name">
                        Harryadin Mahardika
                    </h2>


                    {{-- JABATAN --}}
                    <h3 class="people-position">
                        Founder
                    </h3>


                    {{-- UNIVERSITAS --}}
                    <span class="people-university">
                        University of Indonesia | Monash University
                    </span>


                    {{-- DESKRIPSI --}}
                    <div class="people-description">

                        <p class="text-justify">
                            Harryadin Mahardika is the Founder of PT Slameticon Digital Valley.
                            With expertise in market research, branding, and business development,
                            he has led the company's vision of helping businesses grow through
                            technology, digital marketing, and innovative business solutions.
                        </p>

                        <p class="text-justify">
                            Driven by a deep understanding of consumer behavior and market dynamics,
                            Harryadin combines strategic thinking, creativity, and data-driven insights
                            to develop solutions that create meaningful business impact. His experience
                            spans across digital transformation, brand development, marketing strategy,
                            and technology integration.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================
         FOUNDER QUOTE
         ========================================= --}}

    <section class="w-full bg-[#1218ae] text-white py-12 md:py-14 px-6">

        <div class="max-w-[850px] mx-auto relative">

            <div class="px-10 md:px-14 text-center">

                <p class="text-[21px] md:text-[21px] font-semibold leading-relaxed">

                    "As the founder of PT Slameticon Digital Valley, Harryadin continues to
                    lead the company in delivering integrated digital solutions that
                    empower businesses to adapt, grow, and succeed in an increasingly
                    competitive digital landscape".

                </p>

            </div>

        </div>

    </section>


    {{-- =========================================
         OUR TEAM
         ========================================= --}}

    <section class="bg-white text-black py-16 md:py-20 px-6 md:px-10">

        <div class="team-container">

            {{-- TITLE --}}
            <div class="team-title">
                Our Team
            </div>


            {{-- =========================================
                 TEAM GRID
                 ========================================= --}}

            <div class="team-grid">


                {{-- =====================================
                     PERSON 1
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    {{-- SOCIAL MEDIA --}}
                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <rect
                                    x="3"
                                    y="3"
                                    width="18"
                                    height="18"
                                    rx="5"
                                />

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="4"
                                />

                                <circle
                                    cx="17.5"
                                    cy="6.5"
                                    r="0.8"
                                    fill="currentColor"
                                    stroke="none"
                                />

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />
                            </svg>

                        </a>


                        {{-- X / Twitter --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L6.2 22H3.1l7.3-8.4L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />
                            </svg>

                        </a>

                    </div>

                </div>



                {{-- =====================================
                     PERSON 2
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8"
                                    fill="currentColor" stroke="none"/>

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />

                            </svg>

                        </a>


                        {{-- X --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L6.2 22H3.1l7.3-8.4L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>



                {{-- =====================================
                     PERSON 3
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8"
                                    fill="currentColor" stroke="none"/>

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />

                            </svg>

                        </a>


                        {{-- X --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L6.2 22H3.1l7.3-8.4L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>



                {{-- =====================================
                     PERSON 4
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8"
                                    fill="currentColor" stroke="none"/>

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />

                            </svg>

                        </a>


                        {{-- X --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L6.2 22H3.1l7.3-8.4L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>



                {{-- =====================================
                     PERSON 5
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8"
                                    fill="currentColor" stroke="none"/>

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />

                            </svg>

                        </a>


                        {{-- X --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L6.2 22H3.1l7.3-8.4L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>



                {{-- =====================================
                     PERSON 6
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8"
                                    fill="currentColor" stroke="none"/>

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />

                            </svg>

                        </a>


                        {{-- X --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>



                {{-- =====================================
                     PERSON 7
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8"
                                    fill="currentColor" stroke="none"/>

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />

                            </svg>

                        </a>


                        {{-- X --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L6.2 22H3.1l7.3-8.4L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>



                {{-- =====================================
                     PERSON 8
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8"
                                    fill="currentColor" stroke="none"/>

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />

                            </svg>

                        </a>


                        {{-- X --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L6.2 22H3.1l7.3-8.4L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>



                {{-- =====================================
                     PERSON 9
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8"
                                    fill="currentColor" stroke="none"/>

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />

                            </svg>

                        </a>


                        {{-- X --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>



                {{-- =====================================
                     PERSON 10
                     ===================================== --}}

                <div class="team-card">

                    <div class="team-image">

                        <img
                            src="{{ asset('images/wafi.png') }}"
                            alt="Wafi"
                        >

                    </div>

                    <p class="team-role">
                        Manager
                    </p>

                    <h3 class="team-name">
                        Wafi
                    </h3>

                    <p class="team-description">
                        /Studio is powerful enough with all the features I needed,
                        built at the same time is still easy
                    </p>


                    <div class="team-socials">

                        {{-- Instagram --}}
                        <a
                            href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="0.8"
                                    fill="currentColor" stroke="none"/>

                            </svg>

                        </a>


                        {{-- Facebook --}}
                        <a
                            href="https://facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M14 8h3V4.5c-.5-.1-1.8-.2-3.2-.2-3.2 0-5.4 2-5.4 5.6V13H5.5v4H8.4v6.5H12V17h3.2l.5-4H12V10.2c0-1.2.3-2.2 2-2.2Z"
                                />

                            </svg>

                        </a>


                        {{-- X --}}
                        <a
                            href="https://x.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X Wafi"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">

                                <path
                                    d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-6.5L2.8 2h6.4l4.5 5.9L18.9 2Zm-1.1 17.8h1.7L8.2 4.1H6.4L17.8 19.8Z"
                                />

                            </svg>

                        </a>

                    </div>

                </div>


            </div>

        </div>

    </section>


    {{-- =========================================
         FOOTER
         ========================================= --}}

    @include('partials.footer')


</body>

</html>
