<footer class="footer">
    <div class="container">

        <div class="footer-grid">

            <div>
                <div class="footer-logo">

                    <a href="/" class="logo">
                        <img src="{{ asset('img/logo.png') }}" alt="Ver Immobilien AG" class="logo-image">
                    </a>
                </div>

                <p class="footer-desc">
                    Ihr Partner für Kauf, Verkauf, Vermietung und Verwaltung von Immobilien in der Schweiz.
                </p>
            </div>

            @foreach ([['Leistungen', ['Kaufen', 'Verkaufen', 'Vermieten', 'Verwaltung', 'Bewertung']], ['Unternehmen', ['Über uns', 'Team', 'Karriere', 'News', 'Kontakt']], ['Rechtliches', ['Impressum', 'Datenschutz', 'AGB', 'Cookie-Richtlinie']]] as $col)
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
