<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VER Immobilien AG — Immobilien. Werte. Vertrauen.</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        /* ── Brand tokens ── */
        :root {
            --red: #FF0000;
            --red-d: #CC0000;
            --black: #1a1a1a;
            --gray: #8a8a8a;
            --light: #f2f2f2;
            --white: #ffffff;
        }

        /* ── Smooth scroll ── */
        html {
            scroll-behavior: smooth;
        }

        /* ── Navbar ── */
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

        .nav-link {
            position: relative;
            font-size: .85rem;
            font-weight: 500;
            color: #fff;
            text-decoration: none;
            padding: .25rem 0;
            transition: color .2s;
        }

        .navbar.scrolled .nav-link {
            color: var(--black);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--red);
            transition: width .25s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--red) !important;
        }

        /* ── Hero ── */
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
            transform: scale(1.05);
            animation: zoomOut 8s ease forwards;
        }

        @keyframes zoomOut {
            from {
                transform: scale(1.05);
            }

            to {
                transform: scale(1);
            }
        }

        /* dark + red tint overlay */
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(105deg,
                    rgba(10, 10, 10, .82) 0%,
                    rgba(30, 0, 0, .55) 50%,
                    rgba(0, 0, 0, .15) 100%);
        }

        /* diagonal red accent strip */
        .hero-strip {
            position: absolute;
            top: 0;
            right: -120px;
            bottom: 0;
            width: 380px;
            background: var(--red);
            clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
            opacity: .12;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        /* hero headline fade-up */
        .fade-up {
            opacity: 0;
            transform: translateY(28px);
            animation: fadeUp .7s ease forwards;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ── Floating search card ── */
        .search-card {
            position: relative;
            z-index: 50;
            background: #fff;
            border-radius: 0;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .14);
            margin-top: -52px;
        }

        .search-tab {
            font-size: .8rem;
            font-weight: 600;
            letter-spacing: .06em;
            text-transform: uppercase;
            padding: .65rem 1.4rem;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: color .2s, border-color .2s;
        }

        .search-tab.active {
            color: var(--red);
            border-color: var(--red);
        }

        .search-field {
            display: flex;
            flex-direction: column;
            gap: .25rem;
        }

        .search-field label {
            font-size: .68rem;
            font-weight: 600;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--gray);
        }

        .search-field select,
        .search-field input {
            border: none;
            outline: none;
            font-family: 'Poppins', sans-serif;
            font-size: .88rem;
            font-weight: 500;
            color: var(--black);
            background: transparent;
            cursor: pointer;
            padding: 0;
            width: 100%;
        }

        .field-wrap {
            border-right: 1px solid #ebebeb;
            padding: .9rem 1.4rem;
            flex: 1;
        }

        .field-wrap:last-of-type {
            border-right: none;
        }

        /* price range track */
        input[type=range] {
            -webkit-appearance: none;
            appearance: none;
            height: 3px;
            border-radius: 99px;
            background: linear-gradient(to right, var(--red) 0%, var(--red) 60%, #e0e0e0 60%);
            outline: none;
            width: 100%;
        }

        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--red);
            border: 2px solid #fff;
            box-shadow: 0 2px 8px rgba(255, 0, 0, .35);
            cursor: pointer;
        }

        /* ── Stats strip ── */
        .stat-number {
            font-size: 2.4rem;
            font-weight: 800;
            line-height: 1;
            color: var(--black);
        }

        .stat-number span {
            color: var(--red);
        }

        /* ── Property cards ── */
        .prop-card {
            background: #fff;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s;
            cursor: pointer;
        }

        .prop-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 48px rgba(0, 0, 0, .13);
        }

        .prop-card img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            transition: transform .5s;
        }

        .prop-card:hover img {
            transform: scale(1.06);
        }

        .badge {
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .09em;
            text-transform: uppercase;
            padding: .28rem .7rem;
        }

        .heart-btn {
            width: 34px;
            height: 34px;
            background: rgba(255, 255, 255, .92);
            backdrop-filter: blur(6px);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background .2s;
        }

        .heart-btn:hover {
            background: var(--red);
        }

        .heart-btn:hover svg {
            stroke: #fff;
        }

        /* ── Why Us ── */
        .why-card {
            background: #fff;
            padding: 2rem 1.75rem;
            border-bottom: 3px solid transparent;
            transition: border-color .3s, box-shadow .3s;
        }

        .why-card:hover {
            border-color: var(--red);
            box-shadow: 0 12px 32px rgba(0, 0, 0, .07);
        }

        .why-icon {
            width: 52px;
            height: 52px;
            background: #fff0f0;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .why-icon svg {
            stroke: var(--red);
            width: 24px;
            height: 24px;
        }

        /* ── Process steps ── */
        .step-num {
            font-size: 3.5rem;
            font-weight: 900;
            line-height: 1;
            color: #f2f2f2;
            position: absolute;
            top: -12px;
            left: -8px;
            user-select: none;
        }

        /* ── Testimonial ── */
        .testimonial-card {
            background: #fff;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, .06);
        }

        .stars {
            color: var(--red);
            font-size: 1rem;
            letter-spacing: 2px;
        }

        /* ── CTA banner ── */
        .cta-banner {
            background: var(--red);
            position: relative;
            overflow: hidden;
        }

        .cta-banner::before {
            content: '';
            position: absolute;
            top: -60px;
            right: -60px;
            width: 320px;
            height: 320px;
            background: rgba(255, 255, 255, .08);
            border-radius: 50%;
        }

        .cta-banner::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: 40%;
            width: 220px;
            height: 220px;
            background: rgba(0, 0, 0, .06);
            border-radius: 50%;
        }

        /* ── Footer ── */
        .footer-link {
            color: #9ca3af;
            font-size: .82rem;
            text-decoration: none;
            transition: color .2s;
        }

        .footer-link:hover {
            color: var(--red);
        }

        /* ── Scroll reveal ── */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .6s ease, transform .6s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: none;
        }

        /* ── Section label ── */
        .section-label {
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--red);
            display: flex;
            align-items: center;
            gap: .6rem;
        }

        .section-label::after {
            content: '';
            flex: 1;
            max-width: 40px;
            height: 2px;
            background: var(--red);
        }
    </style>
