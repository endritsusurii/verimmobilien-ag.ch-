@extends('layouts.admin')

@section('title', 'Dashboard | VER Immobilien AG')

@section('page-title', 'Immobilienverwaltung')

@section('page-description', 'Übersicht und Verwaltung aller Immobilien')

@section('content')

    <div class="space-y-10">

        {{-- Welcome section --}}
        <section id="dashboard">

            <div class="relative overflow-hidden rounded-3xl bg-[#262525] px-7 py-9 text-white sm:px-10">

                <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-[#ED1C24]/30 blur-3xl"></div>

                <div class="relative flex flex-col gap-7 lg:flex-row lg:items-center lg:justify-between">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#ED1C24]">
                            VER Immobilien AG
                        </p>

                        <h2 class="mt-3 text-3xl font-black sm:text-4xl">
                            Willkommen im Admin Panel
                        </h2>

                        <p class="mt-4 max-w-xl text-sm leading-7 text-white/60 sm:text-base">
                            Verwalten Sie Immobilien, Kundenanfragen,
                            Suchfilter und Website-Inhalte zentral.
                        </p>
                    </div>

                    <button
                        type="button"
                        class="inline-flex items-center justify-center gap-3 rounded-xl bg-[#ED1C24] px-6 py-4 text-sm font-bold text-white shadow-xl shadow-red-950/20 transition hover:-translate-y-1 hover:bg-red-700"
                    >
                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 5v14m-7-7h14"
                            />
                        </svg>

                        Neue Immobilie
                    </button>

                </div>

            </div>

        </section>

        {{-- Statistics --}}
        <section class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">

            @php
                $stats = [
                    [
                        'label' => 'Immobilien gesamt',
                        'value' => '24',
                        'change' => '+3 diesen Monat',
                    ],
                    [
                        'label' => 'Aktive Inserate',
                        'value' => '18',
                        'change' => '75% aller Objekte',
                    ],
                    [
                        'label' => 'Neue Anfragen',
                        'value' => '8',
                        'change' => '+5 diese Woche',
                    ],
                    [
                        'label' => 'Verkauft / Vermietet',
                        'value' => '42',
                        'change' => 'Seit Projektbeginn',
                    ],
                ];
            @endphp

            @foreach ($stats as $stat)

                <article class="rounded-2xl border border-gray-200 bg-white p-6 shadow-[0_12px_40px_rgba(0,0,0,0.04)]">

                    <div class="flex items-start justify-between gap-4">

                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                {{ $stat['label'] }}
                            </p>

                            <p class="mt-3 text-3xl font-black text-[#262525]">
                                {{ $stat['value'] }}
                            </p>
                        </div>

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-red-50 text-[#ED1C24]">

                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 11l9-8 9 8v9a1 1 0 01-1 1h-5v-7H9v7H4a1 1 0 01-1-1v-9z"
                                />
                            </svg>

                        </div>

                    </div>

                    <p class="mt-5 text-xs font-semibold text-gray-400">
                        {{ $stat['change'] }}
                    </p>

                </article>

            @endforeach

        </section>

        {{-- Properties --}}
        <section id="properties" class="scroll-mt-28">

            <div class="overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-[0_15px_50px_rgba(0,0,0,0.04)]">

                <div class="flex flex-col gap-5 border-b border-gray-200 px-6 py-6 sm:flex-row sm:items-center sm:justify-between">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#ED1C24]">
                            Immobilien
                        </p>

                        <h2 class="mt-2 text-2xl font-black">
                            Aktuelle Objekte
                        </h2>
                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row">

                        <div class="relative">

                            <svg
                                class="absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z"
                                />
                            </svg>

                            <input
                                type="search"
                                placeholder="Immobilie suchen..."
                                class="w-full rounded-xl border border-gray-200 py-3 pl-11 pr-4 text-sm outline-none transition focus:border-[#ED1C24] focus:ring-2 focus:ring-red-100 sm:w-64"
                            >

                        </div>

                       <a
    href="{{ route('admin.properties.create') }}"
    class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#ED1C24] px-5 py-3 text-sm font-bold text-white transition hover:bg-red-700"
>
    <svg
        class="h-4 w-4"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 5v14m-7-7h14"
        />
    </svg>

    Hinzufügen
</a>

                    </div>

                </div>

                @php
                    $adminProperties = [
                        [
                            'image' => 'https://images.unsplash.com/photo-1613977257363-707ba9348227?w=300&q=80',
                            'title' => 'Moderne Villa mit Seesicht',
                            'location' => 'Küsnacht, Zürich',
                            'type' => 'Haus',
                            'offer' => 'Kaufen',
                            'price' => "CHF 2'850'000",
                            'status' => 'Aktiv',
                        ],
                        [
                            'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=300&q=80',
                            'title' => 'Exklusive Wohnung im Zentrum',
                            'location' => 'Zürich, Stadtzentrum',
                            'type' => 'Wohnung',
                            'offer' => 'Kaufen',
                            'price' => "CHF 1'250'000",
                            'status' => 'Aktiv',
                        ],
                        [
                            'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=300&q=80',
                            'title' => 'Neubauwohnung mit Balkon',
                            'location' => 'Altstetten, Zürich',
                            'type' => 'Wohnung',
                            'offer' => 'Vermieten',
                            'price' => "CHF 3'200 / Monat",
                            'status' => 'Entwurf',
                        ],
                    ];
                @endphp

                <div class="overflow-x-auto">

                    <table class="w-full min-w-[900px]">

                        <thead class="bg-[#f8f8f8] text-left">

                            <tr class="text-xs font-bold uppercase tracking-wider text-gray-400">
                                <th class="px-6 py-4">Immobilie</th>
                                <th class="px-6 py-4">Kategorie</th>
                                <th class="px-6 py-4">Angebot</th>
                                <th class="px-6 py-4">Preis</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-right">Aktionen</th>
                            </tr>

                        </thead>

                        <tbody class="divide-y divide-gray-100">

                            @foreach ($adminProperties as $property)

                                <tr class="transition hover:bg-gray-50">

                                    <td class="px-6 py-5">

                                        <div class="flex items-center gap-4">

                                            <img
                                                src="{{ $property['image'] }}"
                                                alt="{{ $property['title'] }}"
                                                class="h-16 w-20 rounded-xl object-cover"
                                            >

                                            <div>
                                                <p class="font-bold text-[#262525]">
                                                    {{ $property['title'] }}
                                                </p>

                                                <p class="mt-1 text-sm text-gray-500">
                                                    {{ $property['location'] }}
                                                </p>
                                            </div>

                                        </div>

                                    </td>

                                    <td class="px-6 py-5 text-sm font-medium text-gray-600">
                                        {{ $property['type'] }}
                                    </td>

                                    <td class="px-6 py-5">

                                        <span class="rounded-full bg-gray-100 px-3 py-1.5 text-xs font-semibold text-gray-600">
                                            {{ $property['offer'] }}
                                        </span>

                                    </td>

                                    <td class="px-6 py-5 text-sm font-bold">
                                        {{ $property['price'] }}
                                    </td>

                                    <td class="px-6 py-5">

                                        <span
                                            class="inline-flex items-center gap-2 rounded-full px-3 py-1.5 text-xs font-bold
                                                {{ $property['status'] === 'Aktiv'
                                                    ? 'bg-green-50 text-green-700'
                                                    : 'bg-orange-50 text-orange-700' }}"
                                        >
                                            <span
                                                class="h-1.5 w-1.5 rounded-full
                                                    {{ $property['status'] === 'Aktiv'
                                                        ? 'bg-green-500'
                                                        : 'bg-orange-500' }}"
                                            ></span>

                                            {{ $property['status'] }}
                                        </span>

                                    </td>

                                    <td class="px-6 py-5">

                                        <div class="flex justify-end gap-2">

                                            <button
                                                type="button"
                                                title="Bearbeiten"
                                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 text-gray-500 transition hover:border-[#ED1C24] hover:text-[#ED1C24]"
                                            >
                                                <svg
                                                    class="h-4 w-4"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.2 5.2l3.6 3.6M4 20l4.5-1 10-10a2.55 2.55 0 00-3.6-3.6l-10 10L4 20z"
                                                    />
                                                </svg>
                                            </button>

                                            <button
                                                type="button"
                                                title="Löschen"
                                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 text-gray-500 transition hover:border-red-300 hover:bg-red-50 hover:text-red-600"
                                            >
                                                <svg
                                                    class="h-4 w-4"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M6 7h12m-10 0l1 13h6l1-13M9 7V4h6v3"
                                                    />
                                                </svg>
                                            </button>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

                <div class="flex items-center justify-between border-t border-gray-200 px-6 py-5">

                    <p class="text-sm text-gray-500">
                        3 von 24 Immobilien
                    </p>

                    <button
                        type="button"
                        class="text-sm font-bold text-[#ED1C24]"
                    >
                        Alle anzeigen →
                    </button>

                </div>

            </div>

        </section>

        {{-- Search settings --}}
        <section id="search-settings" class="scroll-mt-28">

            <div class="mb-6">

                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#ED1C24]">
                    Sucheinstellungen
                </p>

                <h2 class="mt-2 text-2xl font-black">
                    Dropdowns und Filter verwalten
                </h2>

                <p class="mt-2 text-sm leading-6 text-gray-500">
                    Diese Werte werden später direkt im Suchformular der Website angezeigt.
                </p>

            </div>

            <div class="grid gap-6 xl:grid-cols-2">

                {{-- Offer types --}}
                <article class="rounded-3xl border border-gray-200 bg-white p-6 shadow-[0_15px_50px_rgba(0,0,0,0.04)]">

                    <div class="flex items-center justify-between gap-4">

                        <div>
                            <h3 class="text-lg font-black">
                                Angebotstypen
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Kaufen, Verkaufen oder Vermieten
                            </p>
                        </div>

                        <button
                            type="button"
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#ED1C24] text-white"
                        >
                            +
                        </button>

                    </div>

                    <div class="mt-6 space-y-3">

                        @foreach (['Kaufen', 'Verkaufen', 'Vermieten'] as $option)

                            <div class="flex items-center justify-between rounded-xl border border-gray-200 px-4 py-3">

                                <div class="flex items-center gap-3">

                                    <span class="h-2 w-2 rounded-full bg-[#ED1C24]"></span>

                                    <span class="text-sm font-semibold">
                                        {{ $option }}
                                    </span>

                                </div>

                                <div class="flex gap-3 text-xs font-semibold">

                                    <button
                                        type="button"
                                        class="text-gray-400 hover:text-[#ED1C24]"
                                    >
                                        Bearbeiten
                                    </button>

                                    <button
                                        type="button"
                                        class="text-gray-400 hover:text-red-600"
                                    >
                                        Löschen
                                    </button>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </article>

                {{-- Categories --}}
                <article
                    id="categories"
                    class="scroll-mt-28 rounded-3xl border border-gray-200 bg-white p-6 shadow-[0_15px_50px_rgba(0,0,0,0.04)]"
                >

                    <div class="flex items-center justify-between gap-4">

                        <div>
                            <h3 class="text-lg font-black">
                                Immobilienkategorien
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Typen im Kategorie-Dropdown
                            </p>
                        </div>

                        <button
                            type="button"
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#ED1C24] text-white"
                        >
                            +
                        </button>

                    </div>

                    <div class="mt-6 space-y-3">

                        @foreach (['Haus', 'Wohnung', 'Villa', 'Grundstück', 'Gewerbe'] as $option)

                            <div class="flex items-center justify-between rounded-xl border border-gray-200 px-4 py-3">

                                <span class="text-sm font-semibold">
                                    {{ $option }}
                                </span>

                                <div class="flex gap-3 text-xs font-semibold">

                                    <button
                                        type="button"
                                        class="text-gray-400 hover:text-[#ED1C24]"
                                    >
                                        Bearbeiten
                                    </button>

                                    <button
                                        type="button"
                                        class="text-gray-400 hover:text-red-600"
                                    >
                                        Löschen
                                    </button>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </article>

                {{-- Rooms --}}
                <article class="rounded-3xl border border-gray-200 bg-white p-6 shadow-[0_15px_50px_rgba(0,0,0,0.04)]">

                    <div class="flex items-center justify-between gap-4">

                        <div>
                            <h3 class="text-lg font-black">
                                Zimmeroptionen
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Werte des Zimmer-Dropdowns
                            </p>
                        </div>

                        <button
                            type="button"
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#ED1C24] text-white"
                        >
                            +
                        </button>

                    </div>

                    <div class="mt-6 flex flex-wrap gap-3">

                        @foreach (['1+', '2+', '3+', '4+', '5+', '6+'] as $room)

                            <div class="flex items-center gap-3 rounded-xl border border-gray-200 px-4 py-3">

                                <span class="text-sm font-bold">
                                    {{ $room }}
                                </span>

                                <button
                                    type="button"
                                    class="text-xs text-gray-400 hover:text-red-600"
                                >
                                    ×
                                </button>

                            </div>

                        @endforeach

                    </div>

                </article>

                {{-- Cantons --}}
                <article class="rounded-3xl border border-gray-200 bg-white p-6 shadow-[0_15px_50px_rgba(0,0,0,0.04)]">

                    <div class="flex items-center justify-between gap-4">

                        <div>
                            <h3 class="text-lg font-black">
                                Kantone
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Verfügbare Regionen der Suche
                            </p>
                        </div>

                        <button
                            type="button"
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#ED1C24] text-white"
                        >
                            +
                        </button>

                    </div>

                    <div class="mt-6 flex flex-wrap gap-3">

                        @foreach (['Zürich', 'Bern', 'Basel', 'Zug', 'Luzern', 'Aargau'] as $canton)

                            <span class="inline-flex items-center gap-3 rounded-full bg-[#f5f5f5] px-4 py-2 text-sm font-semibold">

                                {{ $canton }}

                                <button
                                    type="button"
                                    class="text-gray-400 hover:text-red-600"
                                >
                                    ×
                                </button>

                            </span>

                        @endforeach

                    </div>

                </article>

            </div>

        </section>

        {{-- Submissions --}}
        <section id="submissions" class="scroll-mt-28">

            <div class="overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-[0_15px_50px_rgba(0,0,0,0.04)]">

                <div class="flex flex-col gap-5 border-b border-gray-200 px-6 py-6 sm:flex-row sm:items-center sm:justify-between">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#ED1C24]">
                            Kundenanfragen
                        </p>

                        <h2 class="mt-2 text-2xl font-black">
                            Eingereichte Immobilien
                        </h2>
                    </div>

                    <select class="rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-[#ED1C24]">
                        <option>Alle Anfragen</option>
                        <option>Neu</option>
                        <option>In Bearbeitung</option>
                        <option>Kontaktiert</option>
                        <option>Abgeschlossen</option>
                    </select>

                </div>

                @php
                    $submissions = [
                        [
                            'name' => 'Anna Müller',
                            'email' => 'anna@example.ch',
                            'phone' => '+41 79 123 45 67',
                            'property' => 'Haus',
                            'offer' => 'Verkaufen',
                            'location' => 'Zürich',
                            'date' => 'Heute, 10:35',
                            'status' => 'Neu',
                        ],
                        [
                            'name' => 'Daniel Weber',
                            'email' => 'daniel@example.ch',
                            'phone' => '+41 78 987 65 43',
                            'property' => 'Wohnung',
                            'offer' => 'Vermieten',
                            'location' => 'Zug',
                            'date' => 'Gestern, 16:20',
                            'status' => 'In Bearbeitung',
                        ],
                        [
                            'name' => 'Sophie Keller',
                            'email' => 'sophie@example.ch',
                            'phone' => '+41 76 222 11 00',
                            'property' => 'Villa',
                            'offer' => 'Verkaufen',
                            'location' => 'Küsnacht',
                            'date' => '20.07.2026',
                            'status' => 'Kontaktiert',
                        ],
                    ];
                @endphp

                <div class="overflow-x-auto">

                    <table class="w-full min-w-[1000px]">

                        <thead class="bg-[#f8f8f8] text-left">

                            <tr class="text-xs font-bold uppercase tracking-wider text-gray-400">
                                <th class="px-6 py-4">Kunde</th>
                                <th class="px-6 py-4">Kontakt</th>
                                <th class="px-6 py-4">Immobilie</th>
                                <th class="px-6 py-4">Ort</th>
                                <th class="px-6 py-4">Eingang</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-right">Aktion</th>
                            </tr>

                        </thead>

                        <tbody class="divide-y divide-gray-100">

                            @foreach ($submissions as $submission)

                                <tr class="transition hover:bg-gray-50">

                                    <td class="px-6 py-5">
                                        <p class="font-bold">
                                            {{ $submission['name'] }}
                                        </p>
                                    </td>

                                    <td class="px-6 py-5">
                                        <p class="text-sm text-gray-600">
                                            {{ $submission['email'] }}
                                        </p>

                                        <p class="mt-1 text-xs text-gray-400">
                                            {{ $submission['phone'] }}
                                        </p>
                                    </td>

                                    <td class="px-6 py-5">
                                        <p class="text-sm font-semibold">
                                            {{ $submission['property'] }}
                                        </p>

                                        <p class="mt-1 text-xs text-gray-400">
                                            {{ $submission['offer'] }}
                                        </p>
                                    </td>

                                    <td class="px-6 py-5 text-sm text-gray-600">
                                        {{ $submission['location'] }}
                                    </td>

                                    <td class="px-6 py-5 text-sm text-gray-500">
                                        {{ $submission['date'] }}
                                    </td>

                                    <td class="px-6 py-5">

                                        <span
                                            class="rounded-full px-3 py-1.5 text-xs font-bold
                                                @if ($submission['status'] === 'Neu')
                                                    bg-red-50 text-[#ED1C24]
                                                @elseif ($submission['status'] === 'In Bearbeitung')
                                                    bg-orange-50 text-orange-700
                                                @else
                                                    bg-green-50 text-green-700
                                                @endif"
                                        >
                                            {{ $submission['status'] }}
                                        </span>

                                    </td>

                                    <td class="px-6 py-5 text-right">

                                        <button
                                            type="button"
                                            class="rounded-xl border border-gray-200 px-4 py-2 text-sm font-bold transition hover:border-[#ED1C24] hover:text-[#ED1C24]"
                                        >
                                            Details
                                        </button>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </section>

    </div>

@endsection