<!-- ==========================================
     FIXED TRANSLUCENT NAVBAR
=========================================== -->
<header id="navbar"
    class="fixed top-0 left-0 right-0 w-full h-[64px] z-50
           bg-white/90 backdrop-blur-[28px]
           shadow-sm transition-all duration-300">

    <!-- ==========================================
         MAIN NAVBAR CONTAINER
    =========================================== -->
    <div class="max-w-[1150px] mx-auto w-full h-full px-5 md:px-6
                flex items-center justify-between">

        <!-- ======================================
             LEFT SIDE : BRAND
        ======================================= -->
        <a href="{{ url('/') }}" class="flex items-center gap-3 group shrink-0">

            <img src="{{ asset('images/logo_sdv.png') }}" alt="Slameticon Logo" class="h-9 w-auto object-contain">

            <div class="flex flex-col justify-center leading-none">

                <span
                    class="text-[19px] font-extrabold
                           text-[#171244]
                           tracking-tight
                           font-['Inter_Tight',sans-serif]">
                    Slameticon
                </span>

                <span
                    class="text-[13px] font-medium
                           text-[#1218ae]
                           tracking-normal
                           font-['Inter',sans-serif]
                           mt-0.5">
                    Digital Valley
                </span>

            </div>

        </a>


        <!-- ======================================
             DESKTOP NAVIGATION
             Hanya muncul >= md
        ======================================= -->
        <nav
            class="hidden md:flex
                   items-center justify-center
                   gap-8
                   text-sm font-medium
                   text-[#3b3b3a]
                   flex-1 mx-8">

            <!-- HOME -->
            <a href="{{ url('/') }}" class="hover:text-[#1218ae] transition-colors">
                Home
            </a>


            <!-- ==================================
                 PROFILE
            =================================== -->
            <div
                class="relative group
                       flex items-center gap-1
                       cursor-pointer
                       hover:text-[#1218ae]
                       transition-colors">

                <span class="py-5">
                    Profile
                </span>

                <svg class="w-3 h-3
                           group-hover:rotate-180
                           transition-transform duration-200"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

                </svg>


                <!-- PROFILE DROPDOWN -->
                <div
                    class="absolute
                           top-[50px]
                           left-1/2
                           -translate-x-1/2
                           w-[380px]
                           bg-white
                           rounded-xl
                           shadow-xl
                           border border-gray-100
                           p-4
                           opacity-0
                           invisible
                           group-hover:opacity-100
                           group-hover:visible
                           transition-all duration-300">

                    <!-- Pointer -->
                    <div
                        class="absolute
                               -top-2
                               left-1/2
                               -translate-x-1/2
                               w-4 h-4
                               bg-white
                               rotate-45
                               border-t
                               border-l
                               border-gray-100">
                    </div>


                    <div class="grid grid-cols-2 gap-2 relative z-10">

                        <!-- ABOUT US -->
                        <a href="/about"
                            class="flex items-start gap-3
                                   p-3 rounded-lg
                                   bg-white
                                   hover:bg-[#eef0ff]
                                   transition-colors
                                   duration-200
                                   group/item">

                            <div
                                class="mt-0.5 shrink-0
                                       text-gray-400
                                       group-hover/item:text-[#1218ae]
                                       transition-colors">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01
                                           M21 12a9 9 0 11-18 0
                                           9 9 0 0118 0z" />

                                </svg>

                            </div>

                            <div>

                                <h4
                                    class="text-[13px]
                                           font-bold
                                           text-gray-800
                                           group-hover/item:text-[#1218ae]">
                                    About Us
                                </h4>

                                <p
                                    class="text-[9px]
                                           text-gray-500
                                           leading-tight
                                           mt-1">
                                    Get to know our company
                                </p>

                            </div>

                        </a>


                        <!-- OUR PEOPLE -->
                        <a href="/our-people"
                            class="flex items-start gap-3
                                   p-3 rounded-lg
                                   bg-white
                                   hover:bg-[#eef0ff]
                                   transition-colors
                                   duration-200
                                   group/item">

                            <div
                                class="mt-0.5 shrink-0
                                       text-gray-400
                                       group-hover/item:text-[#1218ae]
                                       transition-colors">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292
                                           M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1
                                           a6 6 0 00-9-5.197
                                           M13 7a4 4 0 11-8 0
                                           4 4 0 018 0z" />

                                </svg>

                            </div>

                            <div>

                                <h4
                                    class="text-[13px]
                                           font-bold
                                           text-gray-800
                                           group-hover/item:text-[#1218ae]">
                                    Our People
                                </h4>

                                <p
                                    class="text-[9px]
                                           text-gray-500
                                           leading-tight
                                           mt-1">
                                    Meet the team behind it all
                                </p>

                            </div>

                        </a>

                    </div>

                </div>

            </div>


            <!-- ==================================
                 WORK
            =================================== -->
            <div
                class="relative group
                       flex items-center gap-1
                       cursor-pointer
                       hover:text-[#1218ae]
                       transition-colors">

                <span class="py-5">
                    Work
                </span>

                <svg class="w-3 h-3
                           group-hover:rotate-180
                           transition-transform duration-200"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

                </svg>


                <!-- WORK DROPDOWN -->
                <div
                    class="absolute
                           top-[50px]
                           left-1/2
                           -translate-x-1/2
                           w-[380px]
                           bg-white
                           rounded-xl
                           shadow-xl
                           border border-gray-100
                           p-4
                           opacity-0
                           invisible
                           group-hover:opacity-100
                           group-hover:visible
                           transition-all duration-300">

                    <div
                        class="absolute
                               -top-2
                               left-1/2
                               -translate-x-1/2
                               w-4 h-4
                               bg-white
                               rotate-45
                               border-t
                               border-l
                               border-gray-100">
                    </div>


                    <div class="grid grid-cols-2 gap-2 relative z-10">

                        <!-- SERVICES -->
                        <a href="/services"
                            class="flex items-start gap-3
                                   p-3 rounded-lg
                                   bg-white
                                   hover:bg-[#eef0ff]
                                   transition-colors
                                   duration-200
                                   group/item">

                            <div
                                class="mt-0.5 shrink-0
                                       text-gray-400
                                       group-hover/item:text-[#1218ae]">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15
                                           c-3.183 0-6.22-.62-9-1.745
                                           M16 6V4a2 2 0 00-2-2h-4a2 2 0
                                           00-2 2v2m4 6h.01M5 20h14a2 2
                                           0 002-2V8a2 2 0 00-2-2H5a2
                                           2 0 00-2 2v10a2 2 0 002 2z" />

                                </svg>

                            </div>

                            <div>

                                <h4
                                    class="text-[13px]
                                           font-bold
                                           text-gray-800
                                           group-hover/item:text-[#1218ae]">
                                    Services
                                </h4>

                                <p
                                    class="text-[9px]
                                           text-gray-500
                                           leading-tight
                                           mt-1">
                                    Lorem ipsum is simply dummy text
                                </p>

                            </div>

                        </a>


                        <!-- PRODUCT -->
                        <a href="/product"
                            class="flex items-start gap-3
                                   p-3 rounded-lg
                                   bg-white
                                   hover:bg-[#eef0ff]
                                   transition-colors
                                   duration-200
                                   group/item">

                            <div
                                class="mt-0.5 shrink-0
                                       text-gray-400
                                       group-hover/item:text-[#1218ae]">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4
                                           v10l-8 4m0-10L4 7m8 4v10M4
                                           7v10l8 4" />

                                </svg>

                            </div>

                            <div>

                                <h4
                                    class="text-[13px]
                                           font-bold
                                           text-gray-800
                                           group-hover/item:text-[#1218ae]">
                                    Product
                                </h4>

                                <p
                                    class="text-[9px]
                                           text-gray-500
                                           leading-tight
                                           mt-1">
                                    Lorem ipsum is simply dummy text
                                </p>

                            </div>

                        </a>

                    </div>

                </div>

            </div>


            <!-- ==================================
                 INSIGHT
            =================================== -->
            <div
                class="relative group
                       flex items-center gap-1
                       cursor-pointer
                       hover:text-[#1218ae]
                       transition-colors">

                <span class="py-5">
                    Insight
                </span>

                <svg class="w-3 h-3
                           group-hover:rotate-180
                           transition-transform duration-200"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

                </svg>


                <!-- INSIGHT DROPDOWN -->
                <div
                    class="absolute
                           top-[50px]
                           left-1/2
                           -translate-x-1/2
                           w-[380px]
                           bg-white
                           rounded-xl
                           shadow-xl
                           border border-gray-100
                           p-4
                           opacity-0
                           invisible
                           group-hover:opacity-100
                           group-hover:visible
                           transition-all duration-300">

                    <div
                        class="absolute
                               -top-2
                               left-1/2
                               -translate-x-1/2
                               w-4 h-4
                               bg-white
                               rotate-45
                               border-t
                               border-l
                               border-gray-100">
                    </div>


                    <div class="grid grid-cols-2 gap-2 relative z-10">

                        <!-- NEWS -->
                        <a href="/news"
                            class="flex items-start gap-3
                                   p-3 rounded-lg
                                   bg-white
                                   hover:bg-[#eef0ff]
                                   transition-colors
                                   duration-200
                                   group/item">

                            <div
                                class="mt-0.5 shrink-0
                                       text-gray-400
                                       group-hover/item:text-[#1218ae]">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 4h16v16H4z" />

                                    <path stroke-width="1.5" stroke-linecap="round" d="M8 8h8M8 12h8M8 16h5" />

                                </svg>

                            </div>

                            <div>

                                <h4
                                    class="text-[13px]
                                           font-bold
                                           text-gray-800
                                           group-hover/item:text-[#1218ae]">
                                    News
                                </h4>

                                <p
                                    class="text-[9px]
                                           text-gray-500
                                           leading-tight
                                           mt-1">
                                    Lorem ipsum is simply dummy text
                                </p>

                            </div>

                        </a>


                        <!-- GALLERY -->
                        <a href="/gallery"
                            class="flex items-start gap-3
                                   p-3 rounded-lg
                                   bg-white
                                   hover:bg-[#eef0ff]
                                   transition-colors
                                   duration-200
                                   group/item">

                            <div
                                class="mt-0.5 shrink-0
                                       text-gray-400
                                       group-hover/item:text-[#1218ae]">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <rect x="3" y="3" width="18" height="18" rx="2"
                                        stroke-width="1.5" />

                                    <circle cx="8.5" cy="8.5" r="1.5" stroke-width="1.5" />

                                    <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16l5-5 4 4 3-3 6 6" />

                                </svg>

                            </div>

                            <div>

                                <h4
                                    class="text-[13px]
                                           font-bold
                                           text-gray-800
                                           group-hover/item:text-[#1218ae]">
                                    Gallery
                                </h4>

                                <p
                                    class="text-[9px]
                                           text-gray-500
                                           leading-tight
                                           mt-1">
                                    Lorem ipsum is simply dummy text
                                </p>

                            </div>

                        </a>

                    </div>

                </div>

            </div>


            <!-- CAREER -->
            <a href="/career" class="hover:text-[#1218ae] transition-colors">
                Career
            </a>

        </nav>


        <!-- ======================================
             RIGHT SIDE DESKTOP
        ======================================= -->
        <div
            class="hidden md:flex
                   items-center justify-end
                   gap-5
                   shrink-0">

            <!-- LANGUAGE -->
            <div
                class="relative group
                       flex items-center gap-2
                       cursor-pointer
                       text-[#1218ae]
                       hover:text-blue-900
                       transition-colors">

                <!-- UK FLAG -->
                <div
                    class="w-5 h-3.5
                           overflow-hidden
                           flex items-center justify-center
                           rounded-[2px]
                           border border-gray-200">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" class="w-full h-full object-cover">

                        <path d="M0,0 v30 h60 v-30 z" fill="#012169" />

                        <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6" />

                        <path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="4" />

                        <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10" />

                        <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6" />

                    </svg>

                </div>


                <span class="text-[13px] font-bold">
                    EN
                </span>


                <!-- ARROW -->
                <svg class="w-3.5 h-3.5
                           group-hover:rotate-180
                           transition-transform duration-200"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />

                </svg>


                <!-- LANGUAGE DROPDOWN -->
                <div
                    class="absolute
                           top-[40px]
                           right-0
                           w-[125px]
                           bg-white
                           rounded-lg
                           shadow-lg
                           border border-gray-100
                           p-2
                           opacity-0
                           invisible
                           translate-y-[-5px]
                           group-hover:opacity-100
                           group-hover:visible
                           group-hover:translate-y-0
                           transition-all duration-200">

                    <!-- ENGLISH -->
                    <a href="#"
                        class="flex items-center gap-2
                               p-2
                               rounded
                               bg-[#eef0ff]
                               text-[#1218ae]">

                        <div
                            class="w-5 h-3.5
                                   overflow-hidden
                                   rounded-[2px]">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30"
                                class="w-full h-full object-cover">

                                <path d="M0,0 v30 h60 v-30 z" fill="#012169" />
                                <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6" />
                                <path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="4" />
                                <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10" />
                                <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6" />

                            </svg>

                        </div>

                        <span class="text-xs font-bold">
                            English
                        </span>

                    </a>


                    <!-- INDONESIA -->
                    <a href="#"
                        class="flex items-center gap-2
                               p-2
                               rounded
                               hover:bg-gray-50
                               text-gray-600">

                        <div
                            class="w-5 h-3.5
                                   overflow-hidden
                                   flex flex-col
                                   rounded-[2px]
                                   border border-gray-200">

                            <div class="h-1/2 w-full bg-[#FF0000]"></div>
                            <div class="h-1/2 w-full bg-white"></div>

                        </div>

                        <span class="text-xs font-medium">
                            Indonesia
                        </span>

                    </a>

                </div>

            </div>


            <!-- LOGIN -->
            <a href="/login"
                class="px-6 py-2
                       rounded
                       bg-[#1218ae]
                       text-white
                       text-[13px]
                       font-semibold
                       hover:bg-blue-900
                       transition
                       shadow-sm">

                Login

            </a>

        </div>


        <!-- ======================================
             MOBILE RIGHT SIDE
        ======================================= -->
        <div class="md:hidden flex items-center gap-3">

            <!-- MOBILE LOGIN -->
            <a href="/login"
                class="px-4 py-2
                       rounded
                       bg-[#1218ae]
                       text-white
                       text-[12px]
                       font-semibold
                       hover:bg-blue-900
                       transition">

                Login

            </a>


            <!-- HAMBURGER BUTTON -->
            <button id="mobileMenuButton" type="button" aria-label="Open menu" aria-expanded="false"
                class="w-9 h-9
                       flex items-center justify-center
                       rounded-lg
                       text-[#171244]
                       hover:bg-[#eef0ff]
                       transition-colors
                       focus:outline-none">

                <!-- HAMBURGER ICON -->
                <svg id="hamburgerIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />

                </svg>

            </button>

        </div>

    </div>


    <!-- ==========================================
         MOBILE MENU
    =========================================== -->
    <div id="mobileMenu"
        class="md:hidden
               absolute
               top-[64px]
               left-0
               right-0
               bg-white
               border-t border-gray-100
               shadow-lg
               opacity-0
               invisible
               -translate-y-2
               transition-all duration-300">

        <div class="max-w-[1150px] mx-auto px-5 py-5">


            <!-- HOME -->
            <a href="{{ url('/') }}"
                class="mobile-nav-link block
                       py-3
                       text-[15px]
                       font-medium
                       text-[#3b3b3a]
                       hover:text-[#1218ae]">

                Home

            </a>


            <!-- ==================================
                 MOBILE PROFILE
            =================================== -->
            <div class="border-t border-gray-100">

                <button type="button"
                    class="mobile-dropdown-button
                           w-full
                           flex items-center justify-between
                           py-3
                           text-[15px]
                           font-medium
                           text-[#3b3b3a]">

                    <span>Profile</span>

                    <svg class="mobile-dropdown-arrow
                               w-4 h-4
                               transition-transform duration-200"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

                    </svg>

                </button>


                <div
                    class="mobile-dropdown-content
                           hidden
                           pb-3
                           pl-4">

                    <a href="/about"
                        class="block py-2
                               text-[14px]
                               text-gray-500
                               hover:text-[#1218ae]">

                        About Us

                    </a>

                    <a href="/our-people"
                        class="block py-2
                               text-[14px]
                               text-gray-500
                               hover:text-[#1218ae]">

                        Our People

                    </a>

                </div>

            </div>


            <!-- ==================================
                 MOBILE WORK
            =================================== -->
            <div class="border-t border-gray-100">

                <button type="button"
                    class="mobile-dropdown-button
                           w-full
                           flex items-center justify-between
                           py-3
                           text-[15px]
                           font-medium
                           text-[#3b3b3a]">

                    <span>Work</span>

                    <svg class="mobile-dropdown-arrow
                               w-4 h-4
                               transition-transform duration-200"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

                    </svg>

                </button>


                <div
                    class="mobile-dropdown-content
                           hidden
                           pb-3
                           pl-4">

                    <a href="/services"
                        class="block py-2
                               text-[14px]
                               text-gray-500
                               hover:text-[#1218ae]">

                        Services

                    </a>

                    <a href="/product"
                        class="block py-2
                               text-[14px]
                               text-gray-500
                               hover:text-[#1218ae]">

                        Product

                    </a>

                </div>

            </div>


            <!-- ==================================
                 MOBILE INSIGHT
            =================================== -->
            <div class="border-t border-gray-100">

                <button type="button"
                    class="mobile-dropdown-button
                           w-full
                           flex items-center justify-between
                           py-3
                           text-[15px]
                           font-medium
                           text-[#3b3b3a]">

                    <span>Insight</span>

                    <svg class="mobile-dropdown-arrow
                               w-4 h-4
                               transition-transform duration-200"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

                    </svg>

                </button>


                <div
                    class="mobile-dropdown-content
                           hidden
                           pb-3
                           pl-4">

                    <a href="/news"
                        class="block py-2
                               text-[14px]
                               text-gray-500
                               hover:text-[#1218ae]">

                        News

                    </a>

                    <a href="/gallery"
                        class="block py-2
                               text-[14px]
                               text-gray-500
                               hover:text-[#1218ae]">

                        Gallery

                    </a>

                </div>

            </div>


            <!-- CAREER -->
            <div class="border-t border-gray-100">

                <a href="/career"
                    class="block py-3
                           text-[15px]
                           font-medium
                           text-[#3b3b3a]
                           hover:text-[#1218ae]">

                    Career

                </a>

            </div>


            <!-- ==================================
                 MOBILE LANGUAGE
            =================================== -->
            <div class="border-t border-gray-100
                       pt-4 mt-2">

                <p
                    class="text-[11px]
                           uppercase
                           tracking-wider
                           text-gray-400
                           mb-3">

                    Language

                </p>


                <div class="flex items-center gap-3">

                    <!-- ENGLISH -->
                    <button type="button"
                        class="flex items-center gap-2
                               px-3 py-2
                               rounded-lg
                               bg-[#eef0ff]
                               text-[#1218ae]
                               text-sm
                               font-semibold">

                        <span class="text-base">
                            🇬🇧
                        </span>

                        EN

                    </button>


                    <!-- INDONESIA -->
                    <button type="button"
                        class="flex items-center gap-2
                               px-3 py-2
                               rounded-lg
                               hover:bg-gray-50
                               text-gray-600
                               text-sm">

                        <span class="text-base">
                            🇮🇩
                        </span>

                        ID

                    </button>

                </div>

            </div>

        </div>

    </div>

</header>


<!-- ==========================================
     BACK TO TOP FLOATING BUTTON
=========================================== -->
<button id="backToTopBtn" onclick="scrollToTop()"
    class="fixed
           bottom-6
           right-6
           z-50
           bg-[#0c1285]
           text-white
           w-11
           h-11
           rounded-full
           flex items-center justify-center
           shadow-lg
           opacity-0
           pointer-events-none
           transition-all duration-300
           hover:bg-blue-900
           hover:scale-110
           focus:outline-none"
    title="Kembali ke atas">

    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">

        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />

    </svg>

</button>


<!-- ==========================================
     JAVASCRIPT
=========================================== -->
<script>
    /* =========================================
       MOBILE MENU
    ========================================== */

    const mobileMenuButton =
        document.getElementById('mobileMenuButton');

    const mobileMenu =
        document.getElementById('mobileMenu');

    const hamburgerIcon =
        document.getElementById('hamburgerIcon');


    let mobileMenuOpen = false;


    mobileMenuButton.addEventListener('click', function() {

        mobileMenuOpen = !mobileMenuOpen;


        if (mobileMenuOpen) {

            /* Buka mobile menu */

            mobileMenu.classList.remove(
                'opacity-0',
                'invisible',
                '-translate-y-2'
            );

            mobileMenu.classList.add(
                'opacity-100',
                'visible',
                'translate-y-0'
            );


            mobileMenuButton.setAttribute(
                'aria-expanded',
                'true'
            );


            mobileMenuButton.setAttribute(
                'aria-label',
                'Close menu'
            );


            /* Ubah hamburger menjadi X */

            hamburgerIcon.innerHTML = `
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"/>
            `;

        } else {

            closeMobileMenu();

        }

    });


    function closeMobileMenu() {

        mobileMenuOpen = false;


        mobileMenu.classList.remove(
            'opacity-100',
            'visible',
            'translate-y-0'
        );

        mobileMenu.classList.add(
            'opacity-0',
            'invisible',
            '-translate-y-2'
        );


        mobileMenuButton.setAttribute(
            'aria-expanded',
            'false'
        );


        mobileMenuButton.setAttribute(
            'aria-label',
            'Open menu'
        );


        /* Kembalikan X menjadi hamburger */

        hamburgerIcon.innerHTML = `
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        `;

    }


    /* =========================================
       MOBILE DROPDOWN
    ========================================== */

    const mobileDropdownButtons =
        document.querySelectorAll(
            '.mobile-dropdown-button'
        );


    mobileDropdownButtons.forEach(button => {

        button.addEventListener('click', function() {

            const content =
                this.nextElementSibling;

            const arrow =
                this.querySelector(
                    '.mobile-dropdown-arrow'
                );


            /* Toggle content */

            content.classList.toggle('hidden');


            /* Rotate arrow */

            arrow.classList.toggle(
                'rotate-180'
            );

        });

    });


    /* =========================================
       TUTUP MOBILE MENU KETIKA LINK DIKLIK
    ========================================== */

    const mobileNavLinks =
        document.querySelectorAll(
            '.mobile-nav-link'
        );


    mobileNavLinks.forEach(link => {

        link.addEventListener('click', () => {

            closeMobileMenu();

        });

    });


    /* =========================================
       BACK TO TOP
    ========================================== */

    const backToTopBtn =
        document.getElementById(
            'backToTopBtn'
        );


    window.addEventListener('scroll', () => {

        if (window.scrollY > 400) {

            backToTopBtn.classList.remove(
                'opacity-0',
                'pointer-events-none'
            );

            backToTopBtn.classList.add(
                'opacity-100',
                'pointer-events-auto'
            );

        } else {

            backToTopBtn.classList.remove(
                'opacity-100',
                'pointer-events-auto'
            );

            backToTopBtn.classList.add(
                'opacity-0',
                'pointer-events-none'
            );

        }

    });


    function scrollToTop() {

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    }


    /* =========================================
       INTERSECTION OBSERVER
    ========================================== */

    document.addEventListener(
        "DOMContentLoaded",
        () => {

            const appearItems =
                document.querySelectorAll(
                    "[data-appear]"
                );


            if (
                "IntersectionObserver" in window
            ) {

                const observer =
                    new IntersectionObserver(
                        (entries, obs) => {

                            entries.forEach(
                                entry => {

                                    if (
                                        entry.isIntersecting
                                    ) {

                                        entry.target.classList.add(
                                            "appear-active"
                                        );

                                        obs.unobserve(
                                            entry.target
                                        );

                                    }

                                }
                            );

                        }, {
                            threshold: 0.1
                        }
                    );


                appearItems.forEach(el => {

                    observer.observe(el);

                });

            } else {

                appearItems.forEach(el => {

                    el.classList.add(
                        "appear-active"
                    );

                });

            }

        }
    );


    /* =========================================
       CLOSE MOBILE MENU SAAT RESIZE KE DESKTOP
    ========================================== */

    window.addEventListener(
        'resize',
        () => {

            if (window.innerWidth >= 768) {

                closeMobileMenu();

            }

        }
    );
</script>