</head>

<body class="bg-white" style="color:#1a1a1a;">

    {{-- ══════════════════════════════════════════════
     NAVBAR
══════════════════════════════════════════════ --}}
    <header class="navbar" id="navbar">
        <div style="max-width:1280px; margin:0 auto; padding:0 2rem;">
            <div style="display:flex; align-items:center; justify-content:space-between; height:72px;">

                {{-- Logo --}}
                <a href="/" style="display:flex; align-items:center; gap:.65rem; text-decoration:none;">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none">
                        <rect width="38" height="38" rx="4" fill="#FF0000" />
                        <path d="M10 26V16l9-8 9 8v10H23v-6h-8v6H10z" fill="white" stroke="white" stroke-width=".5" />
                    </svg>
                    <div>
                        <div style="font-size:.78rem; font-weight:800; letter-spacing:.1em; color:#fff; line-height:1.1;"
                            id="logo-text">VER IMMOBILIEN</div>
                        <div style="font-size:.58rem; font-weight:400; letter-spacing:.15em; color:rgba(255,255,255,.7);"
                            id="logo-sub">AG · SCHWEIZ</div>
                    </div>
                </a>

                {{-- Nav --}}
                <nav style="display:flex; align-items:center; gap:2rem;" class="hidden-mobile">
                    @foreach (['Kaufen', 'Verkaufen', 'Vermieten', 'Verwaltung', 'Über uns', 'Kontakt'] as $link)
                        <a href="#" class="nav-link">{{ $link }}</a>
                    @endforeach
                </nav>

                {{-- CTA --}}
                <a href="#"
                    style="display:flex; align-items:center; gap:.5rem; background:#FF0000; color:#fff; font-size:.8rem; font-weight:700; letter-spacing:.05em; text-transform:uppercase; padding:.7rem 1.4rem; text-decoration:none; transition:background .2s;"
                    onmouseover="this.style.background='#CC0000'" onmouseout="this.style.background='#FF0000'">
                    Immobilie bewerten
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </header>

    {{-- ══════════════════════════════════════════════
     HERO
══════════════════════════════════════════════ --}}
    <section class="hero">
        <div class="hero-img"></div>
        <div class="hero-overlay"></div>
        <div class="hero-strip"></div>

        <div class="hero-content" style="max-width:1280px; margin:0 auto; padding:0 2rem; width:100%;">
            <div style="max-width:640px;">

                <div class="fade-up" style="animation-delay:.1s;">
                    <div
                        style="display:inline-flex; align-items:center; gap:.5rem; background:rgba(255,0,0,.15); border:1px solid rgba(255,0,0,.3); padding:.35rem .9rem; margin-bottom:1.5rem;">
                        <div
                            style="width:6px; height:6px; border-radius:50%; background:#FF0000; animation:pulse 2s infinite;">
                        </div>
                        <span
                            style="font-size:.72rem; font-weight:600; letter-spacing:.12em; text-transform:uppercase; color:rgba(255,255,255,.9);">VER
                            Immobilien AG · Schweiz</span>
                    </div>
                </div>

                <h1 class="fade-up"
                    style="font-size:clamp(2.6rem,5vw,4.2rem); font-weight:900; line-height:1.08; color:#fff; margin:0 0 1.25rem; animation-delay:.2s;">
                    Immobilien.<br>
                    Werte.<br>
                    <em style="font-style:normal; color:#FF0000;">Vertrauen.</em>
                </h1>

                <p class="fade-up"
                    style="font-size:.95rem; font-weight:300; color:rgba(255,255,255,.75); line-height:1.75; max-width:440px; margin:0 0 2rem; animation-delay:.35s;">
                    Ihr professioneller Partner für Kauf, Verkauf, Vermietung und Verwaltung von Immobilien in der
                    Schweiz — mit Erfahrung, die zählt.
                </p>

                <div class="fade-up" style="display:flex; flex-wrap:wrap; gap:.75rem; animation-delay:.5s;">
                    <a href="#objekte"
                        style="display:inline-flex; align-items:center; gap:.6rem; background:#FF0000; color:#fff; font-size:.85rem; font-weight:700; letter-spacing:.04em; text-transform:uppercase; padding:.85rem 1.75rem; text-decoration:none; transition:background .2s;"
                        onmouseover="this.style.background='#CC0000'" onmouseout="this.style.background='#FF0000'">
                        Objekte ansehen
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#kontakt"
                        style="display:inline-flex; align-items:center; gap:.6rem; border:2px solid rgba(255,255,255,.5); color:#fff; font-size:.85rem; font-weight:600; letter-spacing:.04em; text-transform:uppercase; padding:.85rem 1.75rem; text-decoration:none; transition:all .2s;"
                        onmouseover="this.style.borderColor='#fff'"
                        onmouseout="this.style.borderColor='rgba(255,255,255,.5)'">
                        Kontakt aufnehmen
                    </a>
                </div>

                {{-- Trust bar --}}
                <div class="fade-up"
                    style="display:flex; align-items:center; gap:1.5rem; margin-top:2.5rem; padding-top:2rem; border-top:1px solid rgba(255,255,255,.12); animation-delay:.65s;">
                    @foreach ([['500+', 'Objekte vermittelt'], ['98%', 'Kundenzufriedenheit'], ['15+', 'Jahre Erfahrung']] as $trust)
                        <div>
                            <div style="font-size:1.3rem; font-weight:800; color:#FF0000;">{{ $trust[0] }}</div>
                            <div
                                style="font-size:.7rem; font-weight:400; color:rgba(255,255,255,.55); letter-spacing:.04em;">
                                {{ $trust[1] }}</div>
                        </div>
                        @if (!$loop->last)
                            <div style="width:1px; height:32px; background:rgba(255,255,255,.15);"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div
            style="position:absolute; bottom:2rem; left:50%; transform:translateX(-50%); display:flex; flex-direction:column; align-items:center; gap:.4rem; animation:bounce 2s infinite;">
            <span
                style="font-size:.65rem; font-weight:500; letter-spacing:.12em; text-transform:uppercase; color:rgba(255,255,255,.4);">Scroll</span>
            <svg width="16" height="24" viewBox="0 0 16 24" fill="none">
                <rect x="1" y="1" width="14" height="22" rx="7" stroke="rgba(255,255,255,.3)"
                    stroke-width="1.5" />
                <rect x="6.5" y="5" width="3" height="6" rx="1.5" fill="rgba(255,255,255,.5)">
                    <animate attributeName="y" values="5;12;5" dur="1.8s" repeatCount="indefinite" />
                </rect>
            </svg>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════
     SEARCH BAR (floating)
