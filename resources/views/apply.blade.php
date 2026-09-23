<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job->title }} - Slameticon Digital Valley</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
        }
    </style>
</head>

<body class="bg-[#ffffff] text-black antialiased selection:bg-[#0c1285] selection:text-white">

    @include('partials.navbar')

    {{-- =========================================================
         1. JOB APPLY DETAILS
    ========================================================= --}}
    <main class="pt-32 pb-24 px-6 md:px-12 bg-[#ffffff] min-h-screen font-['Inter_Tight']">
        <div class="max-w-[900px] mx-auto">

            {{-- Tombol back --}}
            <a href="{{ url('/career') }}"
               class="inline-flex items-center gap-2 text-[14px] font-medium text-gray-500 hover:text-[#1218ae] transition-colors mb-8">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Career
            </a>

            {{-- Header: judul dinamis & badges --}}
            <div class="mb-8">
                <h1 class="text-3xl md:text-[40px] font-bold text-[#111827] mb-5 tracking-tight">
                    {{ $job->title }}
                </h1>

                <div class="flex flex-wrap items-center gap-3">
                    <span class="px-3.5 py-1.5 bg-[#eef4ff] text-[#3b82f6] text-[13px] font-medium rounded-full">
                        {{ $job->job_type ?? 'Full-Time' }}
                    </span>
                    <span class="px-3.5 py-1.5 bg-[#ecfdf5] text-[#10b981] text-[13px] font-medium rounded-full">
                        {{ $job->work_type ?? 'Remote' }}
                    </span>

                    @if ($job->location)
                        <span class="px-3.5 py-1.5 bg-[#f3f4f6] text-[#4b5563] text-[13px] font-medium rounded-full flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            {{ $job->location }}
                        </span>
                    @endif
                </div>
            </div>

            <hr class="border-gray-200 mb-10">

            {{-- Konten detail pekerjaan --}}
            <div class="space-y-12">

                {{-- Job description --}}
                @if ($job->description)
                    <div>
                        <h2 class="text-[14px] font-bold text-gray-900 uppercase tracking-wide mb-3">Job Description</h2>
                        <div class="text-[15px] text-gray-600 leading-relaxed prose max-w-none">
                            {!! $job->description !!}
                        </div>
                    </div>
                @endif

                {{-- Requirements --}}
                @if (!empty($job->requirements))
                    <div>
                        <h2 class="text-[14px] font-bold text-gray-900 uppercase tracking-wide mb-3">Requirements</h2>

                        @if (is_array($job->requirements))
                            <ul class="list-disc list-outside ml-5 text-[15px] text-gray-600 space-y-2.5 marker:text-gray-400">
                                @foreach ($job->requirements as $req)
                                    <li>{!! strip_tags($req) !!}</li>
                                @endforeach
                            </ul>
                        @else
                            <div class="text-[15px] text-gray-600 leading-relaxed prose max-w-none">
                                {!! $job->requirements !!}
                            </div>
                        @endif
                    </div>
                @endif

            </div>

        </div>
    </main>

    {{-- =========================================================
         2. APPLICATION FORM
    ========================================================= --}}
    <div class="max-w-[800px] mx-auto w-full px-6 md:px-0 mt-16 md:mt-24 pt-12 border-t border-gray-200">

        <div class="mb-8">
            <h2 class="text-2xl font-bold text-[#111827] mb-1 tracking-tight">
                Apply for {{ $job->title }}
            </h2>
            <p class="text-[13px] text-gray-400">* Indicates a required field</p>
        </div>

        {{-- Alert notification --}}
        <div id="alertBox" class="hidden mb-6 p-4 rounded-md text-[14px] font-medium transition-all duration-300">
            <p id="alertMessage"></p>
            <ul id="alertErrorList" class="mt-2 list-disc list-inside text-xs space-y-1 hidden"></ul>
        </div>

        <form id="jobApplicationForm" class="space-y-6">
            @csrf

            <input type="hidden" name="job_opening_id" value="{{ $job->id }}">

            {{-- First name & last name (digabung via JS jadi field 'name') --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="first_name" class="block text-[14px] font-medium text-gray-700 mb-2">
                        First Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name" required
                           class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400">
                </div>
                <div>
                    <label for="last_name" class="block text-[14px] font-medium text-gray-700 mb-2">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name"
                           class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400">
                </div>
            </div>

            {{-- Email & phone --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="email" class="block text-[14px] font-medium text-gray-700 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required
                           class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400">
                </div>
                <div>
                    <label for="phone" class="block text-[14px] font-medium text-gray-700 mb-2">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="+62 812 3456 7890"
                           class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400">
                </div>
            </div>

            {{-- Resume / CV --}}
            <div>
                <label for="cv" class="block text-[14px] font-medium text-gray-700 mb-2">
                    Resume / CV <span class="text-red-500">*</span>
                </label>
                <input type="file" id="cv" name="cv" required accept=".pdf,.doc,.docx"
                       class="w-full bg-white border border-gray-300 text-gray-500 text-[14px] rounded-md shadow-sm outline-none transition-colors cursor-pointer
                              file:mr-4 file:py-3 file:px-4
                              file:border-0 file:border-r file:border-gray-300
                              file:text-[14px] file:font-medium
                              file:bg-gray-50 file:text-gray-700
                              hover:file:bg-gray-100 focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae]">
                <p class="mt-1.5 text-[12px] text-gray-400">Accepted formats: PDF, DOC, DOCX. Max file size: 5MB.</p>
            </div>

            {{-- Cover letter --}}
            <div>
                <label for="cover_letter" class="block text-[14px] font-medium text-gray-700 mb-2">Cover Letter</label>
                <textarea id="cover_letter" name="cover_letter" rows="5"
                          placeholder="Tell us why you're a great fit for this role..."
                          class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400 resize-y"></textarea>
            </div>

            {{-- Submit --}}
            <div class="pt-4 pb-16">
                <button type="submit" id="submitBtn"
                        class="w-full bg-[#1218ae] text-white text-[15px] font-semibold py-3.5 rounded-md hover:bg-[#0c1285] hover:shadow-lg transition-all duration-300 focus:ring-4 focus:ring-blue-300 flex items-center justify-center gap-2">
                    <span id="btnText">Apply for {{ $job->title }}</span>
                    <span id="btnSpinner" class="hidden">
                        <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </span>
                </button>
            </div>

        </form>
    </div>

    @include('partials.footer')

    {{-- =========================================================
         3. SCRIPT: AJAX / FETCH HANDLER
    ========================================================= --}}
    <script>
        document.getElementById('jobApplicationForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const form = this;
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const btnSpinner = document.getElementById('btnSpinner');
            const alertBox = document.getElementById('alertBox');
            const alertMessage = document.getElementById('alertMessage');
            const alertErrorList = document.getElementById('alertErrorList');

            // Reset alert & UI state
            alertBox.classList.add('hidden');
            alertErrorList.classList.add('hidden');
            alertErrorList.innerHTML = '';
            submitBtn.disabled = true;
            btnText.innerText = 'Submitting Application...';
            btnSpinner.classList.remove('hidden');

            const formData = new FormData(form);

            // Mengambil input first_name & last_name
            const firstName = document.getElementById('first_name').value.trim();
            const lastName = document.getElementById('last_name').value.trim();

            // Set 'name' sebagai gabungan nama lengkap (backend mengharapkan field 'name')
            const fullName = lastName ? `${firstName} ${lastName}` : firstName;
            formData.set('name', fullName);

            // Pastikan last_name juga terisi eksplisit di FormData
            formData.set('last_name', lastName);

            try {
                const response = await fetch('/api/job-applications', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                const result = await response.json();

                if (response.ok) {
                    // Berhasil
                    alertBox.className = 'mb-6 p-4 rounded-md text-[14px] font-medium bg-green-50 text-green-800 border border-green-200';
                    alertMessage.innerText = result.message || 'Application submitted successfully!';
                    alertBox.classList.remove('hidden');
                    form.reset();
                } else {
                    // Validasi gagal / error dari backend
                    alertBox.className = 'mb-6 p-4 rounded-md text-[14px] font-medium bg-red-50 text-red-800 border border-red-200';
                    alertMessage.innerText = result.message || 'Failed to submit application. Please check your form.';

                    if (result.errors) {
                        alertErrorList.classList.remove('hidden');
                        Object.keys(result.errors).forEach((key) => {
                            result.errors[key].forEach((err) => {
                                const li = document.createElement('li');
                                li.innerText = err;
                                alertErrorList.appendChild(li);
                            });
                        });
                    }
                    alertBox.classList.remove('hidden');
                }
            } catch (error) {
                // Error jaringan / system
                alertBox.className = 'mb-6 p-4 rounded-md text-[14px] font-medium bg-red-50 text-red-800 border border-red-200';
                alertMessage.innerText = 'Something went wrong. Please check your network connection and try again.';
                alertBox.classList.remove('hidden');
            } finally {
                // Restore button state
                submitBtn.disabled = false;
                btnText.innerText = 'Apply for {{ $job->title }}';
                btnSpinner.classList.add('hidden');
            }
        });
    </script>

</body>

</html>