<footer class="bg-[#0f1423] pt-20 pb-8 px-6 md:px-12 w-full font-['Inter_Tight'] text-white" id="footer">
    <div class="max-w-[1200px] mx-auto w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 mb-16">

<!-- Kolom 1: Logo, Deskripsi, & Kontak -->
<div class="lg:pr-6">
    {{-- Logo Perusahaan (Fallback ke logo default jika logo_url di DB kosong) --}}
    <img src="{{ $companyProfile?->logo_url ? asset('storage/' . $companyProfile->logo_url) : asset('images/sdv_log.png') }}"
         alt="{{ $companyProfile?->name ?? 'Slameticon Digital Valey' }}"
         class="h-29 w-auto object-contain mb-12">

    {{-- Headline Perusahaan --}}
    <p class="text-[13px] text-gray-400 leading-relaxed mb-6">
        @if(is_array($companyProfile?->headline))
            {{ $companyProfile->headline[app()->getLocale()] ?? $companyProfile->headline['en'] ?? $companyProfile->headline['id'] ?? 'Empowering businesses with cutting-edge digital solutions. We deliver innovative technology services tailored to your needs.' }}
        @else
            {{ $companyProfile?->headline ?? 'Empowering businesses with cutting-edge digital solutions. We deliver innovative technology services tailored to your needs.' }}
        @endif
    </p>

    <!-- No Telepon/WhatsApp & Email -->
    <div class="space-y-3">
        @if($companyProfile?->whatsapp)
            <div class="flex items-center gap-3 text-gray-400 text-[13px]">
                <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                    </path>
                </svg>
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $companyProfile->whatsapp) }}" target="_blank" class="hover:text-white transition-colors">
                    {{ $companyProfile->whatsapp }}
                </a>
            </div>
        @endif

        @if($companyProfile?->email)
            <div class="flex items-center gap-3 text-gray-400 text-[13px]">
                <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
                <a href="mailto:{{ $companyProfile->email }}" class="hover:text-white transition-colors">
                    {{ $companyProfile->email }}
                </a>
            </div>
        @endif
    </div>
</div>

            <!-- Kolom 2: Navigation -->
            <div>
                <h4 class="text-white font-semibold text-[14px] mb-6">Navigation</h4>
                    <ul class="space-y-4 text-[13px] text-gray-400">
                        <li>
                            <a href="{{ url('/') }}" class="hover:text-white transition-colors">
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}" class="hover:text-white transition-colors">
                                {{ __('Services') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="hover:text-white transition-colors">
                                {{ __('About Us') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" class="hover:text-white transition-colors">
                                {{ __('Contact Us') }}
                            </a>
                        </li>
                    </ul>
            </div>

            <!-- Kolom 3: Services -->
            <div>
                <h4 class="text-white font-semibold text-[14px] mb-6">Services</h4>
                <ul class="space-y-4 text-[13px] text-gray-400">
                    <li><a href="/product" class="hover:text-white transition-colors">Software & IT Development</a></li>
                    <li><a href="/product" class="hover:text-white transition-colors">Digital Marketing</a></li>
                    <li><a href="/product" class="hover:text-white transition-colors">Social Media Management</a></li>
                    <li><a href="/product" class="hover:text-white transition-colors">Branding & Brand Identity</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Follow Us -->
            <div>
                <h4 class="text-white font-semibold text-[14px] mb-6">Follow Us</h4>
                <ul class="space-y-4 text-[13px] text-gray-400">
                    <li><a href="#privacy" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    <li><a href="#terms" class="hover:text-white transition-colors">Terms of Service</a></li>
                </ul>
            </div>

        </div>

        <!-- Garis Bawah & Copyright -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-[12px] text-gray-500">
            <p>&copy; {{ date('Y') }} Slameticon Digital Valey. {{ __('All rights reserved.') }}</p>
            <p>{{ __('Designed & Built by Slameticon Digital Valey') }}</p>
        </div>
    </div>
</footer>

<!-- Tombol Back to Top -->
<button id="backToTopBtn" onclick="scrollToTop()"
    class="fixed bottom-6 right-6 z-50 bg-[#0c1285] text-white w-11 h-11 rounded-full flex items-center justify-center shadow-lg opacity-0 pointer-events-none transition-all duration-300 hover:bg-blue-900 focus:outline-none"
    title="Kembali ke atas">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"></path>
    </svg>
</button>

<script>
    const backToTopBtn = document.getElementById('backToTopBtn');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            backToTopBtn?.classList.remove('opacity-0', 'pointer-events-none');
            backToTopBtn?.classList.add('opacity-100', 'pointer-events-auto');
        } else {
            backToTopBtn?.classList.remove('opacity-100', 'pointer-events-auto');
            backToTopBtn?.classList.add('opacity-0', 'pointer-events-none');
        }
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
