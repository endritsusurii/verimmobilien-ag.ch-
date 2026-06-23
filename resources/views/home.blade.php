@extends('layouts.app')

@section('title', 'VER Immobilien AG — Immobilien. Werte. Vertrauen.')

@push('styles')
<style>
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
        rgba(38,37,37,.88) 0%,
        rgba(237,28,36,.45) 52%,
        rgba(38,37,37,.2) 100%);
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
    box-shadow: 0 20px 60px rgba(0,0,0,.14);
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
    box-shadow: 0 24px 48px rgba(0,0,0,.13);
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
                <div style="display:inline-flex; align-items:center; gap:.5rem; background:rgba(237,28,36,.15); border:1px solid rgba(237,28,36,.35); padding:.35rem .9rem; margin-bottom:1.5rem;">
                    <span style="width:6px; height:6px; border-radius:50%; background:var(--brand-red);"></span>
                    <span style="font-size:.72rem; font-weight:600; letter-spacing:.12em; text-transform:uppercase; color:white;">
                        VER Immobilien AG · Schweiz
                    </span>
                </div>

                <h1 style="font-size:clamp(2.6rem,5vw,4.2rem); font-weight:900; line-height:1.08; color:white; margin:0 0 1.25rem;">
                    Immobilien.<br>
                    Werte.<br>
                    <span style="color:var(--brand-red);">Vertrauen.</span>
                </h1>

                <p style="font-size:.95rem; font-weight:300; color:rgba(255,255,255,.78); line-height:1.75; max-width:440px; margin:0 0 2rem;">
                    Ihr professioneller Partner für Kauf, Verkauf, Vermietung und Verwaltung von Immobilien in der Schweiz — mit Erfahrung, die zählt.
                </p>

                <div style="display:flex; flex-wrap:wrap; gap:.75rem;">
                    <a href="#objekte" class="btn-red">Objekte ansehen</a>

                    <a href="#kontakt" style="border:2px solid rgba(255,255,255,.5); color:white; padding:.85rem 1.75rem; text-decoration:none; font-weight:600; text-transform:uppercase;">
                        Kontakt aufnehmen
                    </a>
                </div>

                <div style="display:flex; align-items:center; gap:1.5rem; margin-top:2.5rem; padding-top:2rem; border-top:1px solid rgba(255,255,255,.12);">
                    @foreach ([['500+', 'Objekte vermittelt'], ['98%', 'Kundenzufriedenheit'], ['15+', 'Jahre Erfahrung']] as $trust)
                        <div>
                            <div style="font-size:1.3rem; font-weight:800; color:var(--brand-red);">{{ $trust[0] }}</div>
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
                @foreach (['Kaufen', 'Mieten', 'Schätzen'] as $tab)
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

<section style="background:white; padding:5rem 2rem;">
    <div class="container">
        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(170px,1fr)); gap:2rem;">
            @foreach ([
                ['500+', 'Immobilien vermittelt'],
                ['CHF 2 Mrd+', 'Transaktionsvolumen'],
                ['15', 'Jahre am Markt'],
                ['98%', 'Kundenzufriedenheit'],
                ['4', 'Standorte Schweiz']
            ] as $stat)
                <div>
                    <div style="font-size:3.5rem; font-weight:300; color:var(--brand-black);">
                        {{ $stat[0] }}
                    </div>
                    <div style="font-size:.75rem; text-transform:uppercase; letter-spacing:.18em; color:var(--brand-gray-dark);">
                        {{ $stat[1] }}
                    </div>
                </div>
            @endforeach
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
                        <span style="position:absolute; top:14px; left:14px; background:var(--brand-red); color:white; padding:.3rem .75rem; font-size:.65rem; font-weight:700;">
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

                        <div style="display:flex; gap:1rem; color:#666; font-size:.78rem; padding-bottom:1rem; border-bottom:1px solid var(--brand-gray-light);">
                            <span>{{ $p['rooms'] }} Zi.</span>
                            <span>{{ $p['area'] }} m²</span>
                        </div>

                        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:1rem;">
                            <strong>{{ $p['price'] }}</strong>
                            <a href="#" style="color:var(--brand-red); text-decoration:none; font-weight:700;">→</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<section style="padding:5rem 2rem; background:white;">
    <div class="container">
        <div style="text-align:center; margin-bottom:3rem;">
            <div class="section-label">Warum VER</div>
            <h2 style="font-size:2rem; font-weight:800;">Ihr Vorteil mit uns</h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1.25rem;">
            @foreach ([
                ['Diskrete Abwicklung', 'Ihre Privatsphäre steht für uns an erster Stelle.'],
                ['Marktkenntnis', 'Fundiertes Wissen des Schweizer Immobilienmarkts.'],
                ['Persönliche Beratung', 'Individuelle Lösungen für jeden Kunden.'],
                ['Rundum-Service', 'Von der Besichtigung bis zur Schlüsselübergabe.'],
            ] as $item)
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

