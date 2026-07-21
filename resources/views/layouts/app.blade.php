<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VER Immobilien AG')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon-32x32.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @push('styles')
        <style>
            :root {
                --brand-red: #ED1C24;
                --brand-white: #FFFFFF;
                --brand-gray-light: #E7E7E7;
                --brand-gray-dark: #B7B7B7;
                --brand-black: #262525;
            }

            * {
                font-family: 'Poppins', sans-serif;
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                margin: 0;
                color: var(--brand-black);
                background: var(--brand-white);
            }

            .container {
                max-width: 1280px;
                margin: 0 auto;
                padding: 0 2rem;
            }

            /* Header */

            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 100;
                transition: background .35s, box-shadow .35s;
            }

            .navbar.scrolled {
                background: rgba(255, 255, 255, 0.97);
                box-shadow: 0 2px 24px rgba(0, 0, 0, .08);
                backdrop-filter: blur(12px);
            }

            .nav-inner {
                height: 72px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .logo-image {
                width: 100%;
                height: 50px;
                object-fit: contain;
            }

            .nav-links {
                display: flex;
                align-items: center;
                gap: 2rem;
            }

            .nav-link {
                position: relative;
                font-size: .85rem;
                font-weight: 500;
                color: var(--brand-white);
                text-decoration: none;
                padding: .25rem 0;
                transition: color .2s;
            }

            .navbar.scrolled .nav-link {
                color: var(--brand-black);
            }

            .nav-link::after {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 0;
                height: 2px;
                background: var(--brand-red);
                transition: width .25s;
            }

            .nav-link:hover::after {
                width: 100%;
            }

            .nav-link:hover {
                color: var(--brand-red);
            }

            .nav-cta {
                display: flex;
                align-items: center;
                gap: .5rem;
                background: var(--brand-red);
                color: var(--brand-white);
                font-size: .8rem;
                font-weight: 700;
                letter-spacing: .05em;
                text-transform: uppercase;
                padding: .7rem 1.4rem;
                text-decoration: none;
            }

            .nav-cta:hover {
                background: #c9151b;
            }

            .footer {
                background: #262525;
                color: white;
                padding: 5rem 2rem 0;
            }

            .footer-grid {
                display: grid;
                grid-template-columns: 1.7fr repeat(3, 1fr);
                gap: 3rem;
                padding-bottom: 4rem;
            }

            .footer-logo {
                margin-bottom: 1.5rem;
            }

            .footer .logo-image {
                width: 150px;
                height: auto;
                object-fit: contain;
            }

            .footer-desc {
                max-width: 380px;
                margin: 0 0 1.5rem;
                color: rgba(255, 255, 255, 0.65);
                font-size: 0.9rem;
                line-height: 1.8;
                text-align: left;
            }

            .footer-phone {
                display: inline-flex;
                color: white;
                font-size: 1rem;
                font-weight: 700;
                text-decoration: none;
                transition: color 0.25s ease;
            }

            .footer-phone:hover {
                color: var(--brand-red);
            }

            .footer-title {
                margin: 0 0 1.4rem;
                color: white;
                font-size: 0.78rem;
                font-weight: 800;
                letter-spacing: 0.12em;
                text-transform: uppercase;
            }

            .footer-list {
                display: flex;
                flex-direction: column;
                gap: 0.85rem;
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .footer-link {
                color: rgba(255, 255, 255, 0.62);
                font-size: 0.88rem;
                text-decoration: none;
                transition:
                    color 0.25s ease,
                    padding-left 0.25s ease;
            }

            .footer-link:hover {
                color: white;
                padding-left: 4px;
            }

            .footer-bottom {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 1.5rem;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                padding: 1.5rem 0;
                color: rgba(255, 255, 255, 0.45);
                font-size: 0.78rem;
            }

            .footer-bottom p {
                margin: 0;
            }

            .footer-bottom-links {
                display: flex;
                align-items: center;
                gap: 0.7rem;
            }

            .footer-bottom-links a {
                color: rgba(255, 255, 255, 0.55);
                text-decoration: none;
                transition: color 0.25s ease;
            }

            .footer-bottom-links a:hover {
                color: white;
            }

            @media (max-width: 950px) {
                .footer-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 640px) {
                .footer {
                    padding: 4rem 1.25rem 0;
                }

                .footer-grid {
                    grid-template-columns: 1fr;
                    gap: 2.5rem;
                }

                .footer-bottom {
                    flex-direction: column;
                    align-items: flex-start;
                }
            }

            /* Mobile */

            @media(max-width: 768px) {
                .hidden-mobile {
                    display: none !important;
                }

                .nav-cta {
                    display: none;
                }

                .footer-grid {
                    grid-template-columns: 1fr 1fr;
                }
            }

            .hero {
                height: 100vh;
                min-height: 680px;
                position: relative;
                overflow: hidden;
                display: flex;
                align-items: center;
            }

            .hero-img {
                position: absolute;
                inset: 0;
                background: url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1800&q=85') center/cover no-repeat;
            }

            .hero-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(105deg,
                        rgba(38, 37, 37, .88) 0%,
                        rgba(237, 28, 36, .45) 52%,
                        rgba(38, 37, 37, .2) 100%);
            }

            .hero-strip {
                position: absolute;
                top: 0;
                right: -120px;
                bottom: 0;
                width: 380px;
                background: var(--brand-red);
                clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
                opacity: .12;
            }

            .hero-content {
                position: relative;
                z-index: 2;
                width: 100%;
            }

            .section-label {
                font-size: .72rem;
                font-weight: 700;
                letter-spacing: .14em;
                text-transform: uppercase;
                color: var(--brand-red);
            }

            .search-card {
                background: var(--brand-white);
                box-shadow: 0 20px 60px rgba(0, 0, 0, .14);
                margin-top: -52px;
                position: relative;
                z-index: 10;
            }

            .search-tab {
                font-size: .8rem;
                font-weight: 600;
                letter-spacing: .06em;
                text-transform: uppercase;
                padding: .65rem 1.4rem;
                border: none;
                background: none;
                cursor: pointer;
            }

            .search-tab.active {
                color: var(--brand-red);
                border-bottom: 3px solid var(--brand-red);
            }

            .field-wrap {
                border-right: 1px solid var(--brand-gray-light);
                padding: .9rem 1.4rem;
                flex: 1;
            }

            .field-wrap label {
                font-size: .68rem;
                font-weight: 600;
                letter-spacing: .08em;
                text-transform: uppercase;
                color: var(--brand-gray-dark);
            }

            .field-wrap input,
            .field-wrap select {
                border: none;
                outline: none;
                width: 100%;
                font-size: .88rem;
                font-weight: 500;
                color: var(--brand-black);
                background: transparent;
            }

            .prop-card,
            .why-card,
            .testimonial-card,
            .step-card {
                background: var(--brand-white);
                transition: .3s;
            }

            .prop-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 24px 48px rgba(0, 0, 0, .13);
            }

            .prop-card img {
                width: 100%;
                height: 230px;
                object-fit: cover;
            }

            .cta-banner {
                background: var(--brand-red);
                padding: 5rem 2rem;
            }

            .btn-red {
                background: var(--brand-red);
                color: var(--brand-white);
                padding: .85rem 1.75rem;
                text-decoration: none;
                font-weight: 700;
                text-transform: uppercase;
                display: inline-flex;
                align-items: center;
                gap: .6rem;
            }

            .btn-red:hover {
                background: #c9151b;
            }

            @media(max-width:768px) {
                .hero {
                    min-height: 620px;
                }
            }
        </style>
    @endpush

    @stack('styles')
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>

</html>
