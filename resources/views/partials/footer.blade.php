<footer class="footer">
    <div class="container">

        <div class="footer-grid">

            <!-- Company -->
            <div class="footer-company">
                <div class="footer-logo">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('img/logo.png') }}" alt="VER Immobilien AG" class="logo-image">
                    </a>
                </div>

                <p class="footer-desc">
                    Die VER Immobilien AG begleitet Sie professionell beim Kauf,
                    Verkauf, bei der Vermietung und Verwaltung von Immobilien.
                </p>

                <a href="tel:+41441234567" class="footer-phone">
                    +41 79 887 80 80
                </a>
            </div>

            <!-- Navigation -->
            <div>
                <h5 class="footer-title">Navigation</h5>

                <ul class="footer-list">
                    <li>
                        <a href="{{ url('/') }}#immobilien" class="footer-link">
                            Immobilien
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}#immobilie_einreichen" class="footer-link">
                            Immobilie einreichen
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}#warum-ver" class="footer-link">
                            Warum VER
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}#prozess" class="footer-link">
                            Unser Prozess
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}#kontakt" class="footer-link">
                            Kontakt
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h5 class="footer-title">Leistungen</h5>

                <ul class="footer-list">
                    <li>
                        <a href="{{ url('/') }}#immobilien" class="footer-link">
                            Immobilien kaufen
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}#immobilie_einreichen" class="footer-link">
                            Immobilie verkaufen
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}#immobilie_einreichen" class="footer-link">
                            Immobilie vermieten
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}#kontakt" class="footer-link">
                            Immobilienverwaltung
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h5 class="footer-title">Rechtliches</h5>

                <ul class="footer-list">
                    <li>
                        <a href="{{ route('impressum') }}" class="footer-link">
                            Impressum
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('datenschutz') }}" class="footer-link">
                            Datenschutz
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                © {{ date('Y') }} VER Immobilien AG. Alle Rechte vorbehalten.
            </p>

            <div class="footer-bottom-links">
                <a href="{{ route('impressum') }}">Impressum</a>
                <span>·</span>
                <a href="{{ route('datenschutz') }}">Datenschutz</a>
            </div>
        </div>

    </div>
</footer>
