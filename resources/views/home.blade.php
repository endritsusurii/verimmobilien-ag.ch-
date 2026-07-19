@extends('layouts.app')

@section('title', 'VER Immobilien AG — Immobilien. Werte. Vertrauen.')

@push('styles')
    <style>
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

        /* Footer */

        .footer {
            background: var(--brand-black);
            padding: 4rem 2rem 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: .65rem;
            margin-bottom: 1.25rem;
        }

        .footer-logo-title {
            font-size: .78rem;
            font-weight: 800;
            letter-spacing: .1em;
            color: var(--brand-white);
        }

        .footer-logo-sub {
            font-size: .58rem;
            color: var(--brand-gray-dark);
            letter-spacing: .15em;
        }

        .footer-desc {
            font-size: .8rem;
            color: var(--brand-gray-dark);
            line-height: 1.75;
            max-width: 260px;
        }

        .footer-title {
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--brand-white);
            margin: 0 0 1.25rem;
        }

        .footer-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: .6rem;
        }

        .footer-link {
            color: var(--brand-gray-dark);
            font-size: .82rem;
            text-decoration: none;
            transition: color .2s;
        }

        .footer-link:hover {
            color: var(--brand-red);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .08);
            padding-top: 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1rem;
        }

        .footer-bottom p {
            font-size: .75rem;
            color: var(--brand-gray-dark);
            margin: 0;
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

@section('content')

    <section class="hero">
        <div class="hero-img"></div>
        <div class="hero-overlay"></div>
        <div class="hero-strip"></div>

        <div class="hero-content">
            <div class="container">
                <div style="max-width:640px;">
                    <h1
                        style="font-size:clamp(2.6rem,5vw,4.2rem); font-weight:900; line-height:1.08; color:white; margin:0 0 1.25rem;">
                        Immobilien.<br>
                        Werte.<br>
                        <span style="color:var(--brand-red);">Vertrauen.</span>
                    </h1>

                    <p
                        style="font-size:.95rem; font-weight:300; color:rgba(255,255,255,.78); line-height:1.75; max-width:440px; margin:0 0 2rem;">
                        Die Ver Immobilien AG befasst sich mit dem Kauf, Verkauf, der Verwaltung und Vermietung von
                        Immobilien und bietet professionelle Dienstleistungen im Bereich Immobilien an.
                    </p>

                    <div style="display:flex; flex-wrap:wrap; gap:.75rem;">
                        <a href="#objekte" class="btn-red">Objekte ansehen</a>

                        <a href="#kontakt"
                            style="border:2px solid rgba(255,255,255,.5); color:white; padding:.85rem 1.75rem; text-decoration:none; font-weight:600; text-transform:uppercase;">
                            Kontakt aufnehmen
                        </a>
                    </div>

                    <div
                        style="display:flex; align-items:center; gap:1.5rem; margin-top:2.5rem; padding-top:2rem; border-top:1px solid rgba(255,255,255,.12);">
                        @foreach ([['500+', 'Objekte vermittelt'], ['98%', 'Kundenzufriedenheit'], ['15+', 'Jahre Erfahrung']] as $trust)
                            <div>
                                <div style="font-size:1.3rem; font-weight:800; color:var(--brand-red);">{{ $trust[0] }}
                                </div>
                                <div style="font-size:.7rem; color:rgba(255,255,255,.6);">{{ $trust[1] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background:#f7f7f7; padding-bottom:3.5rem;">
        <div class="container">
            <div class="search-card">

                <div style="display:flex; border-bottom:1px solid var(--brand-gray-light); padding:0 1rem;">
                    @foreach (['Kaufen', 'Verkaufen', 'Vermieten'] as $tab)
                        <button class="search-tab {{ $loop->first ? 'active' : '' }}">{{ $tab }}</button>
                    @endforeach
                </div>

                <div style="display:flex; flex-wrap:wrap;">
                    <div class="field-wrap" style="flex:2; min-width:200px;">
                        <label>Suchbegriff</label>
                        <input type="text" placeholder="z.B. Zürich, Haus, 4.5 Zi.">
                    </div>

                    <div class="field-wrap">
                        <label>Kategorie</label>
                        <select>
                            <option>Alle Typen</option>
                            <option>Haus</option>
                            <option>Wohnung</option>
                            <option>Villa</option>
                        </select>
                    </div>

                    <div class="field-wrap">
                        <label>Zimmer</label>
                        <select>
                            <option>Beliebig</option>
                            <option>1+</option>
                            <option>2+</option>
                            <option>3+</option>
                            <option>4+</option>
                        </select>
                    </div>

                    <div class="field-wrap">
                        <label>Kanton</label>
                        <select>
                            <option>Beliebig</option>
                            <option>Zürich</option>
                            <option>Bern</option>
                            <option>Basel</option>
                            <option>Zug</option>
                        </select>
                    </div>

                    <div style="padding:.75rem 1.25rem; display:flex; align-items:center;">
                        <button class="btn-red" style="border:none; cursor:pointer;">Suchen</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="objekte" style="padding:5rem 2rem; background:#f7f7f7;">
        <div class="container">

            <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:2.5rem;">
                <div>
                    <div class="section-label">Aktuelle Immobilien</div>
                    <h2 style="font-size:2rem; font-weight:800; margin:.5rem 0 0;">
                        Ausgewählte Objekte
                    </h2>
                </div>

                <a href="#" style="color:var(--brand-black); font-weight:600; text-decoration:none;">
                    Alle ansehen →
                </a>
            </div>

            @php
                $properties = [
                    [
                        'badge' => 'NEU',
                        'img' => 'https://images.unsplash.com/photo-1613977257363-707ba9348227?w=700&q=80',
                        'title' => 'Moderne Villa mit Seesicht',
                        'loc' => 'Küsnacht, Zürich',
                        'rooms' => 5,
                        'area' => 230,
                        'price' => "CHF 2'850'000",
                    ],
                    [
                        'badge' => 'TOP',
                        'img' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=700&q=80',
                        'title' => 'Exklusive Wohnung im Zentrum',
                        'loc' => 'Zürich, Stadtzentrum',
                        'rooms' => 4,
                        'area' => 120,
                        'price' => "CHF 1'250'000",
                    ],
                    [
                        'badge' => 'NEUBAU',
                        'img' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=700&q=80',
                        'title' => 'Neubauwohnung mit Balkon',
                        'loc' => 'Altstetten, Zürich',
                        'rooms' => 3,
                        'area' => 90,
                        'price' => 'Auf Anfrage',
                    ],
                ];
            @endphp

            <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:1.5rem;">
                @foreach ($properties as $p)
                    <div class="prop-card">
                        <div style="position:relative;">
                            <img src="{{ $p['img'] }}" alt="{{ $p['title'] }}">
                            <span
                                style="position:absolute; top:14px; left:14px; background:var(--brand-red); color:white; padding:.3rem .75rem; font-size:.65rem; font-weight:700;">
                                {{ $p['badge'] }}
                            </span>
                        </div>

                        <div style="padding:1.25rem;">
                            <h3 style="font-size:1rem; font-weight:700; margin:0 0 .4rem;">
                                {{ $p['title'] }}
                            </h3>

                            <p style="color:var(--brand-gray-dark); font-size:.8rem; margin:0 0 1rem;">
                                {{ $p['loc'] }}
                            </p>

                            <div
                                style="display:flex; gap:1rem; color:#666; font-size:.78rem; padding-bottom:1rem; border-bottom:1px solid var(--brand-gray-light);">
                                <span>{{ $p['rooms'] }} Zi.</span>
                                <span>{{ $p['area'] }} m²</span>
                            </div>

                            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:1rem;">
                                <strong>{{ $p['price'] }}</strong>
                                <a href="#"
                                    style="color:var(--brand-red); text-decoration:none; font-weight:700;">→</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section id="immobilie_einreichen" class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">

            <div class="rounded-3xl overflow-hidden bg-[#262525] text-white relative">

                <div class="absolute inset-0 bg-gradient-to-r from-[#262525] via-[#262525]/95 to-[#ED1C24]/90"></div>

                <div class="relative z-10 px-10 py-16 lg:flex lg:items-center lg:justify-between">

                    <div class="max-w-3xl">

                        <span class="inline-flex rounded-full bg-white/10 px-4 py-2 text-sm font-semibold">
                            VER Immobilien AG
                        </span>

                        <h2 class="mt-6 text-4xl font-bold leading-tight">
                            Möchten Sie Ihre Immobilie verkaufen oder vermieten?
                        </h2>

                        <p class="mt-5 text-lg text-gray-200 leading-8">
                            Lassen Sie Ihre Immobilie kostenlos bewerten und
                            erhalten Sie eine professionelle Beratung.
                            Unser Team begleitet Sie vom ersten Kontakt bis
                            zum erfolgreichen Verkauf oder zur Vermietung.
                        </p>

                    </div>

                    <div class="mt-10 lg:mt-0">

                        <button onclick="openPropertyModal()"
                            class="bg-[#ED1C24] hover:bg-red-700 transition px-8 py-4 rounded-xl font-semibold text-white shadow-xl">

                            Immobilie einreichen

                        </button>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Property Modal -->
    <div id="propertyModal" class="fixed inset-0 z-50 hidden bg-black/60 p-4 backdrop-blur-sm">
        <div class="flex min-h-full items-center justify-center">

            <div class="flex max-h-[80vh] w-full max-w-5xl flex-col overflow-hidden rounded-3xl bg-white shadow-2xl">

                <!-- Header -->
                <div class="flex shrink-0 items-start justify-between border-b border-gray-200 bg-white px-6 py-5 md:px-8">
                    <div class="pr-6">
                        <span class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-[#ED1C24]">
                            VER Immobilien AG
                        </span>

                        <h2 class="mt-3 text-2xl font-bold text-[#262525] md:text-3xl">
                            Immobilie einreichen
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-gray-500 md:text-base">
                            Füllen Sie das Formular aus. Wir werden Sie schnellstmöglich kontaktieren.
                        </p>
                    </div>

                    <button type="button" onclick="closePropertyModal()" aria-label="Modal schliessen"
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full text-[#262525] transition hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Scrollable content -->
                <form id="propertyForm" class="flex min-h-0 flex-1 flex-col">

                    <div class="flex-1 overflow-y-auto px-6 py-6 md:px-8">

                        <div class="grid gap-6 md:grid-cols-2">

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Vorname
                                </label>

                                <input type="text" name="first_name" required
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Nachname
                                </label>

                                <input type="text" name="last_name" required
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    E-Mail
                                </label>

                                <input type="email" name="email" required
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Telefon
                                </label>

                                <input type="tel" name="phone"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Immobilientyp
                                </label>

                                <select name="property_type"
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                                    <option value="">Bitte auswählen</option>
                                    <option value="wohnung">Wohnung</option>
                                    <option value="haus">Haus</option>
                                    <option value="grundstueck">Grundstück</option>
                                    <option value="gewerbe">Gewerbe</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Angebot
                                </label>

                                <select name="offer_type"
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                                    <option value="">Bitte auswählen</option>
                                    <option value="verkaufen">Verkaufen</option>
                                    <option value="vermieten">Vermieten</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Kanton
                                </label>

                                <input type="text" name="canton"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Ort
                                </label>

                                <input type="text" name="city"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Adresse
                                </label>

                                <input type="text" name="address"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Wohnfläche (m²)
                                </label>

                                <input type="number" name="area" min="0"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Zimmer
                                </label>

                                <input type="number" name="rooms" min="0" step="0.5"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Wunschpreis (CHF)
                                </label>

                                <input type="number" name="expected_price" min="0"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20">
                            </div>

                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Beschreibung
                                </label>

                                <textarea name="description" rows="5"
                                    class="w-full resize-none rounded-xl border border-gray-300 px-4 py-3 outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-[#ED1C24]/20"></textarea>
                            </div>

                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-medium text-gray-700">
                                    Bilder hochladen
                                </label>

                                <input type="file" name="images[]" multiple accept="image/*"
                                    class="block w-full rounded-xl border border-dashed border-gray-300 bg-gray-50 p-4 text-sm text-gray-600 file:mr-4 file:rounded-lg file:border-0 file:bg-[#262525] file:px-4 file:py-2 file:font-medium file:text-white hover:file:bg-black">
                            </div>

                            <div class="md:col-span-2">
                                <label class="flex items-start gap-3">
                                    <input type="checkbox" name="privacy" required
                                        class="mt-1 h-4 w-4 rounded border-gray-300 text-[#ED1C24] focus:ring-[#ED1C24]">

                                    <span class="text-sm leading-6 text-gray-600">
                                        Ich akzeptiere die Datenschutzerklärung.
                                    </span>
                                </label>
                            </div>

                        </div>

                    </div>

                    <!-- Fixed footer -->
                    <div
                        class="flex shrink-0 flex-col-reverse gap-3 border-t border-gray-200 bg-white px-6 py-5 sm:flex-row sm:justify-end md:px-8">
                        <button type="button" onclick="closePropertyModal()"
                            class="rounded-xl border border-gray-300 px-6 py-3 font-medium text-[#262525] transition hover:bg-gray-100">
                            Abbrechen
                        </button>

                        <button type="submit"
                            class="rounded-xl bg-[#ED1C24] px-8 py-3 font-semibold text-white transition hover:bg-red-700">
                            Anfrage senden
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>


    <section style="padding:5rem 2rem; background:white;">
        <div class="container">
            <div style="text-align:center; margin-bottom:3rem;">
                <div class="section-label">Warum VER</div>
                <h2 style="font-size:2rem; font-weight:800;">Ihr Vorteil mit uns</h2>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1.25rem;">
                @foreach ([['Diskrete Abwicklung', 'Ihre Privatsphäre steht für uns an erster Stelle.'], ['Marktkenntnis', 'Fundiertes Wissen des Schweizer Immobilienmarkts.'], ['Persönliche Beratung', 'Individuelle Lösungen für jeden Kunden.'], ['Rundum-Service', 'Von der Besichtigung bis zur Schlüsselübergabe.']] as $item)
                    <div class="why-card" style="padding:2rem; border-bottom:3px solid var(--brand-red);">
                        <h4>{{ $item[0] }}</h4>
                        <p style="color:var(--brand-gray-dark); font-size:.85rem; line-height:1.7;">
                            {{ $item[1] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section style="padding:7rem 2rem;background:#f8f8f8;overflow:hidden;">

        <div class="container">

            <div style="max-width:760px;margin:0 auto 4rem;text-align:center;">

                <div class="section-label">
                    Unser Prozess
                </div>

                <h2 style="font-size:2.6rem;font-weight:900;color:#262525;margin-bottom:1rem;">
                    So einfach verkaufen Sie Ihre Immobilie
                </h2>

                <p style="color:#777;line-height:1.8;font-size:1rem;">
                    Von der ersten Kontaktaufnahme bis zur erfolgreichen Übergabe begleiten wir Sie
                    persönlich und professionell in jeder Phase.
                </p>

            </div>

            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:2rem;position:relative;">

                @foreach ([
            [
                'title' => 'Erstgespräch',
                'text' => 'In einem unverbindlichen Gespräch lernen wir Ihre Immobilie und Ihre Wünsche kennen.',
            ],
            [
                'title' => 'Bewertung & Strategie',
                'text' => 'Wir analysieren den Markt und entwickeln die optimale Verkaufsstrategie.',
            ],
            [
                'title' => 'Professionelle Vermarktung',
                'text' => 'Ihre Immobilie wird hochwertig präsentiert und gezielt potenziellen Käufern angeboten.',
            ],
            [
                'title' => 'Verkauf & Übergabe',
                'text' => 'Wir begleiten Sie bis zum Vertragsabschluss und einer sicheren Übergabe.',
            ],
        ] as $index => $step)
                    <div style="
                    background:#fff;
                    border-radius:28px;
                    padding:2.5rem;
                    position:relative;
                    transition:.35s;
                    box-shadow:0 15px 45px rgba(0,0,0,.06);
                    border:1px solid #ececec;
                "
                        onmouseover="this.style.transform='translateY(-8px)'"
                        onmouseout="this.style.transform='translateY(0)'">

                        <div
                            style="
                        width:64px;
                        height:64px;
                        border-radius:50%;
                        background:#ED1C24;
                        color:white;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        font-size:1.4rem;
                        font-weight:800;
                        margin-bottom:2rem;
                        box-shadow:0 10px 30px rgba(237,28,36,.35);
                    ">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        <h3
                            style="
                        font-size:1.35rem;
                        font-weight:800;
                        color:#262525;
                        margin-bottom:1rem;
                    ">
                            {{ $step['title'] }}
                        </h3>

                        <p
                            style="
                        color:#777;
                        line-height:1.8;
                        font-size:.96rem;
                    ">
                            {{ $step['text'] }}
                        </p>

                        <div
                            style="
                        position:absolute;
                        right:25px;
                        bottom:25px;
                        font-size:4rem;
                        font-weight:900;
                        color:#f2f2f2;
                        user-select:none;
                    ">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

    <section style="padding:5rem 2rem; background:white;">
        <div class="container">
            <div style="text-align:center; margin-bottom:3rem;">
                <div class="section-label">Kundenstimmen</div>
                <h2 style="font-size:2rem; font-weight:800;">Was unsere Kunden sagen</h2>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:1.5rem;">
                @foreach ([['Sehr professionelle Beratung.', 'Thomas K.', 'Käufer, Zürich'], ['Verkauf unserer Wohnung zum Bestpreis.', 'Sandra M.', 'Verkäuferin, Basel'], ['Diskret, kompetent und persönlich.', 'Beat R.', 'Investor, Zug']] as $t)
                    <div class="testimonial-card" style="padding:2rem; box-shadow:0 8px 32px rgba(0,0,0,.06);">
                        <div style="color:var(--brand-red); margin-bottom:.75rem;">★★★★★</div>
                        <p style="font-style:italic; color:#444;">"{{ $t[0] }}"</p>
                        <strong>{{ $t[1] }}</strong>
                        <div style="color:var(--brand-gray-dark); font-size:.8rem;">{{ $t[2] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="kontakt" class="cta-banner">
        <div style="max-width:900px; margin:0 auto; text-align:center;">

            <div
                style="font-size:.72rem; font-weight:700; letter-spacing:.15em; text-transform:uppercase; color:rgba(255,255,255,.7); margin-bottom:1rem;">
                Jetzt Kontakt aufnehmen
            </div>

            <h2 style="font-size:2.4rem; font-weight:900; color:white; margin:0 0 1rem;">
                Ihre Immobilie verdient die beste Betreuung.
            </h2>

            <p
                style="font-size:.95rem; color:rgba(255,255,255,.85); max-width:580px; margin:0 auto 2.5rem; line-height:1.75;">
                Unser erfahrenes Team steht Ihnen für alle Fragen rund um Verkauf, Vermietung
                und Immobilienverwaltung gerne persönlich zur Verfügung. Kontaktieren Sie uns
                für eine unverbindliche Beratung.
            </p>

            <div style="display:flex; justify-content:center;">
                <a href="tel:+41441234567"
                    style="border:2px solid rgba(255,255,255,.55); color:white; padding:.95rem 2.2rem; text-decoration:none; font-weight:700; text-transform:uppercase; transition:.3s;">
                    +41 44 123 45 67
                </a>
            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.search-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        function openPropertyModal() {
            const modal = document.getElementById('propertyModal');

            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closePropertyModal() {
            const modal = document.getElementById('propertyModal');

            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    </script>
@endpush
