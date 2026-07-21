@extends('layouts.app')

@section('title', 'Datenschutzerklärung | VER Immobilien AG')

@section('content')

<main class="bg-[#f7f7f7]">

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-[#262525] px-6 pb-20 pt-36 lg:pb-28 lg:pt-44">

        <div class="absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-[#ED1C24]/20 blur-3xl"></div>

        <div class="absolute bottom-0 left-0 h-px w-full bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>

        <div class="relative mx-auto max-w-7xl">

            <div class="flex flex-col gap-10 lg:flex-row lg:items-end lg:justify-between">

                <div class="max-w-3xl">

                    <span class="inline-flex items-center gap-3 text-xs font-bold uppercase tracking-[0.25em] text-[#ED1C24]">
                        <span class="h-px w-10 bg-[#ED1C24]"></span>
                        Datenschutz & Sicherheit
                    </span>

                    <h1 class="mt-7 text-4xl font-black tracking-tight text-white sm:text-6xl lg:text-7xl">
                        Datenschutzerklärung
                    </h1>

                    <p class="mt-6 max-w-2xl text-base leading-8 text-white/65 sm:text-lg">
                        Transparente Informationen darüber, wie wir personenbezogene
                        Daten bearbeiten, schützen und verwenden.
                    </p>

                </div>

                <div class="select-none text-[110px] font-black leading-none text-white/[0.04] sm:text-[150px]">
                    02
                </div>

            </div>

        </div>

    </section>

    {{-- Content --}}
    <section class="px-6 py-16 lg:py-24">

        <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[280px_minmax(0,1fr)]">

            {{-- Sidebar --}}
            <aside class="hidden lg:block">

                <div class="sticky top-28 overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-[0_20px_60px_rgba(0,0,0,0.05)]">

                    <div class="border-b border-gray-100 px-7 py-6">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                            Inhalt
                        </p>
                    </div>

                    <nav class="flex flex-col p-3">

                        @foreach ([
                            ['Allgemeines', '#allgemeines'],
                            ['Verantwortliche Stelle', '#verantwortung'],
                            ['Erhobene Daten', '#daten'],
                            ['Zweck der Bearbeitung', '#zweck'],
                            ['Kontaktformulare', '#formulare'],
                            ['Cookies', '#cookies'],
                            ['Datenweitergabe', '#weitergabe'],
                            ['Aufbewahrung', '#aufbewahrung'],
                            ['Ihre Rechte', '#rechte'],
                            ['Datensicherheit', '#sicherheit'],
                        ] as [$title, $href])
                            <a href="{{ $href }}"
                               class="rounded-2xl px-4 py-3 text-sm font-semibold text-gray-600 transition hover:bg-[#f7f7f7] hover:text-[#262525]">
                                {{ $title }}
                            </a>
                        @endforeach

                    </nav>

                </div>

            </aside>

            {{-- Main content --}}
            <div class="space-y-6">

                {{-- Intro --}}
                <div class="relative overflow-hidden rounded-3xl bg-[#262525] p-8 text-white shadow-[0_25px_80px_rgba(0,0,0,0.12)] sm:p-10">

                    <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-[#ED1C24]/20 blur-3xl"></div>

                    <div class="relative flex flex-col gap-6 sm:flex-row sm:items-center">

                        <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-[#ED1C24] text-lg font-black text-white shadow-lg shadow-red-900/30">
                            DS
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                                Schutz Ihrer Privatsphäre
                            </p>

                            <h2 class="mt-2 text-2xl font-bold sm:text-3xl">
                                Ihre Daten bleiben in sicheren Händen.
                            </h2>

                            <p class="mt-3 max-w-2xl text-sm leading-7 text-white/65 sm:text-base">
                                Wir bearbeiten personenbezogene Daten vertraulich,
                                zweckgebunden und gemäss dem anwendbaren Schweizer
                                Datenschutzrecht.
                            </p>
                        </div>

                    </div>

                </div>

                {{-- Allgemeines --}}
                <article id="allgemeines"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        01 · Grundlagen
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Allgemeines
                    </h2>

                    <div class="mt-7 space-y-5 text-sm leading-8 text-gray-600 sm:text-base">
                        <p>
                            Diese Datenschutzerklärung informiert darüber, welche
                            personenbezogenen Daten beim Besuch unserer Website sowie
                            bei der Nutzung unserer Dienstleistungen bearbeitet werden.
                        </p>

                        <p>
                            Als personenbezogene Daten gelten alle Informationen,
                            die sich auf eine bestimmte oder bestimmbare natürliche
                            Person beziehen.
                        </p>
                    </div>

                </article>

                {{-- Responsible company --}}
                <article id="verantwortung"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        02 · Verantwortung
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Verantwortliche Stelle
                    </h2>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">

                        <div class="rounded-2xl bg-[#f7f7f7] p-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                Unternehmen
                            </span>

                            <p class="mt-3 font-bold text-[#262525]">
                                VER Immobilien AG
                            </p>
                        </div>

                        <div class="rounded-2xl bg-[#f7f7f7] p-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                Adresse
                            </span>

                            <p class="mt-3 font-bold leading-7 text-[#262525]">
                                Musterstrasse 10<br>
                                8000 Zürich<br>
                                Schweiz
                            </p>
                        </div>

                        <div class="rounded-2xl bg-[#f7f7f7] p-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                E-Mail
                            </span>

                            <a href="mailto:info@verimmobilien-ag.ch"
                               class="mt-3 block break-all font-bold text-[#262525] transition hover:text-[#ED1C24]">
                                info@verimmobilien-ag.ch
                            </a>
                        </div>

                        <div class="rounded-2xl bg-[#f7f7f7] p-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                Telefon
                            </span>

                            <a href="tel:+41441234567"
                               class="mt-3 block font-bold text-[#262525] transition hover:text-[#ED1C24]">
                                +41 44 123 45 67
                            </a>
                        </div>

                    </div>

                </article>

                {{-- Data --}}
                <article id="daten"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        03 · Datenkategorien
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Welche Daten wir bearbeiten
                    </h2>

                    <div class="mt-8 flex flex-wrap gap-3">

                        @foreach ([
                            'Vorname und Nachname',
                            'E-Mail-Adresse',
                            'Telefonnummer',
                            'Postadresse',
                            'Immobilienangaben',
                            'Preisvorstellungen',
                            'Nachrichten und Anfragen',
                            'Hochgeladene Bilder',
                            'IP-Adresse',
                            'Browserinformationen',
                            'Geräteinformationen',
                            'Zugriffszeitpunkt'
                        ] as $item)

                            <span class="rounded-full border border-gray-200 bg-[#f7f7f7] px-4 py-2 text-sm font-medium text-gray-600">
                                {{ $item }}
                            </span>

                        @endforeach

                    </div>

                </article>

                {{-- Purpose --}}
                <article id="zweck"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        04 · Verwendung
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Zweck der Datenbearbeitung
                    </h2>

                    <div class="mt-8 space-y-4">

                        @foreach ([
                            'Bearbeitung von Kontakt- und Immobilienanfragen',
                            'Erbringung unserer Immobilien-Dienstleistungen',
                            'Vermittlung, Verkauf, Vermietung und Verwaltung',
                            'Kommunikation mit Interessenten und Kunden',
                            'Verbesserung unserer Website und Dienstleistungen',
                            'Erfüllung gesetzlicher und vertraglicher Verpflichtungen',
                            'Schutz vor Missbrauch und Sicherheitsrisiken'
                        ] as $item)

                            <div class="flex items-start gap-4 rounded-2xl bg-[#f7f7f7] p-5">

                                <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ED1C24] text-xs font-bold text-white">
                                    ✓
                                </span>

                                <p class="text-sm leading-6 text-gray-600 sm:text-base">
                                    {{ $item }}
                                </p>

                            </div>

                        @endforeach

                    </div>

                </article>

                {{-- Forms --}}
                <article id="formulare"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        05 · Formulare
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Kontakt- und Immobilienformulare
                    </h2>

                    <div class="mt-7 space-y-5 text-sm leading-8 text-gray-600 sm:text-base">
                        <p>
                            Wenn Sie über unsere Website eine Anfrage senden oder eine
                            Immobilie einreichen, bearbeiten wir die von Ihnen
                            übermittelten Angaben zur Bearbeitung Ihrer Anfrage.
                        </p>

                        <p>
                            Dazu können persönliche Kontaktdaten, Angaben zur Immobilie,
                            Adressen, Flächen, Zimmeranzahl, Preisvorstellungen,
                            Beschreibungen sowie hochgeladene Bilder oder Dokumente gehören.
                        </p>
                    </div>

                </article>

                {{-- Cookies --}}
                <article id="cookies"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        06 · Website-Technologien
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Cookies
                    </h2>

                    <div class="mt-7 space-y-5 text-sm leading-8 text-gray-600 sm:text-base">
                        <p>
                            Unsere Website kann technisch notwendige Cookies verwenden.
                            Diese ermöglichen grundlegende Funktionen wie Sicherheit,
                            Sitzungsverwaltung und die korrekte Darstellung der Website.
                        </p>

                        <p>
                            Sie können Cookies über die Einstellungen Ihres Browsers
                            einschränken, blockieren oder löschen. Dadurch können jedoch
                            einzelne Funktionen der Website beeinträchtigt werden.
                        </p>
                    </div>

                </article>

                {{-- Data transfer --}}
                <article id="weitergabe"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        07 · Empfänger
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Weitergabe von Daten
                    </h2>

                    <div class="mt-7 space-y-5 text-sm leading-8 text-gray-600 sm:text-base">
                        <p>
                            Personenbezogene Daten werden nur weitergegeben, wenn dies
                            zur Erbringung unserer Dienstleistungen erforderlich,
                            gesetzlich vorgeschrieben oder durch Ihre Einwilligung
                            erlaubt ist.
                        </p>

                        <p>
                            Mögliche Empfänger können Hostinganbieter, IT-Dienstleister,
                            Geschäftspartner, Behörden oder sorgfältig ausgewählte
                            Auftragsbearbeiter sein.
                        </p>
                    </div>

                </article>

                {{-- Retention --}}
                <article id="aufbewahrung"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        08 · Speicherdauer
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Aufbewahrung der Daten
                    </h2>

                    <p class="mt-7 text-sm leading-8 text-gray-600 sm:text-base">
                        Wir bewahren personenbezogene Daten nur so lange auf, wie dies
                        für den jeweiligen Bearbeitungszweck, zur Erfüllung vertraglicher
                        Pflichten oder aufgrund gesetzlicher Aufbewahrungspflichten
                        erforderlich ist.
                    </p>

                </article>

                {{-- Rights --}}
                <article id="rechte"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        09 · Betroffenenrechte
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Ihre Rechte
                    </h2>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">

                        @foreach ([
                            ['Auskunft', 'Sie können Auskunft über die von uns bearbeiteten personenbezogenen Daten verlangen.'],
                            ['Berichtigung', 'Unrichtige oder unvollständige Daten können berichtigt werden.'],
                            ['Löschung', 'Sie können die Löschung Ihrer Daten verlangen, sofern keine gesetzlichen Pflichten entgegenstehen.'],
                            ['Widerspruch', 'Sie können bestimmten Bearbeitungen Ihrer Daten widersprechen.'],
                            ['Datenherausgabe', 'Im gesetzlichen Umfang können Sie die Herausgabe Ihrer Daten verlangen.'],
                            ['Widerruf', 'Eine erteilte Einwilligung kann jederzeit für die Zukunft widerrufen werden.']
                        ] as [$title, $text])

                            <div class="rounded-2xl border border-gray-200 p-6 transition hover:border-[#ED1C24] hover:shadow-lg">

                                <h3 class="text-base font-bold text-[#262525]">
                                    {{ $title }}
                                </h3>

                                <p class="mt-3 text-sm leading-7 text-gray-600">
                                    {{ $text }}
                                </p>

                            </div>

                        @endforeach

                    </div>

                </article>

                {{-- Security --}}
                <article id="sicherheit"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        10 · Schutzmassnahmen
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Datensicherheit
                    </h2>

                    <div class="mt-7 space-y-5 text-sm leading-8 text-gray-600 sm:text-base">
                        <p>
                            Wir treffen angemessene technische und organisatorische
                            Sicherheitsmassnahmen, um personenbezogene Daten vor Verlust,
                            Manipulation, unberechtigtem Zugriff oder Missbrauch zu schützen.
                        </p>

                        <p>
                            Unsere Sicherheitsmassnahmen werden entsprechend der
                            technologischen Entwicklung regelmässig überprüft und
                            bei Bedarf angepasst.
                        </p>
                    </div>

                </article>

                {{-- Contact CTA --}}
                <div class="relative overflow-hidden rounded-3xl bg-[#ED1C24] p-8 text-white shadow-[0_25px_70px_rgba(237,28,36,0.25)] sm:p-10">

                    <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-white/10 blur-2xl"></div>

                    <div class="relative flex flex-col gap-7 md:flex-row md:items-center md:justify-between">

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/70">
                                Fragen zum Datenschutz?
                            </p>

                            <h2 class="mt-3 text-2xl font-black sm:text-3xl">
                                Wir helfen Ihnen gerne weiter.
                            </h2>
                        </div>

                        <a href="mailto:info@verimmobilien-ag.ch"
                           class="inline-flex shrink-0 items-center justify-center rounded-xl bg-white px-7 py-4 text-sm font-bold text-[#262525] transition hover:-translate-y-1 hover:shadow-xl">
                            Kontakt aufnehmen
                        </a>

                    </div>

                </div>

                <div class="flex flex-col gap-3 rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm sm:flex-row sm:items-center sm:justify-between">
                    <span class="text-gray-500">
                        Letzte Aktualisierung
                    </span>

                    <strong class="text-[#262525]">
                        {{ now()->format('d.m.Y') }}
                    </strong>
                </div>

            </div>

        </div>

    </section>

</main>

@endsection