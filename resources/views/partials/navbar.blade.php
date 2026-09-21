<!-- 1. FIXED TRANSLUCENT NAVBAR -->
<header id="navbar" class="fixed top-0 left-0 right-0 w-full h-[64px] z-50 px-6 md:px-12 flex items-center justify-between bg-white/90 backdrop-blur-[28px] shadow-sm transition-all duration-300">
    <!-- BRAND LOGO (Tetap menggunakan aslimu) -->
    <a href="#home" class="flex items-center gap-3 group">
        <img src="{{ asset('images/logo_sdv.png') }}" alt="Slameticon Logo" class="h-9 w-auto object-contain">
        <div class="flex flex-col justify-center leading-none">
            <span class="text-[19px] font-extrabold text-[#171244] tracking-tight font-['Inter_Tight',sans-serif]">Slameticon</span>
            <span class="text-[13px] font-medium text-[#1218ae] tracking-normal font-['Inter',sans-serif] mt-0.5">Digital Valey</span>
        </div>
    </a>

    <!-- NAV LINKS (Disesuaikan dengan Figma) -->
    <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-[#3b3b3a]">
        <!-- Link Home Diperbaiki menggunakan url('/') -->
        <a href="{{ url('/') }}" class="hover:text-[#1218ae] transition-colors">Home</a>

        <!-- Dropdown Profile -->
<!-- Dropdown Profile (Dengan Mega Menu Pop-up) -->
        <div class="relative group flex items-center gap-1 cursor-pointer hover:text-[#1218ae] transition-colors">
            <span class="py-5">Profile</span> <!-- py-5 agar hover tidak putus ke bawah -->
            <svg class="w-3 h-3 group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>

            <!-- Isi Mega Menu Profile -->
            <div class="absolute top-[50px] left-1/2 -translate-x-1/2 w-[380px] bg-white rounded-xl shadow-xl border border-gray-100 p-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                <!-- Segitiga Pointer Atas -->
                <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-gray-100"></div>

                <div class="grid grid-cols-2 gap-2 relative z-10">
                    <!-- Item 1: About Us -->
                    <!-- Alamatnya langsung aku arahkan ke /about ya -->
                    <a href="/about" class="flex items-start gap-3 p-3 rounded-lg bg-white hover:bg-[#eef0ff] transition-colors duration-200 group/item">
                        <div class="mt-0.5 shrink-0 text-gray-400 group-hover/item:text-[#1218ae] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold text-gray-800 group-hover/item:text-[#1218ae] transition-colors">About Us</h4>
                            <p class="text-[9px] text-gray-500 leading-tight mt-1">Get to know our company</p>
                        </div>
                    </a>

                    <!-- Item 2: Our People -->
                    <!-- Alamatnya aku siapkan ke /our-people -->
                    <a href="/our-people" class="flex items-start gap-3 p-3 rounded-lg bg-white hover:bg-[#eef0ff] transition-colors duration-200 group/item">
                        <div class="mt-0.5 shrink-0 text-gray-400 group-hover/item:text-[#1218ae] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold text-gray-800 group-hover/item:text-[#1218ae] transition-colors">Our People</h4>
                            <p class="text-[9px] text-gray-500 leading-tight mt-1">Meet the team behind it all</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dropdown Work (Dengan Mega Menu Pop-up) -->
        <div class="relative group flex items-center gap-1 cursor-pointer hover:text-[#1218ae] transition-colors">
            <span class="py-5">Work</span> <!-- py-5 digunakan agar area hover tidak putus ke bawah -->
            <svg class="w-3 h-3 group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>

            <!-- Isi Mega Menu Work -->
            <div class="absolute top-[50px] left-1/2 -translate-x-1/2 w-[380px] bg-white rounded-xl shadow-xl border border-gray-100 p-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                <!-- Segitiga Pointer Atas -->
                <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-gray-100"></div>

                <div class="grid grid-cols-2 gap-2 relative z-10">
                    <!-- Item 1: Services (Hover Biru Transparan) -->
                    <a href="/services" class="flex items-start gap-3 p-3 rounded-lg bg-white hover:bg-[#eef0ff] transition-colors duration-200 group/item">
                        <div class="mt-0.5 shrink-0  text-gray-400 group-hover/item:text-[#1218ae] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold text-gray-800 group-hover/item:text-[#1218ae] transition-colors">Services</h4>
                            <p class="text-[9px] text-gray-500 leading-tight mt-1">Lorem ipsum is simply dummy text</p>
                        </div>
                    </a>

                    <!-- Item 2: Product (Hover Biru Transparan) -->
                    <a href="/product" class="flex items-start gap-3 p-3 rounded-lg bg-white hover:bg-[#eef0ff] transition-colors duration-200 group/item">
                        <div class="mt-0.5 shrink-0 text-gray-400 group-hover/item:text-[#1218ae] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold text-gray-800 group-hover/item:text-[#1218ae] transition-colors">Product</h4>
                            <p class="text-[9px] text-gray-500 leading-tight mt-1">Lorem ipsum is simply dummy text</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dropdown Insight -->
        <div class="relative group flex items-center gap-1 cursor-pointer hover:text-[#1218ae] transition-colors">
            <span class="py-5">Insight</span> <!-- py-5 digunakan agar area hover tidak putus ke bawah -->
            <svg class="w-3 h-3 group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>

            <!-- Isi Mega Menu Work -->
            <div class="absolute top-[50px] left-1/2 -translate-x-1/2 w-[380px] bg-white rounded-xl shadow-xl border border-gray-100 p-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                <!-- Segitiga Pointer Atas -->
                <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-gray-100"></div>

                <div class="grid grid-cols-2 gap-2 relative z-10">
                    <!-- Item 1: Services (Hover Biru Transparan) -->
                    <a href="/news" class="flex items-start gap-3 p-3 rounded-lg bg-white hover:bg-[#eef0ff] transition-colors duration-200 group/item">
                        <div class="mt-0.5 shrink-0  text-gray-400 group-hover/item:text-[#1218ae] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 4h16v16H4z"></path>
                                <path stroke-width="1.5" stroke-linecap="round"
                                    d="M8 8h8M8 12h8M8 16h5"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold text-gray-800 group-hover/item:text-[#1218ae] transition-colors">News</h4>
                            <p class="text-[9px] text-gray-500 leading-tight mt-1">Lorem ipsum is simply dummy text</p>
                        </div>
                    </a>

                    <!-- Item 2: Product (Hover Biru Transparan) -->
                    <a href="/gallery" class="flex items-start gap-3 p-3 rounded-lg bg-white hover:bg-[#eef0ff] transition-colors duration-200 group/item">
                        <div class="mt-0.5 shrink-0 text-gray-400 group-hover/item:text-[#1218ae] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <rect x="3" y="3" width="18" height="18" rx="2" stroke-width="1.5"/>
                                <circle cx="8.5" cy="8.5" r="1.5" stroke-width="1.5"/>
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 16l5-5 4 4 3-3 6 6"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold text-gray-800 group-hover/item:text-[#1218ae] transition-colors">Gallery</h4>
                            <p class="text-[9px] text-gray-500 leading-tight mt-1">Lorem ipsum is simply dummy text</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <a href="/career" class="hover:text-[#1218ae] transition-colors">Career</a>
    </nav>

    <!-- CTA BUTTON (Sesuai Referensi Figma: Sign In & Login) -->
    <div class="flex items-center gap-5">
        <a href="#signin" class="text-sm font-semibold text-gray-800 hover:text-[#1218ae] transition-colors">Sign In</a>
        <a href="#login" class="px-7 py-2.5 rounded bg-[#1218ae] text-white text-sm font-semibold hover:bg-blue-900 transition shadow-md shadow-blue-900/20">
            Login
        </a>
    </div>
</header>

    <!-- ==========================================
         BACK TO TOP FLOATING BUTTON (Shortcut)
         ========================================== -->
    <button id="backToTopBtn" onclick="scrollToTop()" class="fixed bottom-6 right-6 z-50 bg-[#0c1285] text-white w-11 h-11 rounded-full flex items-center justify-center shadow-lg opacity-0 pointer-events-none transition-all duration-300 hover:bg-blue-900 hover:scale-110 focus:outline-none" title="Kembali ke atas">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>

    <!-- JavaScript untuk Tombol Back to Top -->
    <script>
        const backToTopBtn = document.getElementById('backToTopBtn');

        // Munculkan tombol saat halaman di-scroll ke bawah sejauh 400px
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                backToTopBtn.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto');
                backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
            }
        });

        // Fungsi kembali mulus ke halaman paling atas
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>



    <!-- 5. INTERSECTION OBSERVER ANIMATION ENGINE SCRIPT -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // IntersectionObserver Engine ala Referensi Studio
            const appearItems = document.querySelectorAll("[data-appear]");

            if ("IntersectionObserver" in window) {
                const observer = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("appear-active");
                            obs.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1 });

                appearItems.forEach(el => observer.observe(el));
            } else {
                appearItems.forEach(el => el.classList.add("appear-active"));
            }

            // Hide/Show Navbar on Scroll
            document.addEventListener("DOMContentLoaded", () => {
                // IntersectionObserver Engine ala Referensi Studio
                const appearItems = document.querySelectorAll("[data-appear]");

                if ("IntersectionObserver" in window) {
                    const observer = new IntersectionObserver((entries, obs) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add("appear-active");
                                obs.unobserve(entry.target);
                            }
                        });
                    }, { threshold: 0.1 });

                    appearItems.forEach(el => observer.observe(el));
                } else {
                    appearItems.forEach(el => el.classList.add("appear-active"));
                }
            });
</script>