══════════════════════════════════════════════ --}}
    <section style="background:#f7f7f7; padding-bottom:3.5rem;">
        <div style="max-width:1200px; margin:0 auto; padding:0 2rem;">
            <div class="search-card">

                {{-- Tabs --}}
                <div style="display:flex; border-bottom:1px solid #ebebeb; padding:0 1rem;">
                    @foreach (['Kaufen', 'Mieten', 'Schätzen'] as $tab)
                        <button class="search-tab {{ $loop->first ? 'active' : '' }}" onclick="setTab(this)"
                            style="background:none; border:none; color:{{ $loop->first ? '#FF0000' : '#8a8a8a' }};">{{ $tab }}</button>
                    @endforeach
                </div>

                {{-- Fields --}}
                <div style="display:flex; flex-wrap:wrap; align-items:stretch;">
                    <div class="field-wrap" style="flex:2; min-width:200px;">
                        <div class="search-field">
                            <label>
                                <svg width="12" height="12" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" style="display:inline; margin-right:4px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                Suchbegriff
                            </label>
                            <input type="text" placeholder="z.B. Zürich, Haus, 4.5 Zi.">
                        </div>
                    </div>
                    <div class="field-wrap" style="flex:1; min-width:130px;">
                        <div class="search-field">
                            <label>
                                <svg width="12" height="12" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" style="display:inline; margin-right:4px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Kategorie
                            </label>
                            <select>
                                <option>Alle Typen</option>
                                <option>Haus</option>
                                <option>Wohnung</option>
                                <option>Villa</option>
                                <option>Gewerbe</option>
                            </select>
                        </div>
                    </div>
                    <div class="field-wrap" style="flex:1; min-width:110px;">
                        <div class="search-field">
                            <label>Zimmer</label>
                            <select>
                                <option>Beliebig</option>
                                <option>1+</option>
                                <option>2+</option>
                                <option>3+</option>
                                <option>4+</option>
                                <option>5+</option>
                            </select>
                        </div>
                    </div>
                    <div class="field-wrap" style="flex:1; min-width:110px;">
                        <div class="search-field">
                            <label>Kanton</label>
                            <select>
                                <option>Beliebig</option>
                                <option>Zürich</option>
                                <option>Bern</option>
                                <option>Basel</option>
                                <option>Genf</option>
                                <option>Zug</option>
                            </select>
                        </div>
                    </div>
                    <div class="field-wrap" style="flex:1.2; min-width:150px; border-right:none;">
                        <div class="search-field">
                            <label>Preis max.</label>
                            <div style="display:flex; align-items:center; gap:.5rem; margin-top:.25rem;">
                                <input type="range" min="0" max="5000000" step="50000" value="3000000"
                                    id="priceSlider" oninput="updatePrice(this.value)">
                            </div>
                            <div style="font-size:.78rem; font-weight:600; color:#1a1a1a; margin-top:.15rem;"
                                id="priceDisplay">CHF 3'000'000</div>
                        </div>
                    </div>
                    {{-- Search btn --}}
                    <div style="display:flex; align-items:center; padding:.75rem 1.25rem;">
                        <button
                            style="display:flex; align-items:center; gap:.5rem; background:#FF0000; color:#fff; border:none; font-family:'Poppins',sans-serif; font-size:.82rem; font-weight:700; letter-spacing:.05em; text-transform:uppercase; padding:.85rem 1.6rem; cursor:pointer; white-space:nowrap; transition:background .2s;"
                            onmouseover="this.style.background='#CC0000'"
                            onmouseout="this.style.background='#FF0000'">
                            <svg width="16" height="16" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            Suchen
                        </button>
                    </div>
                </div>

                {{-- Advanced filter toggle --}}
                <div
                    style="border-top:1px solid #f0f0f0; padding:.7rem 1.5rem; display:flex; align-items:center; justify-content:space-between;">
                    <button
                        style="display:flex; align-items:center; gap:.4rem; background:none; border:none; font-family:'Poppins',sans-serif; font-size:.78rem; font-weight:500; color:#8a8a8a; cursor:pointer;">
                        <svg width="14" height="14" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        Mehr Filter
                    </button>
                    <span style="font-size:.75rem; color:#8a8a8a;">
                        <span style="color:#FF0000; font-weight:600;">247</span> Objekte verfügbar
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════
     STATS STRIP
