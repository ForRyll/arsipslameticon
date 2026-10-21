<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO / Global Metadata --}}
    <title>Contact Us | Slameticon Digital Valey</title>
    <meta name="description" content="Hubungi PT Slameticon Digital Valey untuk mendiskusikan kebutuhan software development, digital marketing, social media management, branding, dan solusi digital untuk bisnis Anda.">
    <meta name="keywords" content="Slameticon Digital Valey, PT Slameticon Digital Valey, digital solutions, software development, software development Indonesia, digital marketing, digital marketing Indonesia, social media management, branding, brand identity, digital transformation, custom software development, digital platform, business digital solutions">
    <meta name="author" content="PT Slameticon Digital Valey">
    <meta name="robots" content="index, follow">

    {{-- Open Graph (Meta Sharing Social Media) --}}
    <meta property="og:site_name" content="Slameticon Digital Valey">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Contact Us | Slameticon Digital Valey">
    <meta property="og:description" content="Hubungi PT Slameticon Digital Valey untuk mendiskusikan kebutuhan software development, digital marketing, social media management, branding, dan solusi digital untuk bisnis Anda.">
    <meta property="og:image" content="{{ asset('images/slameticon.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/slameticon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
        }
    </style>
</head>

<body class="bg-[#ffffff] text-black antialiased selection:bg-[#1112A2] selection:text-white flex flex-col min-h-screen">

    @include('partials.navbar')
    <div class="pt-20 md:pt-22"></div>

    <!-- ==========================================
         SECTION: CONTACT US
         ========================================== -->
    <main class="flex-1 flex items-center justify-center py-12 md:py-16 px-6 md:px-12 pt-36">
        <div class="max-w-[1250px] w-full mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

            <!-- KIRI: GAMBAR -->
            <div class="lg:col-span-6 w-full flex justify-center">
                <div class="w-full rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-[#0a1081]">
                    <img src="{{ asset('images/contact.png') }}" alt="Contact Us Slameticon" class="w-full h-auto object-cover block">
                </div>
            </div>

            <!-- KANAN: FORM KIRIM PESAN LANGSUNG -->
            <div class="lg:col-span-6 w-full max-w-lg mx-auto lg:max-w-none">

                <!-- Judul & Deskripsi Subtitle -->
                <div class="mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 tracking-tight mb-2">
                        Kirim Pesan Langsung
                    </h2>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Isi detail singkat, tim ahli kami akan membalas dalam 1x24 jam kerja.
                    </p>
                </div>

                <!-- Alert Pesan Sukses (Dinamis via JS) -->
                <div id="alertSuccess" class="hidden mb-4 p-4 text-sm text-green-800 bg-green-100 rounded-lg border border-green-200" role="alert"></div>

                <!-- Alert Error Validasi (Dinamis via JS) -->
                <div id="alertError" class="hidden mb-4 p-4 text-sm text-red-800 bg-red-100 rounded-lg border border-red-200">
                    <ul id="errorList" class="list-disc list-inside"></ul>
                </div>

                <!-- Form Kontak -->
                <form id="contactForm" action="{{ route('contact.store') }}" method="POST" class="space-y-4">

                    <!-- 1. Nama Lengkap -->
                    <div>
                        <label for="name" class="block text-xs font-semibold text-gray-800 mb-1.5">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name" name="name" required
                            placeholder="Masukkan nama lengkap Anda"
                            class="w-full px-4 py-3 rounded-lg bg-[#f3f4f6] border border-transparent text-sm text-gray-800 placeholder-gray-400 focus:bg-white focus:border-[#007bff] focus:outline-none transition-all duration-200">
                    </div>

                    <!-- 2. Email Perusahaan / Pribadi -->
                    <div>
                        <label for="email" class="block text-xs font-semibold text-gray-800 mb-1.5">
                            Email Perusahaan / Pribadi <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" required
                            placeholder="contoh: nama@perusahaan.com"
                            class="w-full px-4 py-3 rounded-lg bg-[#f3f4f6] border border-transparent text-sm text-gray-800 placeholder-gray-400 focus:bg-white focus:border-[#007bff] focus:outline-none transition-all duration-200">
                    </div>

                    <!-- 3. Nomor Telepon / WhatsApp -->
                    <div>
                        <label for="phone" class="block text-xs font-semibold text-gray-800 mb-1.5">
                            Nomor Telepon / WhatsApp <span class="text-gray-400 font-normal">(Opsional)</span>
                        </label>
                        <input type="tel" id="phone" name="phone"
                            placeholder="Masukkan nomor telepon aktif"
                            class="w-full px-4 py-3 rounded-lg bg-[#f3f4f6] border border-transparent text-sm text-gray-800 placeholder-gray-400 focus:bg-white focus:border-[#007bff] focus:outline-none transition-all duration-200">
                    </div>

                    <!-- 4. Subject / Topik Layanan -->
                    <div>
                        <label for="subject" class="block text-xs font-semibold text-gray-800 mb-1.5">
                            Subjek / Pilihan Layanan <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select id="subject" name="subject" required
                                class="w-full px-4 py-3 rounded-lg bg-[#f3f4f6] border border-transparent text-sm text-gray-800 appearance-none focus:bg-white focus:border-[#007bff] focus:outline-none transition-all duration-200 cursor-pointer pr-10">
                                <option value="" disabled selected>Pilih Subjek Kontak</option>
                                <option value="Software & IT Development">Software & IT Development</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Social Media Management">Social Media Management</option>
                                <option value="Branding & Brand Identity">Branding & Brand Identity</option>
                                <option value="Pertanyaan Umum / Lainnya">Pertanyaan Umum / Lainnya</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-3.5 pointer-events-none text-gray-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Pesan atau Detail Proyek -->
                    <div>
                        <label for="message" class="block text-xs font-semibold text-gray-800 mb-1.5">
                            Pesan atau Detail Proyek <span class="text-red-500">*</span>
                        </label>
                        <textarea id="message" name="message" rows="4" required
                            placeholder="Jelaskan kebutuhan bisnis, rencana sistem, atau ide solusi digital Anda..."
                            class="w-full px-4 py-3 rounded-lg bg-[#f3f4f6] border border-transparent text-sm text-gray-800 placeholder-gray-400 focus:bg-white focus:border-[#007bff] focus:outline-none transition-all duration-200 resize-none"></textarea>
                    </div>

                    <!-- Tombol Kirim Pesan -->
                    <div class="pt-2">
                        <button type="submit" id="submitBtn"
                            class="w-full py-3.5 px-6 rounded-lg bg-[#007bff] hover:bg-[#0069d9] text-white font-semibold text-sm flex items-center justify-center gap-2 transition-all duration-300 shadow-md hover:shadow-lg active:scale-[0.99] disabled:opacity-50">
                            <span id="btnText">Kirim Pesan</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </main>

    @include('partials.footer')

    <!-- Script Handling AJAX API Request -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const alertSuccess = document.getElementById('alertSuccess');
            const alertError = document.getElementById('alertError');
            const errorList = document.getElementById('errorList');

            // Reset Alert States
            alertSuccess.classList.add('hidden');
            alertError.classList.add('hidden');
            errorList.innerHTML = '';

            // Disable Button Loading State
            submitBtn.disabled = true;
            btnText.innerText = 'Mengirim...';

            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value,
            };

            try {
                const response = await fetch("{{ route('contact.store') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });

                const result = await response.json();

                if (response.ok) {
                    alertSuccess.innerText = result.message || 'Pesan Anda berhasil dikirim!';
                    alertSuccess.classList.remove('hidden');
                    document.getElementById('contactForm').reset();
                } else {
                    if (result.errors) {
                        Object.values(result.errors).forEach(err => {
                            const li = document.createElement('li');
                            li.innerText = err[0];
                            errorList.appendChild(li);
                        });
                    } else {
                        const li = document.createElement('li');
                        li.innerText = result.message || 'Terjadi kesalahan saat mengirim pesan.';
                        errorList.appendChild(li);
                    }
                    alertError.classList.remove('hidden');
                }
            } catch (error) {
                const li = document.createElement('li');
                li.innerText = 'Gagal terhubung ke server. Periksa koneksi Anda.';
                errorList.appendChild(li);
                alertError.classList.remove('hidden');
            } finally {
                submitBtn.disabled = false;
                btnText.innerText = 'Kirim Pesan';
            }
        });
    </script>

</body>

</html>