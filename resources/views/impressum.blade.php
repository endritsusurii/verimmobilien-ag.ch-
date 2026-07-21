@extends('layouts.app')

@section('title', 'Impressum | VER Immobilien AG')

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
                        Rechtliche Informationen
                    </span>

                    <h1 class="mt-7 text-5xl font-black tracking-tight text-white sm:text-6xl lg:text-7xl">
                        Impressum
                    </h1>

                    <p class="mt-6 max-w-2xl text-base leading-8 text-white/65 sm:text-lg">
                        Rechtliche Angaben, Kontaktinformationen und
                        Unternehmensinformationen der VER Immobilien AG.
                    </p>

                </div>

                <div class="select-none text-[110px] font-black leading-none text-white/[0.04] sm:text-[150px]">
                    01
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

                        <a href="#unternehmen"
                           class="rounded-2xl px-4 py-3 text-sm font-semibold text-gray-600 transition hover:bg-[#f7f7f7] hover:text-[#262525]">
                            Unternehmensangaben
                        </a>

                        <a href="#kontakt"
                           class="rounded-2xl px-4 py-3 text-sm font-semibold text-gray-600 transition hover:bg-[#f7f7f7] hover:text-[#262525]">
                            Kontakt
                        </a>

                        <a href="#handelsregister"
                           class="rounded-2xl px-4 py-3 text-sm font-semibold text-gray-600 transition hover:bg-[#f7f7f7] hover:text-[#262525]">
                            Handelsregister
                        </a>

                        <a href="#haftung"
                           class="rounded-2xl px-4 py-3 text-sm font-semibold text-gray-600 transition hover:bg-[#f7f7f7] hover:text-[#262525]">
                            Haftungsausschluss
                        </a>

                        <a href="#urheberrecht"
                           class="rounded-2xl px-4 py-3 text-sm font-semibold text-gray-600 transition hover:bg-[#f7f7f7] hover:text-[#262525]">
                            Urheberrecht
                        </a>

                    </nav>

                </div>

            </aside>

            {{-- Main --}}
            <div class="space-y-6">

                {{-- Intro --}}
                <div class="relative overflow-hidden rounded-3xl bg-[#262525] p-8 text-white shadow-[0_25px_80px_rgba(0,0,0,0.12)] sm:p-10">

                    <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-[#ED1C24]/20 blur-3xl"></div>

                    <div class="relative flex flex-col gap-6 sm:flex-row sm:items-center">

                        <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-[#ED1C24] text-lg font-black text-white shadow-lg shadow-red-900/30">
                            VER
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                                VER Immobilien AG
                            </p>

                            <h2 class="mt-2 text-2xl font-bold sm:text-3xl">
                                Transparenz schafft Vertrauen.
                            </h2>

                            <p class="mt-3 max-w-2xl text-sm leading-7 text-white/65 sm:text-base">
                                Auf dieser Seite finden Sie sämtliche rechtlichen Angaben
                                zur Betreiberin dieser Website.
                            </p>
                        </div>

                    </div>

                </div>

                {{-- Company --}}
                <article id="unternehmen"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <div class="flex flex-col gap-8">

                        <div class="flex items-start justify-between gap-6">

                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                                    01 · Unternehmen
                                </span>

                                <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                                    Unternehmensangaben
                                </h2>
                            </div>

                            <span class="hidden text-6xl font-black text-gray-100 sm:block">
                                01
                            </span>

                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">

                            <div class="rounded-2xl bg-[#f7f7f7] p-6">
                                <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Firmenname
                                </span>

                                <p class="mt-3 text-base font-bold text-[#262525]">
                                    VER Immobilien AG
                                </p>
                            </div>

                            <div class="rounded-2xl bg-[#f7f7f7] p-6">
                                <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Rechtsform
                                </span>

                                <p class="mt-3 text-base font-bold text-[#262525]">
                                    Aktiengesellschaft
                                </p>
                            </div>

                            <div class="rounded-2xl bg-[#f7f7f7] p-6">
                                <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Geschäftsadresse
                                </span>

                                <p class="mt-3 text-base font-bold leading-7 text-[#262525]">
                                    Musterstrasse 10<br>
                                    8000 Zürich<br>
                                    Schweiz
                                </p>
                            </div>

                            <div class="rounded-2xl bg-[#f7f7f7] p-6">
                                <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Vertretungsberechtigte Person
                                </span>

                                <p class="mt-3 text-base font-bold text-[#262525]">
                                    Max Mustermann
                                </p>
                            </div>

                        </div>

                    </div>

                </article>

                {{-- Contact --}}
                <article id="kontakt"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <div class="flex items-start justify-between gap-6">

                        <div>
                            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                                02 · Kontakt
                            </span>

                            <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                                Kontaktinformationen
                            </h2>
                        </div>

                        <span class="hidden text-6xl font-black text-gray-100 sm:block">
                            02
                        </span>

                    </div>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">

                        <a href="tel:+41441234567"
                           class="group rounded-2xl border border-gray-200 p-6 transition hover:-translate-y-1 hover:border-[#ED1C24] hover:shadow-lg">

                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                Telefon
                            </span>

                            <div class="mt-3 flex items-center justify-between gap-4">
                                <strong class="text-base text-[#262525]">
                                    +41 44 123 45 67
                                </strong>

                                <span class="text-xl text-[#ED1C24] transition group-hover:translate-x-1">
                                    →
                                </span>
                            </div>

                        </a>

                        <a href="mailto:info@verimmobilien-ag.ch"
                           class="group rounded-2xl border border-gray-200 p-6 transition hover:-translate-y-1 hover:border-[#ED1C24] hover:shadow-lg">

                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                E-Mail
                            </span>

                            <div class="mt-3 flex items-center justify-between gap-4">
                                <strong class="break-all text-base text-[#262525]">
                                    info@verimmobilien-ag.ch
                                </strong>

                                <span class="text-xl text-[#ED1C24] transition group-hover:translate-x-1">
                                    →
                                </span>
                            </div>

                        </a>

                    </div>

                </article>

                {{-- Commercial Register --}}
                <article id="handelsregister"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <div class="flex items-start justify-between gap-6">

                        <div>
                            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                                03 · Registrierung
                            </span>

                            <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                                Handelsregister
                            </h2>
                        </div>

                        <span class="hidden text-6xl font-black text-gray-100 sm:block">
                            03
                        </span>

                    </div>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">

                        <div class="rounded-2xl bg-[#f7f7f7] p-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                Handelsregisteramt
                            </span>

                            <p class="mt-3 font-bold leading-7 text-[#262525]">
                                Handelsregisteramt des Kantons Zürich
                            </p>
                        </div>

                        <div class="rounded-2xl bg-[#f7f7f7] p-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                UID-Nummer
                            </span>

                            <p class="mt-3 font-bold text-[#262525]">
                                CHE-123.456.789
                            </p>
                        </div>

                        <div class="rounded-2xl bg-[#f7f7f7] p-6 sm:col-span-2">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                Mehrwertsteuer
                            </span>

                            <p class="mt-3 font-bold text-[#262525]">
                                CHE-123.456.789 MWST
                            </p>
                        </div>

                    </div>

                </article>

                {{-- Disclaimer --}}
                <article id="haftung"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        04 · Rechtlicher Hinweis
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Haftungsausschluss
                    </h2>

                    <div class="mt-7 space-y-5 text-sm leading-8 text-gray-600 sm:text-base">
                        <p>
                            Die VER Immobilien AG ist bestrebt, die auf dieser Website
                            veröffentlichten Informationen sorgfältig zu prüfen und
                            aktuell zu halten. Dennoch kann keine Gewähr für deren
                            Richtigkeit, Vollständigkeit oder Aktualität übernommen werden.
                        </p>

                        <p>
                            Haftungsansprüche wegen Schäden materieller oder immaterieller
                            Art, die aus dem Zugriff, der Nutzung oder Nichtnutzung der
                            veröffentlichten Informationen entstehen, werden im gesetzlich
                            zulässigen Umfang ausgeschlossen.
                        </p>

                        <p>
                            Für Inhalte externer Websites, auf die durch Links verwiesen
                            wird, übernimmt die VER Immobilien AG keine Verantwortung.
                            Für deren Inhalte sind ausschliesslich die jeweiligen Betreiber
                            verantwortlich.
                        </p>
                    </div>

                </article>

                {{-- Copyright --}}
                <article id="urheberrecht"
                         class="scroll-mt-32 rounded-3xl border border-gray-200 bg-white p-7 shadow-[0_20px_60px_rgba(0,0,0,0.04)] sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                        05 · Inhalte
                    </span>

                    <h2 class="mt-3 text-2xl font-black text-[#262525] sm:text-3xl">
                        Urheberrecht
                    </h2>

                    <div class="mt-7 space-y-5 text-sm leading-8 text-gray-600 sm:text-base">
                        <p>
                            Sämtliche Inhalte dieser Website, insbesondere Texte,
                            Fotografien, Grafiken, Logos und Gestaltungselemente,
                            sind urheberrechtlich geschützt.
                        </p>

                        <p>
                            Die vollständige oder teilweise Vervielfältigung,
                            Bearbeitung, Verbreitung oder sonstige Verwendung ist
                            ohne vorherige schriftliche Zustimmung der VER Immobilien AG
                            nicht gestattet.
                        </p>
                    </div>

                </article>

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