══════════════════════════════════════════════ --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-2 lg:grid-cols-5">

                <div class="text-center lg:text-left lg:pr-10">
                    <div class="text-6xl lg:text-7xl font-light tracking-[-0.04em] text-[#111111]">
                        500<span class="text-[#E30613]">+</span>
                    </div>

                    <div class="mt-4 text-xs uppercase tracking-[0.2em] text-gray-500">
                        Immobilien vermittelt
                    </div>
                </div>

                <div class="text-center lg:text-left lg:px-10 border-l border-gray-200">
                    <div class="text-6xl lg:text-7xl font-light tracking-[-0.04em] text-[#111111]">
                        <span class="text-2xl align-middle text-[#E30613]">
                            CHF
                        </span>
                        2
                        <span class="text-[#E30613] text-3xl">
                            Mrd+
                        </span>
                    </div>

                    <div class="mt-4 text-xs uppercase tracking-[0.2em] text-gray-500">
                        Transaktionsvolumen
                    </div>
                </div>

                <div class="text-center lg:text-left lg:px-10 border-l border-gray-200">
                    <div class="text-6xl lg:text-7xl font-light tracking-[-0.04em] text-[#111111]">
                        15
                    </div>

                    <div class="mt-4 text-xs uppercase tracking-[0.2em] text-gray-500">
                        Jahre am Markt
                    </div>
                </div>

                <div class="text-center lg:text-left lg:px-10 border-l border-gray-200">
                    <div class="text-6xl lg:text-7xl font-light tracking-[-0.04em] text-[#111111]">
                        98<span class="text-[#E30613]">%</span>
                    </div>

                    <div class="mt-4 text-xs uppercase tracking-[0.2em] text-gray-500">
                        Kundenzufriedenheit
                    </div>
                </div>

                <div class="text-center lg:text-left lg:px-10 border-l border-gray-200">
                    <div class="text-6xl lg:text-7xl font-light tracking-[-0.04em] text-[#111111]">
                        4
                    </div>

                    <div class="mt-4 text-xs uppercase tracking-[0.2em] text-gray-500">
                        Standorte Schweiz
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════════
     FEATURED PROPERTIES
