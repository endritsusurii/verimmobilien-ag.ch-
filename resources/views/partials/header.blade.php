<header class="navbar" id="navbar">
    <div class="container">
        <div class="nav-inner">

            <a href="/" class="logo">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none">
                    <rect width="38" height="38" rx="4" fill="var(--brand-red)" />
                    <path d="M10 26V16l9-8 9 8v10H23v-6h-8v6H10z" fill="white"/>
                </svg>

                <div>
                    <div class="logo-text" id="logo-text">VER IMMOBILIEN</div>
                    <div class="logo-sub" id="logo-sub">AG · SCHWEIZ</div>
                </div>
            </a>

            <nav class="nav-links hidden-mobile">
                @foreach (['Kaufen', 'Verkaufen', 'Vermieten', 'Verwaltung', 'Über uns', 'Kontakt'] as $link)
                    <a href="#" class="nav-link">{{ $link }}</a>
                @endforeach
            </nav>

            <a href="#" class="nav-cta">
                Immobilie bewerten
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>

        </div>
    </div>
</header>