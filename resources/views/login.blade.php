<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Slameticon Digital Valey</title>

    @vite(['resources/css/app.css', 'resources/js/studio-app.js'])

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo_sdv.png') }}">

    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
        }
    </style>
</head>

<body class="antialiased selection:bg-[#0c1285] selection:text-white bg-white">

    <main class="relative flex min-h-screen w-full overflow-hidden bg-white max-md:block max-md:overflow-y-auto">

        <!-- LEFT SIDE - ILLUSTRATION -->
        <section class="flex w-1/2 min-h-screen shrink-0 items-stretch p-[22px] max-lg:w-[48%] max-lg:p-[18px] max-md:hidden 2xl:p-[22px]">
            <div class="relative flex min-h-[calc(100vh-44px)] w-full items-center justify-center overflow-hidden rounded-[28px] bg-[#0c1285] 2xl:rounded-[30px]">
                <img src="{{ asset('images/login.png') }}" alt="Slameticon Digital valey Login Illustration"
                    class="relative z-[2] block h-auto w-[58%] max-w-[430px] object-contain max-lg:w-[62%] max-lg:max-w-[380px] 2xl:w-[56%] 2xl:max-w-[500px]">
            </div>
        </section>

        <!-- RIGHT SIDE - LOGIN -->
        <section class="relative flex min-h-screen w-1/2 items-center justify-center overflow-hidden px-[90px] py-[60px] max-lg:w-[52%] max-lg:px-[45px] max-lg:py-[50px] max-md:w-full max-md:items-start max-md:justify-start max-md:px-[28px] max-md:pb-[80px] max-md:pt-[45px] 2xl:px-[110px]">

            <!-- WATERMARK & LINES -->
            <div class="pointer-events-none absolute left-0 right-0 top-0 z-0 h-[330px] w-full bg-[7%_0] bg-no-repeat opacity-[0.035] max-lg:h-[300px] max-lg:bg-[5%_0] max-md:h-[260px] max-md:bg-[10%_0] max-md:opacity-[0.025] 2xl:h-[350px] 2xl:bg-[6%_0]" style="background-size: 500px auto;"></div>

            <div class="pointer-events-none absolute left-0 right-0 top-0 z-0 h-[230px] w-full opacity-[0.035] max-lg:h-[210px] max-md:h-[180px] max-md:opacity-[0.025] 2xl:h-[250px]"
                 style="background-image: linear-gradient(90deg, transparent 0%, transparent 7%, #8d3cc7 7%, #8d3cc7 9%, transparent 9%, transparent 15%, #8d3cc7 15%, #8d3cc7 17%, transparent 17%, transparent 23%, #8d3cc7 23%, #8d3cc7 25%, transparent 25%, transparent 31%, #8d3cc7 31%, #8d3cc7 33%, transparent 33%, transparent 39%, #8d3cc7 39%, #8d3cc7 41%, transparent 41%, transparent 47%, #8d3cc7 47%, #8d3cc7 49%, transparent 49%, transparent 55%, #8d3cc7 55%, #8d3cc7 57%, transparent 57%, transparent 63%, #8d3cc7 63%, #8d3cc7 65%, transparent 65%, transparent 71%, #8d3cc7 71%, #8d3cc7 73%, transparent 73%, transparent 79%, #8d3cc7 79%, #8d3cc7 81%, transparent 81%, transparent 87%, #8d3cc7 87%, #8d3cc7 89%, transparent 89%, transparent 100%); mask-image: linear-gradient(to bottom, black 0%, black 35%, transparent 100%); -webkit-mask-image: linear-gradient(to bottom, black 0%, black 35%, transparent 100%);">
            </div>

            <!-- LOGIN CONTENT -->
            <div class="relative z-[5] w-full max-w-[455px] max-lg:max-w-[420px] max-md:mt-[35px] max-md:max-w-full 2xl:max-w-[500px]">

                <!-- LOGO -->
                <div class="mb-[42px] flex items-center gap-[9px] max-md:mb-[48px]">
                    <img src="{{ asset('images/logo_sdv.png') }}" alt="Slameticon Digital valey" class="h-[34px] w-auto object-contain">
                    <div class="leading-[1.05]">
                        <span class="block font-['Inter_Tight'] text-[15px] font-bold leading-[1.1] text-[#0c1285]">
                            Slameticon
                        </span>
                        <span class="mt-[2px] block font-['Inter_Tight'] text-[14px] font-semibold leading-[1.1] text-[#2364e8]">
                            Digital valey
                        </span>
                    </div>
                </div>

                <!-- GREETING -->
                <div class="mb-[34px] max-md:mb-[35px]">
                    <h1 class="m-0 mb-[3px] text-[30px] font-bold leading-[1.2] text-[#111111] max-md:text-[28px] 2xl:text-[32px]">
                        Helloo 👋
                    </h1>
                    <h2 class="m-0 text-[24px] font-semibold leading-[1.25] text-[#111111] max-md:text-[22px] 2xl:text-[26px]">
                        Nice to see you again
                    </h2>
                </div>

                <!-- FORM HTTP POST REGULAR -->
                <form action="{{ route('login') }}" method="POST" class="w-full">
                    @csrf

                    <!-- ERROR MESSAGE -->
                    @if ($errors->any())
                        <div class="mb-4 rounded-md bg-red-50 p-3 text-xs text-red-600">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <!-- LOGIN INPUT -->
                    <div class="mb-[19px]">
                        <label for="login" class="mb-[7px] block text-[11px] font-medium leading-[1.3] text-[#555555]">
                            Login
                        </label>
                        <input name="login" value="{{ old('login') }}" id="login" type="text" placeholder="Email or phone number" autocomplete="username"
                            class="h-[48px] w-full rounded-[7px] border-none bg-[#f2f2f2] px-[15px] text-[14px] text-[#222222] outline-none transition-all duration-200 placeholder:text-[#999999] focus:bg-[#eeeeee] focus:ring-2 focus:ring-[#0c1285]/12 2xl:h-[50px]" required autofocus>
                    </div>

                    <!-- PASSWORD INPUT -->
                    <div class="mb-[19px]">
                        <label for="passwordInput" class="mb-[7px] block text-[11px] font-medium leading-[1.3] text-[#555555]">
                            Password
                        </label>
                        <div class="relative">
                            <input name="password" id="passwordInput" type="password" placeholder="Enter password" autocomplete="current-password"
                                class="h-[48px] w-full rounded-[7px] border-none bg-[#f2f2f2] pl-[15px] pr-[48px] text-[14px] text-[#222222] outline-none transition-all duration-200 placeholder:text-[#999999] focus:bg-[#eeeeee] focus:ring-2 focus:ring-[#0c1285]/12 2xl:h-[50px]" required>

                            <button type="button" onclick="togglePassword()" class="absolute right-[14px] top-1/2 flex h-[28px] w-[28px] -translate-y-1/2 items-center justify-center border-none bg-transparent p-0 text-[#8b8b8b] hover:text-[#555555]" aria-label="Show password">
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-[18px] w-[18px]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- REMEMBER ME & FORGOT PASSWORD -->
                    <div class="mb-[27px] mt-[2px] flex items-center justify-between">
                        <label class="flex cursor-pointer select-none items-center">
                            <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} class="peer absolute opacity-0">
                            <span class="relative h-[18px] w-[34px] rounded-full bg-[#e5e7eb] transition-colors duration-200 after:absolute after:left-[2px] after:top-[2px] after:h-[14px] after:w-[14px] after:rounded-full after:bg-white after:shadow-[0_1px_2px_rgba(0,0,0,0.12)] after:transition-transform after:duration-200 peer-checked:bg-[#0c1285] peer-checked:after:translate-x-[16px]"></span>
                            <span class="ml-[9px] text-[11px] font-medium text-[#555555]">Remember me</span>
                        </label>

                        <a href="#" class="text-[11px] font-medium text-[#1769e8] no-underline hover:underline">
                            Forgot password?
                        </a>
                    </div>

                    <!-- SUBMIT BUTTON -->
                    <button type="submit" class="h-[48px] w-full rounded-[7px] border-none bg-[#087ff5] font-['Inter_Tight'] text-[14px] font-semibold text-white transition-all duration-200 hover:bg-[#066ed8] hover:shadow-[0_7px_18px_rgba(8,127,245,0.18)] active:translate-y-[1px] 2xl:h-[50px]">
                        Sign in
                    </button>
                </form>
            </div>

            <!-- COPYRIGHT -->
            <div class="absolute bottom-[25px] right-[35px] z-[5] text-[10px] font-normal leading-[1.4] text-[#7d8492] max-md:bottom-[22px] max-md:left-[28px] max-md:right-auto max-md:text-[9px]">
                &copy; {{ date('Y') }} Slameticon Digital valey. All rights reserved.
            </div>

        </section>

    </main>

    <!-- SCRIPT TOGGLE PASSWORD -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('passwordInput');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />`;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />`;
            }
        }
    </script>
</body>

</html>
