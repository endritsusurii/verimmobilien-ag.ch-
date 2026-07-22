<header class="navbar" id="navbar">
    <div class="container">

        <div class="nav-inner">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="logo" aria-label="VER Immobilien AG">
                <img
                    src="{{ asset('img/logo.png') }}"
                    alt="VER Immobilien AG"
                    class="logo-image"
                >
            </a>

            {{-- Desktop Navigation --}}
            <nav class="nav-links hidden-mobile" aria-label="Hauptnavigation">
                @foreach ([
                    ['title' => 'Immobilien', 'href' => '#immobilien'],
                    ['title' => 'Warum VER', 'href' => '#warum-ver'],
                    ['title' => 'Prozess', 'href' => '#prozess'],
                    ['title' => 'Kontakt', 'href' => '#kontakt'],
                ] as $link)
                    <a href="{{ $link['href'] }}" class="nav-link">
                        {{ $link['title'] }}
                    </a>
                @endforeach
            </nav>

            {{-- Desktop CTA --}}
            <a href="#immobilie_einreichen" class="nav-cta hidden-mobile">
                <span>Immobilie einreichen</span>

                <svg
                    width="16"
                    height="16"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        d="M17 8l4 4m0 0l-4 4m4-4H3"
                    />
                </svg>
            </a>

            {{-- Mobile Hamburger --}}
            <button
                type="button"
                class="mobile-menu-btn"
                id="mobileMenuButton"
                aria-label="Menü öffnen"
                aria-controls="mobileMenu"
                aria-expanded="false"
            >
                <span class="hamburger-line hamburger-line-top"></span>
                <span class="hamburger-line hamburger-line-bottom"></span>
            </button>

        </div>

        {{-- Mobile Menu --}}
        <nav
            class="mobile-menu"
            id="mobileMenu"
            aria-label="Mobile Navigation"
        >
            <div class="mobile-menu-inner">

                @foreach ([
                    ['title' => 'Immobilien', 'href' => '#immobilien'],
                    ['title' => 'Warum VER', 'href' => '#warum-ver'],
                    ['title' => 'Prozess', 'href' => '#prozess'],
                    ['title' => 'Kontakt', 'href' => '#kontakt'],
                ] as $index => $link)
                    <a href="{{ $link['href'] }}" class="mobile-menu-link">
                        <span class="mobile-link-number">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        <span>{{ $link['title'] }}</span>

                        <svg
                            width="18"
                            height="18"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />
                        </svg>
                    </a>
                @endforeach

                <a href="#immobilie_einreichen" class="mobile-menu-cta">
                    <span>Immobilie einreichen</span>

                    <svg
                        width="18"
                        height="18"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"
                        />
                    </svg>
                </a>

            </div>
        </nav>

    </div>
</header>