══════════════════════════════════════════════ --}}
    <section id="objekte" style="padding:5rem 2rem; background:#f7f7f7;">
        <div style="max-width:1280px; margin:0 auto;">

            <div style="display:flex; align-items:flex-end; justify-content:space-between; margin-bottom:2.5rem;"
                class="reveal">
                <div>
                    <div class="section-label">Aktuelle Immobilien</div>
                    <h2 style="font-size:2rem; font-weight:800; color:#1a1a1a; margin:.5rem 0 0;">Ausgewählte Objekte
                    </h2>
                </div>
                <a href="{{ route('properties.index') }}"
                    style="display:flex; align-items:center; gap:.5rem; text-decoration:none; font-size:.82rem; font-weight:600; color:#1a1a1a; border-bottom:2px solid #1a1a1a; padding-bottom:2px; transition:color .2s, border-color .2s;"
                    onmouseover="this.style.color='#FF0000';this.style.borderColor='#FF0000'"
                    onmouseout="this.style.color='#1a1a1a';this.style.borderColor='#1a1a1a'">
                    Alle ansehen
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(320px,1fr)); gap:1.5rem;">
                @php
                    $properties = [
                        [
                            'badge' => 'NEU',
                            'badge_bg' => '#1a1a1a',
                            'img' => 'https://images.unsplash.com/photo-1613977257363-707ba9348227?w=700&q=80',
                            'title' => 'Moderne Villa mit Seesicht',
                            'loc' => 'Küsnacht, Zürich',
                            'rooms' => 5,
                            'area' => 230,
                            'parking' => 2,
                            'price' => "CHF 2'850'000",
                        ],
                        [
                            'badge' => 'TOP',
                            'badge_bg' => '#FF0000',
                            'img' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=700&q=80',
                            'title' => 'Exklusive Wohnung im Zentrum',
                            'loc' => 'Zürich, Stadtzentrum',
                            'rooms' => 4,
                            'area' => 120,
                            'parking' => 1,
                            'price' => "CHF 1'250'000",
                        ],
                        [
                            'badge' => 'NEUBAU',
                            'badge_bg' => '#555',
                            'img' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=700&q=80',
                            'title' => 'Neubauwohnung mit Balkon',
                            'loc' => 'Altstetten, Zürich',
                            'rooms' => 3,
                            'area' => 90,
                            'parking' => 1,
                            'price' => 'Auf Anfrage',
                        ],
                        [
                            'badge' => 'EXKLUSIV',
                            'badge_bg' => '#FF0000',
                            'img' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=700&q=80',
                            'title' => 'Penthouse mit Panoramablick',
                            'loc' => 'Zug, Innercity',
                            'rooms' => 5,
                            'area' => 280,
                            'parking' => 2,
                            'price' => "CHF 4'200'000",
                        ],
                        [
                            'badge' => 'NEU',
                            'badge_bg' => '#1a1a1a',
                            'img' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=700&q=80',
                            'title' => 'Stadthaus im Grünen',
                            'loc' => 'Binningen, Basel',
                            'rooms' => 6,
                            'area' => 195,
                            'parking' => 2,
                            'price' => "CHF 1'890'000",
                        ],
                        [
                            'badge' => 'GEWERBE',
                            'badge_bg' => '#555',
                            'img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=700&q=80',
                            'title' => 'Bürofläche Toplage',
                            'loc' => 'Zürich, Flughafen',
                            'rooms' => '—',
                            'area' => 450,
                            'parking' => 8,
                            'price' => 'Auf Anfrage',
                        ],
                    ];
                @endphp

                @foreach ($properties as $p)
                    <div class="prop-card reveal">
                        <div style="position:relative; overflow:hidden;">
                            <img src="{{ $p['img'] }}" alt="{{ $p['title'] }}">
                            <span class="badge"
                                style="position:absolute; top:14px; left:14px; background:{{ $p['badge_bg'] }}; color:#fff;">{{ $p['badge'] }}</span>
                            <button class="heart-btn"
                                style="position:absolute; top:14px; right:14px; border:none; cursor:pointer;">
                                <svg width="16" height="16" fill="none" stroke="#666" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div style="padding:1.25rem 1.4rem;">
                            <h3
                                style="font-size:.98rem; font-weight:700; color:#1a1a1a; margin:0 0 .4rem; line-height:1.3;">
                                {{ $p['title'] }}</h3>
                            <div
                                style="display:flex; align-items:center; gap:.3rem; color:#8a8a8a; font-size:.78rem; margin-bottom:1rem;">
                                <svg width="13" height="13" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                                {{ $p['loc'] }}
                            </div>
                            <div
                                style="display:flex; gap:1.25rem; font-size:.77rem; color:#6b6b6b; margin-bottom:1.1rem; padding-bottom:1.1rem; border-bottom:1px solid #f0f0f0;">
                                <span style="display:flex; align-items:center; gap:.3rem;">
                                    <svg width="13" height="13" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    {{ $p['rooms'] }} Zi.
                                </span>
                                <span style="display:flex; align-items:center; gap:.3rem;">
                                    <svg width="13" height="13" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <rect x="3" y="3" width="18" height="18" rx="1"
                                            stroke-width="2" />
                                    </svg>
                                    {{ $p['area'] }} m²
                                </span>
                                <span style="display:flex; align-items:center; gap:.3rem;">
                                    <svg width="13" height="13" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h11a2 2 0 012 2v3m0 0h4l3 3v4a2 2 0 01-2 2h-2M7 21a2 2 0 100-4 2 2 0 000 4zm10 0a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                    {{ $p['parking'] }} P.
                                </span>
                            </div>
                            <div style="display:flex; align-items:center; justify-content:space-between;">
                                <span
                                    style="font-size:1rem; font-weight:800; color:#1a1a1a;">{{ $p['price'] }}</span>
                                <a href="#"
                                    style="display:flex; align-items:center; justify-content:center; width:34px; height:34px; background:#f2f2f2; text-decoration:none; transition:background .2s;"
                                    onmouseover="this.style.background='#FF0000'; this.querySelector('svg').style.stroke='#fff'"
                                    onmouseout="this.style.background='#f2f2f2'; this.querySelector('svg').style.stroke='#1a1a1a'">
                                    <svg width="15" height="15" fill="none" stroke="#1a1a1a"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════
     WHY VER — 4 reasons
