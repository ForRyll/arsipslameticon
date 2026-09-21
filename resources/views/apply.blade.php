<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>About Us - Slameticon Digital Valley</title> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter Tight', sans-serif; }
    </style>
</head>
<body class="bg-[#ffffff] text-black antialiased selection:bg-[#0c1285] selection:text-white">

    @include('partials.navbar')
<!-- ==========================================
         SECTION: JOB APPLY DETAILS
         ========================================== -->
<!-- ==========================================
         SECTION: JOB APPLY DETAILS
         ========================================== -->
    <main class="pt-32 pb-24 px-6 md:px-12 bg-[#ffffff] min-h-screen font-['Inter_Tight']">
        <div class="max-w-[900px] mx-auto">

            <!-- Tombol Back -->
            <a href="{{ url('/career') }}" class="inline-flex items-center gap-2 text-[14px] font-medium text-gray-500 hover:text-[#1218ae] transition-colors mb-8">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Career
            </a>

            <!-- Header (Judul Dinamis & Badges) -->
            <div class="mb-8">
                <!-- Judul mengambil parameter 'job' dari URL -->
                <h1 class="text-3xl md:text-[40px] font-bold text-[#111827] mb-5 tracking-tight">
                    {{ request('job', 'Technical Writer & Documentation') }}
                </h1>

                <div class="flex flex-wrap items-center gap-3">
                    <span class="px-3.5 py-1.5 bg-[#eef4ff] text-[#3b82f6] text-[13px] font-medium rounded-full">
                        Full-Time
                    </span>
                    <span class="px-3.5 py-1.5 bg-[#ecfdf5] text-[#10b981] text-[13px] font-medium rounded-full">
                        Remote
                    </span>
                    <span class="px-3.5 py-1.5 bg-[#f3f4f6] text-[#4b5563] text-[13px] font-medium rounded-full flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Oregon, Portland
                    </span>
                </div>
            </div>

            <!-- Garis Pemisah -->
            <hr class="border-gray-200 mb-10">

            <!-- Konten Detail Pekerjaan -->
            <div class="space-y-12">

                <!-- Section: ABOUT HIMON -->
                <div>
                    <h2 class="text-[14px] font-bold text-gray-900 uppercase tracking-wide mb-3">About Himon</h2>
                    <p class="text-[15px] text-gray-600 leading-relaxed">
                        HIMON is digitalizing global freight, connecting logistics stakeholders through seamless API integration. We build the technical infrastructure that makes supply chains smarter and more transparent.
                    </p>
                </div>

                <!-- Section: ROLE SUMMARY -->
                <div>
                    <h2 class="text-[14px] font-bold text-gray-900 uppercase tracking-wide mb-3">Role Summary</h2>
                    <p class="text-[15px] text-gray-600 leading-relaxed">
                        This writer will be responsible for creating and maintaining comprehensive technical documentation for Himon's suite of public APIs, internal platform architecture, and software development kits (SDKs). The goal is to make integrating with Himon's platform fast, intuitive, and error-free for client technical teams.
                    </p>
                </div>

                <!-- Section: KEY RESPONSIBILITIES -->
                <div>
                    <h2 class="text-[14px] font-bold text-gray-900 uppercase tracking-wide mb-3">Key Responsibilities</h2>
                    <ul class="list-disc list-outside ml-5 text-[15px] text-gray-600 space-y-2.5 marker:text-gray-400">
                        <li>Write, edit, and maintain high-quality documentation for the Himon API (REST, GraphQL), integration guides, and tutorials.</li>
                        <li>Work closely with engineers and Solutions Architects to ensure technical accuracy and clarity of all content.</li>
                        <li>Manage the documentation lifecycle, from initial draft to publication and regular updates.</li>
                        <li>Structure and maintain the company's internal knowledge base and Confluence pages.</li>
                    </ul>
                </div>

                <!-- Section: REQUIRED QUALIFICATIONS -->
                <div>
                    <h2 class="text-[14px] font-bold text-gray-900 uppercase tracking-wide mb-3">Required Qualifications</h2>
                    <ul class="list-disc list-outside ml-5 text-[15px] text-gray-600 space-y-2.5 marker:text-gray-400">
                        <li>3+ years experience as a Technical Writer, specifically documenting APIs, SDKs or cloud services.</li>
                        <li>Proficiency in technical writing tools (Markdown, Git) and documentation platforms (e.g., Swagger/OpenAPI, Confluence).</li>
                        <li>Ability to read and understand code snippets in common languages (Python, JavaScript).</li>
                        <li>Experience writing for a developer audience in the B2B or supply chain space.</li>
                    </ul>
                </div>

            </div>

        </div>
    </main>

    <!-- ==========================================
                     SECTION: APPLICATION FORM
                     ========================================== -->
                <div class="max-w-[800px] mx-auto w-full px-6 md:px-0 mt-16 md:mt-24 pt-12 border-t border-gray-200">

                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-[#111827] mb-1 tracking-tight">Apply for a job</h2>
                        <p class="text-[13px] text-gray-400">* Indicates a required field</p>
                    </div>

                    <!-- Form Apply -->
                    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">

                        <!-- Baris 1: First Name & Last Name -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-[14px] font-medium text-gray-700 mb-2">First Name <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" name="first_name" placeholder="First Name" required
                                    class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400">
                            </div>
                            <div>
                                <label for="last_name" class="block text-[14px] font-medium text-gray-700 mb-2">Last Name <span class="text-red-500">*</span></label>
                                <input type="text" id="last_name" name="last_name" placeholder="Last Name" required
                                    class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400">
                            </div>
                        </div>

                        <!-- Baris 2: Email & Phone -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-[14px] font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email" placeholder="you@example.com" required
                                    class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400">
                            </div>
                            <div>
                                <label for="phone" class="block text-[14px] font-medium text-gray-700 mb-2">Phone</label>
                                <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000"
                                    class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400">
                            </div>
                        </div>

                        <!-- Baris 3: Resume / CV -->
                        <div>
                            <label for="resume" class="block text-[14px] font-medium text-gray-700 mb-2">Resume / CV <span class="text-red-500">*</span></label>
                            <input type="file" id="resume" name="resume" required accept=".pdf,.doc,.docx"
                                class="w-full bg-white border border-gray-300 text-gray-500 text-[14px] rounded-md shadow-sm outline-none transition-colors cursor-pointer
                                file:mr-4 file:py-3 file:px-4
                                file:border-0 file:border-r file:border-gray-300
                                file:text-[14px] file:font-medium
                                file:bg-gray-50 file:text-gray-700
                                hover:file:bg-gray-100 focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae]">
                            <p class="mt-1.5 text-[12px] text-gray-400">Accepted formats: PDF, DOC, DOCX. Max file size: 5MB.</p>
                        </div>

                        <!-- Baris 4: Cover Letter -->
                        <div>
                            <label for="cover_letter" class="block text-[14px] font-medium text-gray-700 mb-2">Cover Letter</label>
                            <textarea id="cover_letter" name="cover_letter" rows="5" placeholder="Tell us why you're a great fit for this role..."
                                class="w-full bg-white border border-gray-300 text-gray-900 text-[14px] rounded-md focus:ring-1 focus:ring-[#1218ae] focus:border-[#1218ae] block p-3 outline-none transition-colors shadow-sm placeholder-gray-400 resize-y"></textarea>
                        </div>

                        <!-- Baris 5: Submit Button -->
                        <div class="pt-4 pb-16">
                            <button type="submit"
                                class="w-full bg-[#1218ae] text-white text-[15px] font-semibold py-3.5 rounded-md hover:bg-[#0c1285] hover:shadow-lg transition-all duration-300 focus:ring-4 focus:ring-blue-300">
                                Apply for this job
                            </button>
                        </div>

                    </form>
                </div>

    @include('partials.footer')

</body>
</html>
