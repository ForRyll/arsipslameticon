@php
    // Profil perusahaan aktif (atau record pertama sebagai fallback)
    $companyProfile = $companyProfile ?? \App\Models\CompanyProfile::where('is_active', true)->first();

    /**
     * Helper: ekstrak nilai dari field yang bisa berupa string biasa
     * ataupun JSON/array multilingual (mis. ['id' => '...', 'en' => '...']).
     * Prioritas bahasa: id -> en -> nilai pertama yang tersedia.
     */
    $parseJsonField = function ($field) {
        if (is_array($field)) {
            return $field['id'] ?? $field['en'] ?? reset($field) ?? '';
        }

        if (is_string($field)) {
            $decoded = json_decode($field, true);

            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                return $decoded['id'] ?? $decoded['en'] ?? reset($decoded) ?? '';
            }

            return $field;
        }

        return '';
    };

    // Company name, description, vision
    $companyName = $companyProfile->name ?? 'PT Slameticon Digital Valey';
    $description = $parseJsonField($companyProfile->description ?? '');
    $vision      = $parseJsonField($companyProfile->vision ?? '');

    /**
     * Mission bisa berupa:
     * - Array list biasa: ['misi 1', 'misi 2', ...]
     * - Array multilingual: ['id' => ['misi 1', 'misi 2'], 'en' => [...]]
     * - JSON string dari salah satu bentuk di atas
     */
    $missionData = $companyProfile->mission ?? [];

    if (is_string($missionData)) {
        $decoded     = json_decode($missionData, true);
        $missionData = (json_last_error() === JSON_ERROR_NONE) ? $decoded : [$missionData];
    }

    if (isset($missionData['id']) && is_array($missionData['id'])) {
        $missions = $missionData['id'];
    } elseif (isset($missionData['en']) && is_array($missionData['en'])) {
        $missions = $missionData['en'];
    } elseif (is_array($missionData)) {
        $missions = $missionData;
    } else {
        $missions = [];
    }

    /**
     * Resolusi path logo: mendukung URL eksternal, path storage yang
     * sudah lengkap ('storage/...'), maupun path relatif di disk storage.
     */
    $logoPath = $companyProfile->logo_url ?? null;

    if (!$logoPath) {
        $logoSrc = asset('images/slameticon.png');
    } elseif (str_starts_with($logoPath, 'http://') || str_starts_with($logoPath, 'https://')) {
        $logoSrc = $logoPath;
    } elseif (str_starts_with($logoPath, 'storage/')) {
        $logoSrc = asset($logoPath);
    } else {
        $logoSrc = \Illuminate\Support\Facades\Storage::url($logoPath);
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - {{ $companyName }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ $logoSrc }}">
    <link rel="shortcut icon" type="image/png" href="{{ $logoSrc }}">
    <link rel="apple-touch-icon" href="{{ $logoSrc }}">

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

<body class="bg-[#ffffff] text-black antialiased selection:bg-[#1112A2] selection:text-white">

    @include('partials.navbar')

    <div class="pt-24 md:pt-28"></div>

    {{-- =========================================================
         1. ABOUT US
    ========================================================= --}}
    <section class="py-12 md:py-20 px-6 md:px-12 bg-[#ffffff] text-black flex items-center">
        <div class="max-w-[1200px] mx-auto w-full">

            {{-- Subtitle (rata tengah) --}}
            <div class="mb-8 text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-[#1112A2] tracking-wide mb-3">
                    {{ __('About Us') }}
                </h1>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                {{-- Kotak logo --}}
                <div class="lg:col-span-5 bg-white rounded-2xl p-8 md:p-12 flex items-center justify-center min-h-[350px] md:min-h-[420px]">
                    <img src="{{ $logoSrc }}" alt="{{ $companyName }}" class="w-full max-w-xs md:max-w-sm h-auto object-contain">
                </div>

                {{-- Nama & deskripsi perusahaan (Justified) --}}
                <div class="lg:col-span-7 flex flex-col justify-center">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#1112A2] mb-6 tracking-tight leading-tight">
                        {{ $companyName }}
                    </h1>

                    <p class="text-[17px] text-black/90 leading-relaxed font-normal text-justify">
                        {{ $description ?: 'Deskripsi perusahaan belum dikonfigurasi.' }}
                    </p>
                </div>

            </div>

        </div>
    </section>

    {{-- =========================================================
         2. OUR VISION & MISSION
    ========================================================= --}}
    <section class="py-16 md:py-24 px-6 md:px-12 overflow-hidden relative">
        <div class="max-w-[1100px] mx-auto relative flex flex-col md:flex-row items-stretch gap-12 md:gap-0">

            {{-- Garis pemisah miring (desktop/tablet) --}}
            <div class="hidden md:block absolute left-1/2 top-4 bottom-4 w-[2px] bg-[#1112A2] transform -translate-x-1/2 rotate-[15deg]"></div>

            {{-- Vision (Justified) --}}
            <div class="w-full md:w-1/2 md:pr-16 flex flex-col text-center md:text-right">
                <h2 class="text-2xl md:text-3xl font-semibold text-[#1112A2] mb-6">Our Vision</h2>
                <p class="text-[15px] text-gray-500 leading-relaxed max-w-sm mx-auto md:ml-auto md:mr-0 text-justify">
                    {{ $vision ?: 'Visi perusahaan belum ditambahkan.' }}
                </p>
            </div>

            {{-- Garis pemisah horizontal (mobile) --}}
            <div class="block md:hidden w-3/4 h-[2px] bg-[#1112A2] mx-auto rounded-full"></div>

            {{-- Mission (Justified) --}}
            <div class="w-full md:w-1/2 md:pl-16 flex flex-col text-left">
                <h2 class="text-2xl md:text-3xl font-semibold text-[#1112A2] mb-6 text-center md:text-left">
                    Our Mission
                </h2>

                @if (!empty($missions))
                    <ul class="text-[15px] text-gray-500 leading-relaxed list-disc list-outside ml-5 space-y-2 max-w-lg mx-auto md:mx-0 text-justify">
                        @foreach ($missions as $item)
                            @if (is_string($item))
                                <li>{{ $item }}</li>
                            @elseif (is_array($item))
                                <li>{{ $item['id'] ?? $item['en'] ?? reset($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                @else
                    <p class="text-[15px] text-gray-500 leading-relaxed text-center md:text-left">
                        Misi perusahaan belum ditambahkan.
                    </p>
                @endif
            </div>

        </div>
    </section>

    @include('partials.footer')

</body>

</html>