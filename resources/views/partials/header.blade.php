<header class="navbar" id="navbar">
    <div class="container">
        <div class="nav-inner">

            <a href="/" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Ver Immobilien AG" class="logo-image">
            </a>

            <nav class="nav-links hidden-mobile">
                @foreach (['Immobilien', 'Dienstleistungen', 'Warum VER', 'Prozess', 'Kontakt'] as $link)
                    <a href="#" class="nav-link">{{ $link }}</a>
                @endforeach
            </nav>

            <a href="#immobilie_einreichen" class="nav-cta">
                Immobilie einreichen
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>

        </div>
    </div>
</header>
