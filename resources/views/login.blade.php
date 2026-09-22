<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Slameticon Digital Valley</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Favicon -->
    <link
        rel="icon"
        type="image/png"
        href="{{ asset('images/slameticon.png') }}"
    >

    <style>

        /* =========================================================
           GLOBAL
        ========================================================= */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        body {
            font-family: 'Inter Tight', sans-serif;
            background: #ffffff;
        }


        /* =========================================================
           LOGIN PAGE
        ========================================================= */

        .login-page {
            min-height: 100vh;
            width: 100%;

            display: flex;

            background: #ffffff;

            position: relative;
            overflow: hidden;
        }


        /* =========================================================
           LEFT SIDE
        ========================================================= */

        .login-left {
            width: 50%;
            min-height: 100vh;

            padding: 22px;

            display: flex;
            align-items: stretch;

            flex-shrink: 0;
        }


        /* =========================================================
           BLUE ILLUSTRATION BOX
        ========================================================= */

        .illustration-box {
            width: 100%;
            height: 100%;
            min-height: calc(100vh - 44px);

            background: #0c1285;

            border-radius: 28px;

            display: flex;
            align-items: center;
            justify-content: center;

            position: relative;
            overflow: hidden;
        }


        /* =========================================================
           LOGIN ILLUSTRATION

           Diperkecil supaya tidak terlalu memenuhi
           area biru.
        ========================================================= */

        .illustration-image {
            width: 58%;
            max-width: 430px;
            height: auto;

            object-fit: contain;

            display: block;

            position: relative;
            z-index: 2;
        }


        /* =========================================================
           RIGHT SIDE
        ========================================================= */

        .login-right {
            width: 50%;
            min-height: 100vh;

            position: relative;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 60px 90px;

            overflow: hidden;
        }


        /* =========================================================
           WATERMARK SLAMETICON

           Dibuat FULL dari ujung kiri panel kanan
           sampai ujung kanan layar.
        ========================================================= */

        .login-watermark {
            position: absolute;

            /*
             * Full panel kanan
             */
            top: 0;
            left: 0;
            right: 0;

            width: 100%;
            height: 330px;

            /* background-image:
                url("{{ asset('images/logo_sdv.png') }}"); */

            background-repeat: no-repeat;

            /*
             * Logo dimulai dari sisi kiri
             * panel kanan dengan sedikit jarak.
             */
            background-position: 7% 0;

            /*
             * Ukuran watermark.
             */
            background-size: 500px auto;

            /*
             * Sangat transparan.
             */
            opacity: 0.035;

            pointer-events: none;

            z-index: 0;
        }


        /* =========================================================
           WATERMARK LINES

           Pola garis dibuat memenuhi seluruh
           bagian atas panel kanan.
        ========================================================= */

        .login-watermark-lines {
            position: absolute;

            top: 0;
            left: 0;
            right: 0;

            width: 100%;
            height: 230px;

            opacity: 0.035;

            pointer-events: none;

            background-image:
                linear-gradient(
                    90deg,

                    transparent 0%,
                    transparent 7%,

                    #8d3cc7 7%,
                    #8d3cc7 9%,

                    transparent 9%,
                    transparent 15%,

                    #8d3cc7 15%,
                    #8d3cc7 17%,

                    transparent 17%,
                    transparent 23%,

                    #8d3cc7 23%,
                    #8d3cc7 25%,

                    transparent 25%,
                    transparent 31%,

                    #8d3cc7 31%,
                    #8d3cc7 33%,

                    transparent 33%,
                    transparent 39%,

                    #8d3cc7 39%,
                    #8d3cc7 41%,

                    transparent 41%,
                    transparent 47%,

                    #8d3cc7 47%,
                    #8d3cc7 49%,

                    transparent 49%,
                    transparent 55%,

                    #8d3cc7 55%,
                    #8d3cc7 57%,

                    transparent 57%,
                    transparent 63%,

                    #8d3cc7 63%,
                    #8d3cc7 65%,

                    transparent 65%,
                    transparent 71%,

                    #8d3cc7 71%,
                    #8d3cc7 73%,

                    transparent 73%,
                    transparent 79%,

                    #8d3cc7 79%,
                    #8d3cc7 81%,

                    transparent 81%,
                    transparent 87%,

                    #8d3cc7 87%,
                    #8d3cc7 89%,

                    transparent 89%,
                    transparent 100%
                );

            /*
             * Membuat garis semakin hilang
             * ke bawah.
             */
            mask-image:
                linear-gradient(
                    to bottom,
                    black 0%,
                    black 35%,
                    transparent 100%
                );

            -webkit-mask-image:
                linear-gradient(
                    to bottom,
                    black 0%,
                    black 35%,
                    transparent 100%
                );

            z-index: 0;
        }


        /* =========================================================
           LOGIN CONTENT
        ========================================================= */

        .login-content {
            width: 100%;
            max-width: 455px;

            position: relative;

            z-index: 5;
        }


        /* =========================================================
           LOGO
        ========================================================= */

        .login-logo {
            display: flex;
            align-items: center;

            gap: 9px;

            margin-bottom: 42px;
        }

        .login-logo img {
            width: auto;
            height: 34px;

            object-fit: contain;
        }

        .login-logo-text {
            line-height: 1.05;
        }

        .login-logo-title {
            display: block;

            font-size: 15px;
            line-height: 1.1;

            font-weight: 700;

            color: #0c1285;
        }

        .login-logo-subtitle {
            display: block;

            margin-top: 2px;

            font-size: 14px;
            line-height: 1.1;

            font-weight: 600;

            color: #2364e8;
        }


        /* =========================================================
           GREETING
        ========================================================= */

        .login-greeting {
            margin-bottom: 34px;
        }

        .login-greeting h1 {
            margin: 0 0 3px 0;

            font-size: 30px;
            line-height: 1.2;

            font-weight: 700;

            color: #111111;
        }

        .login-greeting h2 {
            margin: 0;

            font-size: 24px;
            line-height: 1.25;

            font-weight: 600;

            color: #111111;
        }


        /* =========================================================
           FORM
        ========================================================= */

        .login-form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 19px;
        }

        .form-label {
            display: block;

            margin-bottom: 7px;

            font-size: 11px;
            line-height: 1.3;

            font-weight: 500;

            color: #555555;
        }

        .form-input {
            width: 100%;
            height: 48px;

            padding: 0 15px;

            border: none;
            outline: none;

            border-radius: 7px;

            background: #f2f2f2;

            font-family: 'Inter Tight', sans-serif;
            font-size: 14px;

            color: #222222;

            transition:
                background 0.2s ease,
                box-shadow 0.2s ease;
        }

        .form-input::placeholder {
            color: #999999;
        }

        .form-input:focus {
            background: #eeeeee;

            box-shadow:
                0 0 0 2px rgba(12, 18, 133, 0.12);
        }


        /* =========================================================
           PASSWORD
        ========================================================= */

        .password-wrapper {
            position: relative;
        }

        .password-input {
            padding-right: 48px;
        }

        .password-toggle {
            position: absolute;

            right: 14px;
            top: 50%;

            transform: translateY(-50%);

            width: 28px;
            height: 28px;

            padding: 0;

            border: none;
            background: transparent;

            color: #8b8b8b;

            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .password-toggle:hover {
            color: #555555;
        }

        .password-toggle svg {
            width: 18px;
            height: 18px;
        }


        /* =========================================================
           REMEMBER / FORGOT
        ========================================================= */

        .login-options {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-top: 2px;
            margin-bottom: 27px;
        }

        .remember-label {
            display: flex;
            align-items: center;

            cursor: pointer;

            user-select: none;
        }

        .remember-checkbox {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .remember-switch {
            position: relative;

            width: 34px;
            height: 18px;

            background: #e5e7eb;

            border-radius: 999px;

            transition: background 0.2s ease;
        }

        .remember-switch::after {
            content: '';

            position: absolute;

            top: 2px;
            left: 2px;

            width: 14px;
            height: 14px;

            border-radius: 50%;

            background: #ffffff;

            box-shadow:
                0 1px 2px rgba(0, 0, 0, 0.12);

            transition:
                transform 0.2s ease;
        }

        .remember-checkbox:checked + .remember-switch {
            background: #0c1285;
        }

        .remember-checkbox:checked + .remember-switch::after {
            transform: translateX(16px);
        }

        .remember-text {
            margin-left: 9px;

            font-size: 11px;
            font-weight: 500;

            color: #555555;
        }

        .forgot-link {
            font-size: 11px;
            font-weight: 500;

            color: #1769e8;

            text-decoration: none;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }


        /* =========================================================
           SIGN IN BUTTON
        ========================================================= */

        .login-button {
            width: 100%;
            height: 48px;

            border: none;
            border-radius: 7px;

            background: #087ff5;

            color: #ffffff;

            font-family: 'Inter Tight', sans-serif;
            font-size: 14px;
            font-weight: 600;

            cursor: pointer;

            transition:
                background 0.25s ease,
                transform 0.2s ease,
                box-shadow 0.25s ease;
        }

        .login-button:hover {
            background: #066ed8;

            box-shadow:
                0 7px 18px rgba(8, 127, 245, 0.18);
        }

        .login-button:active {
            transform: translateY(1px);
        }


        /* =========================================================
           COPYRIGHT
        ========================================================= */

        .copyright {
            position: absolute;

            right: 35px;
            bottom: 25px;

            z-index: 5;

            font-size: 10px;
            line-height: 1.4;

            font-weight: 400;

            color: #7d8492;
        }


        /* =========================================================
           LARGE DESKTOP
        ========================================================= */

        @media (min-width: 1600px) {

            .login-left {
                padding: 22px;
            }

            .illustration-box {
                border-radius: 30px;
            }

            /*
             * Tetap diperkecil pada layar besar.
             */
            .illustration-image {
                width: 56%;
                max-width: 500px;
            }

            .login-right {
                padding-left: 110px;
                padding-right: 110px;
            }

            .login-content {
                max-width: 500px;
            }

            .login-greeting h1 {
                font-size: 32px;
            }

            .login-greeting h2 {
                font-size: 26px;
            }

            .form-input,
            .login-button {
                height: 50px;
            }

            /*
             * Watermark sedikit diperbesar
             * pada monitor besar.
             */
            .login-watermark {
                height: 350px;
                background-size: 560px auto;
                background-position: 6% 0;
            }

            .login-watermark-lines {
                height: 250px;
            }
        }


        /* =========================================================
           TABLET
        ========================================================= */

        @media (max-width: 1024px) {

            .login-left {
                width: 48%;
                padding: 18px;
            }

            .login-right {
                width: 52%;

                padding: 50px 45px;
            }

            .illustration-image {
                width: 62%;
                max-width: 380px;
            }

            .login-content {
                max-width: 420px;
            }

            .login-watermark {
                height: 300px;

                background-size: 430px auto;

                background-position: 5% 0;
            }

            .login-watermark-lines {
                height: 210px;
            }
        }


        /* =========================================================
           MOBILE
        ========================================================= */

        @media (max-width: 767px) {

            .login-page {
                min-height: 100vh;

                display: block;

                overflow-y: auto;
            }

            .login-left {
                display: none;
            }

            .login-right {
                width: 100%;
                min-height: 100vh;

                padding: 45px 28px 80px;

                align-items: flex-start;

                justify-content: flex-start;
            }

            .login-content {
                max-width: 100%;

                margin-top: 35px;
            }

            .login-logo {
                margin-bottom: 48px;
            }

            .login-greeting {
                margin-bottom: 35px;
            }

            .login-greeting h1 {
                font-size: 28px;
            }

            .login-greeting h2 {
                font-size: 22px;
            }

            /*
             * Watermark tetap memenuhi
             * bagian atas mobile.
             */
            .login-watermark {
                width: 100%;
                height: 260px;

                background-size: 390px auto;

                background-position: 10% 0;

                opacity: 0.025;
            }

            .login-watermark-lines {
                width: 100%;
                height: 180px;

                opacity: 0.025;
            }

            .copyright {
                right: auto;
                left: 28px;
                bottom: 22px;

                font-size: 9px;
            }
        }

    </style>

</head>


<body class="antialiased selection:bg-[#0c1285] selection:text-white">


    <main class="login-page">


        <!-- =====================================================
             LEFT SIDE - ILLUSTRATION
        ====================================================== -->

        <section class="login-left">

            <div class="illustration-box">

                <img
                    src="{{ asset('images/login.png') }}"
                    alt="Slameticon Digital Valley Login Illustration"
                    class="illustration-image"
                >

            </div>

        </section>


        <!-- =====================================================
             RIGHT SIDE - LOGIN
        ====================================================== -->

        <section class="login-right">


            <!-- =================================================
                 FULL WIDTH WATERMARK
            ================================================== -->

            <div class="login-watermark"></div>

            <div class="login-watermark-lines"></div>


            <!-- =================================================
                 LOGIN CONTENT
            ================================================== -->

            <div class="login-content">


                <!-- LOGO -->

                <div class="login-logo">

                    <img
                        src="{{ asset('images/slameticon.png') }}"
                        alt="Slameticon Digital Valley"
                    >

                    <div class="login-logo-text">

                        <span class="login-logo-title">
                            Slameticon
                        </span>

                        <span class="login-logo-subtitle">
                            Digital Valley
                        </span>

                    </div>

                </div>


                <!-- GREETING -->

                <div class="login-greeting">

                    <h1>
                        Helloo 👋
                    </h1>

                    <h2>
                        Nice to see you again
                    </h2>

                </div>


                <!-- LOGIN FORM -->

                <form
                    action="#"
                    method="POST"
                    class="login-form"
                >

                    @csrf


                    <!-- LOGIN -->

                    <div class="form-group">

                        <label
                            for="login"
                            class="form-label"
                        >
                            Login
                        </label>

                        <input
                            id="login"
                            name="login"
                            type="text"
                            placeholder="Email or phone number"
                            autocomplete="username"
                            class="form-input"
                            required
                        >

                    </div>


                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label
                            for="passwordInput"
                            class="form-label"
                        >
                            Password
                        </label>

                        <div class="password-wrapper">

                            <input
                                id="passwordInput"
                                name="password"
                                type="password"
                                placeholder="Enter password"
                                autocomplete="current-password"
                                class="form-input password-input"
                                required
                            >

                            <button
                                type="button"
                                onclick="togglePassword()"
                                class="password-toggle"
                                aria-label="Show password"
                            >

                                <svg
                                    id="eyeIcon"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                    />

                                </svg>

                            </button>

                        </div>

                    </div>


                    <!-- REMEMBER ME + FORGOT PASSWORD -->

                    <div class="login-options">

                        <label class="remember-label">

                            <input
                                type="checkbox"
                                name="remember"
                                class="remember-checkbox"
                            >

                            <span class="remember-switch"></span>

                            <span class="remember-text">
                                Remember me
                            </span>

                        </label>


                        <a
                            href="#"
                            class="forgot-link"
                        >
                            Forgot password?
                        </a>

                    </div>


                    <!-- SIGN IN -->

                    <button
                        type="submit"
                        class="login-button"
                    >
                        Sign in
                    </button>

                </form>

            </div>


            <!-- =================================================
                 COPYRIGHT
            ================================================== -->

            <div class="copyright">
                &copy; 2026 Slameticon Digital Valley. All rights reserved.
            </div>


        </section>

    </main>


    <!-- =========================================================
         PASSWORD TOGGLE
    ========================================================== -->

    <script>

        function togglePassword() {

            const passwordInput =
                document.getElementById('passwordInput');

            const eyeIcon =
                document.getElementById('eyeIcon');

            const button =
                document.querySelector('.password-toggle');


            if (passwordInput.type === 'password') {

                passwordInput.type = 'text';

                button.setAttribute(
                    'aria-label',
                    'Hide password'
                );


                eyeIcon.innerHTML = `

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"
                    />

                `;

            } else {

                passwordInput.type = 'password';

                button.setAttribute(
                    'aria-label',
                    'Show password'
                );


                eyeIcon.innerHTML = `

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />

                `;

            }

        }

    </script>

</body>

</html>