══════════════════════════════════════════════ --}}
    <section style="padding:5rem 2rem; background:#fff;">
        <div style="max-width:1200px; margin:0 auto;">
            <div style="text-align:center; margin-bottom:3rem;" class="reveal">
                <div class="section-label" style="justify-content:center;">Warum VER</div>
                <h2 style="font-size:2rem; font-weight:800; margin:.5rem 0 .75rem;">Ihr Vorteil mit uns</h2>
                <p style="color:#8a8a8a; max-width:500px; margin:0 auto; font-size:.9rem; line-height:1.75;">
                    Wir verbinden lokales Know-how mit moderner Technologie, um Ihre Immobilienziele zu erreichen.
                </p>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(240px,1fr)); gap:1.25rem;">
                @php
                    $whys = [
                        [
                            'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                            'Diskrete Abwicklung',
                            'Ihre Privatsphäre steht für uns an erster Stelle — von der Bewertung bis zum Abschluss.',
                        ],
                        [
                            'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                            'Marktkenntnis',
                            'Fundiertes Wissen des Schweizer Immobilienmarkts mit Fokus auf Rendite und Markttrends.',
                        ],
                        [
                            'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                            'Persönliche Beratung',
                            'Individuelle Lösungen für jeden Kunden — kein Fall ist gleich, kein Service generisch.',
                        ],
                        [
                            'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',
                            'Rundum-Service',
                            'Von der Erstbesichtigung über Verhandlung bis zur Schlüsselübergabe — alles aus einer Hand.',
                        ],
                    ];
                @endphp
                @foreach ($whys as $w)
                    <div class="why-card reveal">
                        <div class="why-icon">
                            <svg fill="none" stroke="#FF0000" stroke-width="2" viewBox="0 0 24 24"
                                width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $w[0] }}" />
                            </svg>
                        </div>
                        <h4 style="font-size:.95rem; font-weight:700; margin:0 0 .5rem;">{{ $w[1] }}</h4>
                        <p style="font-size:.8rem; color:#8a8a8a; line-height:1.7; margin:0;">{{ $w[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════
     HOW IT WORKS — 4 steps
══════════════════════════════════════════════ --}}
    <section style="padding:5rem 2rem; background:#f7f7f7;">
        <div style="max-width:1100px; margin:0 auto;">
            <div style="text-align:center; margin-bottom:3.5rem;" class="reveal">
                <div class="section-label" style="justify-content:center;">Wie es funktioniert</div>
                <h2 style="font-size:2rem; font-weight:800; margin:.5rem 0;">So einfach geht's</h2>
            </div>

            <div
                style="display:grid; grid-template-columns:repeat(auto-fill,minmax(220px,1fr)); gap:2rem; position:relative;">
                @php
                    $steps = [
                        ['Beratungsgespräch', 'Kostenloses Erstgespräch — wir hören zu und verstehen Ihre Ziele.'],
                        ['Bewertung', 'Professionelle Marktanalyse und präzise Bewertung Ihrer Immobilie.'],
                        ['Vermarktung', 'Gezielte Vermarktung über alle relevanten Kanäle mit hochwertigen Exposés.'],
                        ['Übergabe', 'Sichere Vertragsabwicklung und persönliche Schlüsselübergabe.'],
                    ];
                @endphp
                @foreach ($steps as $i => $step)
                    <div class="reveal"
                        style="position:relative; padding:1.5rem; background:#fff; border-top:3px solid {{ $i === 0 ? '#FF0000' : '#e8e8e8' }};">
                        <div class="step-num">0{{ $i + 1 }}</div>
                        <div style="position:relative; z-index:1; padding-top:1.5rem;">
                            <div
                                style="width:36px; height:36px; background:{{ $i === 0 ? '#FF0000' : '#1a1a1a' }}; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:.85rem; margin-bottom:1rem; border-radius:4px;">
                                {{ $i + 1 }}</div>
                            <h4 style="font-size:.95rem; font-weight:700; margin:0 0 .5rem;">{{ $step[0] }}</h4>
                            <p style="font-size:.8rem; color:#8a8a8a; line-height:1.7; margin:0;">{{ $step[1] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════════════ --}}
    <section style="padding:5rem 2rem; background:#fff;">
        <div style="max-width:1100px; margin:0 auto;">
            <div style="text-align:center; margin-bottom:3rem;" class="reveal">
                <div class="section-label" style="justify-content:center;">Kundenstimmen</div>
                <h2 style="font-size:2rem; font-weight:800; margin:.5rem 0;">Was unsere Kunden sagen</h2>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(280px,1fr)); gap:1.5rem;">
                @php
                    $testimonials = [
                        [
                            'Sehr professionelle Beratung. Das Team von VER hat uns durch den gesamten Kauf begleitet und war immer erreichbar.',
                            'Thomas K.',
                            'Käufer, Zürich',
                            '★★★★★',
                        ],
                        [
                            'Verkauf unserer Wohnung in kürzester Zeit zum Bestpreis. Absolut empfehlenswert!',
                            'Sandra M.',
                            'Verkäuferin, Basel',
                            '★★★★★',
                        ],
                        [
                            'Diskret, kompetent und persönlich. So stellt man sich professionelle Immobilienberatung vor.',
                            'Beat R.',
                            'Investor, Zug',
                            '★★★★★',
                        ],
                    ];
                @endphp
                @foreach ($testimonials as $t)
                    <div class="testimonial-card reveal">
                        <div class="stars" style="margin-bottom:.75rem;">{{ $t[3] }}</div>
                        <p
                            style="font-size:.85rem; color:#444; line-height:1.75; margin:0 0 1.25rem; font-style:italic;">
                            "{{ $t[0] }}"</p>
                        <div
                            style="display:flex; align-items:center; gap:.75rem; padding-top:1rem; border-top:1px solid #f0f0f0;">
                            <div
                                style="width:38px; height:38px; border-radius:50%; background:#f2f2f2; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:.85rem; color:#FF0000;">
                                {{ substr($t[1], 0, 1) }}</div>
                            <div>
                                <div style="font-size:.83rem; font-weight:700;">{{ $t[1] }}</div>
                                <div style="font-size:.72rem; color:#8a8a8a;">{{ $t[2] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════
     CTA BANNER
══════════════════════════════════════════════ --}}
    <section id="kontakt" class="cta-banner" style="padding:5rem 2rem;">
        <div style="max-width:900px; margin:0 auto; text-align:center; position:relative; z-index:1;" class="reveal">
            <div
                style="font-size:.72rem; font-weight:700; letter-spacing:.15em; text-transform:uppercase; color:rgba(255,255,255,.65); margin-bottom:1rem;">
                Jetzt starten</div>
            <h2 style="font-size:2.4rem; font-weight:900; color:#fff; margin:0 0 1rem; line-height:1.15;">
                Ihre Immobilie in besten Händen.
            </h2>
            <p
                style="font-size:.95rem; color:rgba(255,255,255,.8); max-width:480px; margin:0 auto 2.5rem; line-height:1.75;">
                Lassen Sie Ihre Immobilie kostenlos bewerten oder kontaktieren Sie uns für ein unverbindliches
                Erstgespräch.
            </p>
            <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:1rem;">
                <a href="#"
                    style="display:inline-flex; align-items:center; gap:.6rem; background:#fff; color:#FF0000; font-size:.85rem; font-weight:800; letter-spacing:.04em; text-transform:uppercase; padding:.9rem 2rem; text-decoration:none; transition:transform .2s;"
                    onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='none'">
                    Kostenlose Bewertung
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="tel:+41441234567"
                    style="display:inline-flex; align-items:center; gap:.6rem; border:2px solid rgba(255,255,255,.5); color:#fff; font-size:.85rem; font-weight:600; letter-spacing:.04em; text-transform:uppercase; padding:.9rem 2rem; text-decoration:none; transition:all .2s;"
                    onmouseover="this.style.borderColor='#fff'"
                    onmouseout="this.style.borderColor='rgba(255,255,255,.5)'">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    +41 44 123 45 67
                </a>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════
     FOOTER