<section style="padding:5rem 2rem; background:#f7f7f7;">
    <div class="container">
        <div style="text-align:center; margin-bottom:3rem;">
            <div class="section-label">Wie es funktioniert</div>
            <h2 style="font-size:2rem; font-weight:800;">So einfach geht's</h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:1.5rem;">
            @foreach ([
                ['Beratungsgespräch', 'Kostenloses Erstgespräch.'],
                ['Bewertung', 'Professionelle Marktanalyse.'],
                ['Vermarktung', 'Gezielte Vermarktung.'],
                ['Übergabe', 'Sichere Vertragsabwicklung.'],
            ] as $i => $step)
                <div class="step-card" style="padding:1.5rem; border-top:3px solid {{ $i === 0 ? 'var(--brand-red)' : 'var(--brand-gray-light)' }};">
                    <div style="width:36px; height:36px; background:var(--brand-red); color:white; display:flex; align-items:center; justify-content:center; font-weight:800;">
                        {{ $i + 1 }}
                    </div>

                    <h4>{{ $step[0] }}</h4>
                    <p style="color:var(--brand-gray-dark); font-size:.85rem;">
                        {{ $step[1] }}
                    </p>
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
            @foreach ([
                ['Sehr professionelle Beratung.', 'Thomas K.', 'Käufer, Zürich'],
                ['Verkauf unserer Wohnung zum Bestpreis.', 'Sandra M.', 'Verkäuferin, Basel'],
                ['Diskret, kompetent und persönlich.', 'Beat R.', 'Investor, Zug'],
            ] as $t)
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
        <div style="font-size:.72rem; font-weight:700; letter-spacing:.15em; text-transform:uppercase; color:rgba(255,255,255,.7); margin-bottom:1rem;">
            Jetzt starten
        </div>

        <h2 style="font-size:2.4rem; font-weight:900; color:white; margin:0 0 1rem;">
            Ihre Immobilie in besten Händen.
        </h2>

        <p style="font-size:.95rem; color:rgba(255,255,255,.85); max-width:480px; margin:0 auto 2.5rem; line-height:1.75;">
            Lassen Sie Ihre Immobilie kostenlos bewerten oder kontaktieren Sie uns für ein unverbindliches Erstgespräch.
        </p>

        <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:1rem;">
            <a href="#" style="background:white; color:var(--brand-red); padding:.9rem 2rem; text-decoration:none; font-weight:800; text-transform:uppercase;">
                Kostenlose Bewertung
            </a>

            <a href="tel:+41441234567" style="border:2px solid rgba(255,255,255,.55); color:white; padding:.9rem 2rem; text-decoration:none; font-weight:600; text-transform:uppercase;">
                +41 44 123 45 67
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.querySelectorAll('.search-tab').forEach(tab => {
    tab.addEventListener('click', function () {
        document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>
@endpush