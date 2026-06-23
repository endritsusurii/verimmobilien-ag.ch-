<footer class="footer">
    <div class="container">

        <div class="footer-grid">

            <div>
                <div class="footer-logo">
                    <svg width="36" height="36" viewBox="0 0 38 38" fill="none">
                        <rect width="38" height="38" rx="4" fill="var(--brand-red)" />
                        <path d="M10 26V16l9-8 9 8v10H23v-6h-8v6H10z" fill="white" />
                    </svg>

                    <div>
                        <div class="footer-logo-title">VER IMMOBILIEN</div>
                        <div class="footer-logo-sub">AG · SCHWEIZ</div>
                    </div>
                </div>

                <p class="footer-desc">
                    Ihr Partner für Kauf, Verkauf, Vermietung und Verwaltung von Immobilien in der Schweiz.
                </p>
            </div>

            @foreach ([
                ['Leistungen', ['Kaufen', 'Verkaufen', 'Vermieten', 'Verwaltung', 'Bewertung']],
                ['Unternehmen', ['Über uns', 'Team', 'Karriere', 'News', 'Kontakt']],
                ['Rechtliches', ['Impressum', 'Datenschutz', 'AGB', 'Cookie-Richtlinie']]
            ] as $col)
                <div>
                    <h5 class="footer-title">{{ $col[0] }}</h5>

                    <ul class="footer-list">
                        @foreach ($col[1] as $link)
                            <li>
                                <a href="#" class="footer-link">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

        </div>

        <div class="footer-bottom">
            <p>© {{ date('Y') }} VER Immobilien AG. Alle Rechte vorbehalten.</p>
            <p>Mitglied der Schweizer Maklerkammer · SVIT</p>
        </div>

    </div>
</footer>