══════════════════════════════════════════════ --}}
    <footer style="background:#111; padding:4rem 2rem 2rem;">
        <div style="max-width:1200px; margin:0 auto;">
            <div style="display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:3rem; margin-bottom:3rem;"
                class="footer-grid">

                {{-- Brand --}}
                <div>
                    <div style="display:flex; align-items:center; gap:.65rem; margin-bottom:1.25rem;">
                        <svg width="36" height="36" viewBox="0 0 38 38" fill="none">
                            <rect width="38" height="38" rx="4" fill="#FF0000" />
                            <path d="M10 26V16l9-8 9 8v10H23v-6h-8v6H10z" fill="white" />
                        </svg>
                        <div>
                            <div style="font-size:.78rem; font-weight:800; letter-spacing:.1em; color:#fff;">VER
                                IMMOBILIEN</div>
                            <div style="font-size:.58rem; color:rgba(255,255,255,.4); letter-spacing:.15em;">AG ·
                                SCHWEIZ</div>
                        </div>
                    </div>
                    <p style="font-size:.8rem; color:#6b7280; line-height:1.75; max-width:260px;">
                        Ihr Partner für Kauf, Verkauf, Vermietung und Verwaltung von Immobilien in der Schweiz.
                    </p>
                    <div style="display:flex; gap:.75rem; margin-top:1.25rem;">
                        @foreach ([
        'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z',
        'M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z',
        'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z',
    ] as $icon)
                            <a href="#"
                                style="display:flex; align-items:center; justify-content:center; width:34px; height:34px; background:rgba(255,255,255,.06); border-radius:50%; transition:background .2s;"
                                onmouseover="this.style.background='#FF0000'"
                                onmouseout="this.style.background='rgba(255,255,255,.06)'">
                                <svg width="16" height="16" fill="rgba(255,255,255,.6)" viewBox="0 0 24 24">
                                    <path d="{{ $icon }}" />
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Links --}}
                @foreach ([['Leistungen', ['Kaufen', 'Verkaufen', 'Vermieten', 'Verwaltung', 'Bewertung']], ['Unternehmen', ['Über uns', 'Team', 'Karriere', 'News', 'Kontakt']], ['Rechtliches', ['Impressum', 'Datenschutz', 'AGB', 'Cookie-Richtlinie']]] as $col)
                    <div>
                        <h5
                            style="font-size:.75rem; font-weight:700; letter-spacing:.1em; text-transform:uppercase; color:#fff; margin:0 0 1.25rem;">
                            {{ $col[0] }}</h5>
                        <ul
                            style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:.6rem;">
                            @foreach ($col[1] as $link)
                                <li><a href="#" class="footer-link">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            <div
                style="border-top:1px solid rgba(255,255,255,.07); padding-top:2rem; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:center; gap:1rem;">
                <p style="font-size:.75rem; color:#4b5563; margin:0;">© {{ date('Y') }} VER Immobilien AG. Alle
                    Rechte vorbehalten.</p>
                <p style="font-size:.75rem; color:#4b5563; margin:0;">Mitglied der Schweizer Maklerkammer · SVIT</p>
            </div>
        </div>
    </footer>

    <style>
        @keyframes pulse {

            0%,
            100% {
                opacity: 1
            }

            50% {
                opacity: .4
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateX(-50%) translateY(0)
            }

            50% {
                transform: translateX(-50%) translateY(6px)
            }
        }

        @media(max-width:768px) {
            .hidden-mobile {
                display: none !important;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr !important;
            }
        }
    </style>

    <script>
        // Navbar scroll effect
        const nav = document.getElementById('navbar');
        const logoText = document.getElementById('logo-text');
        const logoSub = document.getElementById('logo-sub');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                nav.classList.add('scrolled');
                logoText.style.color = '#1a1a1a';
                logoSub.style.color = '#8a8a8a';
            } else {
                nav.classList.remove('scrolled');
                logoText.style.color = '#fff';
                logoSub.style.color = 'rgba(255,255,255,.7)';
            }
        });

        // Search tabs
        function setTab(el) {
            document.querySelectorAll('.search-tab').forEach(t => {
                t.classList.remove('active');
                t.style.color = '#8a8a8a';
            });
            el.classList.add('active');
            el.style.color = '#FF0000';
        }

        // Price slider
        function updatePrice(val) {
            const n = parseInt(val);
            const fmt = new Intl.NumberFormat('de-CH').format(n);
            document.getElementById('priceDisplay').textContent = 'CHF ' + fmt + (n >= 5000000 ? '+' : '');
            const pct = (n / 5000000) * 100;
            document.getElementById('priceSlider').style.background =
                `linear-gradient(to right, #FF0000 0%, #FF0000 ${pct}%, #e0e0e0 ${pct}%)`;
        }

        // Scroll reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((e, i) => {
                if (e.isIntersecting) {
                    setTimeout(() => e.target.classList.add('visible'), i * 80);
                }
            });
        }, {
            threshold: 0.12
        });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>

</html>
