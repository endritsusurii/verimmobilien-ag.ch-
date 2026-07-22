<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Admin Panel | VER Immobilien AG')
    </title>

    <link
        rel="icon"
        type="image/png"
        href="{{ asset('img/favicon.png') }}"
    >

    {{-- Tailwind CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- Laravel Vite --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('styles')
</head>

<body class="min-h-screen bg-[#f4f5f7] text-[#262525] antialiased">

    <div class="min-h-screen">

        {{-- Sidebar --}}
        <aside
            id="adminSidebar"
            class="fixed inset-y-0 left-0 z-50 w-[280px] -translate-x-full overflow-hidden border-r border-white/10 bg-[#262525] text-white transition-transform duration-300 lg:translate-x-0"
        >

            <div class="flex h-full min-h-0 flex-col">

                {{-- Logo --}}
                <div class="flex h-24 shrink-0 items-center justify-between border-b border-white/10 px-6">

                    <a
                        href="{{ url('/') }}"
                        class="flex items-center gap-3"
                    >

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#ED1C24] text-xs font-black">
                            VER
                        </div>

                        <div>
                            <p class="text-sm font-bold">
                                VER Immobilien
                            </p>

                            <p class="mt-0.5 text-xs text-white/40">
                                Administration
                            </p>
                        </div>

                    </a>

                    <button
                        type="button"
                        id="closeAdminSidebar"
                        aria-label="Sidebar schliessen"
                        class="flex h-10 w-10 items-center justify-center rounded-xl text-white/60 transition hover:bg-white/10 hover:text-white lg:hidden"
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
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>

                </div>

                {{-- Navigation --}}
                <nav class="min-h-0 flex-1 space-y-2 overflow-y-auto px-4 py-6">

                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="flex items-center gap-4 rounded-xl bg-[#ED1C24] px-4 py-3.5 text-sm font-semibold text-white"
                    >
                        <svg
                            class="h-5 w-5 shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 13h8V3H3v10zm10 8h8V11h-8v10zM3 21h8v-6H3v6zm10-12h8V3h-8v6z"
                            />
                        </svg>

                        Dashboard
                    </a>

                    <a
                        href="{{ route('admin.dashboard') }}#properties"
                        class="flex items-center gap-4 rounded-xl px-4 py-3.5 text-sm font-semibold text-white/65 transition hover:bg-white/10 hover:text-white"
                    >
                        <svg
                            class="h-5 w-5 shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 10.5L12 3l9 7.5V21a1 1 0 01-1 1h-5v-7H9v7H4a1 1 0 01-1-1V10.5z"
                            />
                        </svg>

                        Immobilien
                    </a>

                    <a
                        href="{{ route('admin.dashboard') }}#submissions"
                        class="flex items-center justify-between rounded-xl px-4 py-3.5 text-sm font-semibold text-white/65 transition hover:bg-white/10 hover:text-white"
                    >
                        <span class="flex items-center gap-4">

                            <svg
                                class="h-5 w-5 shrink-0"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 12h6m-6 4h6M5 4h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2z"
                                />
                            </svg>

                            Anfragen

                        </span>

                        <span class="rounded-full bg-[#ED1C24] px-2.5 py-1 text-[10px] font-bold">
                            8
                        </span>
                    </a>

                    <a
                        href="{{ route('admin.dashboard') }}#search-settings"
                        class="flex items-center gap-4 rounded-xl px-4 py-3.5 text-sm font-semibold text-white/65 transition hover:bg-white/10 hover:text-white"
                    >
                        <svg
                            class="h-5 w-5 shrink-0"
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

                        Suchoptionen
                    </a>

                    <a
                        href="{{ route('admin.dashboard') }}#categories"
                        class="flex items-center gap-4 rounded-xl px-4 py-3.5 text-sm font-semibold text-white/65 transition hover:bg-white/10 hover:text-white"
                    >
                        <svg
                            class="h-5 w-5 shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h10"
                            />
                        </svg>

                        Kategorien
                    </a>

                    <a
                        href="{{ route('admin.dashboard') }}#settings"
                        class="flex items-center gap-4 rounded-xl px-4 py-3.5 text-sm font-semibold text-white/65 transition hover:bg-white/10 hover:text-white"
                    >
                        <svg
                            class="h-5 w-5 shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 15.5A3.5 3.5 0 1012 8a3.5 3.5 0 000 7.5z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19.4 15a1.7 1.7 0 00.34 1.88l.06.06-2.12 2.12-.06-.06a1.7 1.7 0 00-1.88-.34 1.7 1.7 0 00-1.03 1.55V20H9.7v-.09a1.7 1.7 0 00-1.03-1.55 1.7 1.7 0 00-1.88.34l-.06.06-2.12-2.12.06-.06A1.7 1.7 0 005 15a1.7 1.7 0 00-1.55-1.03H3.4v-3h.09A1.7 1.7 0 005 9.94a1.7 1.7 0 00-.34-1.88L4.6 8l2.12-2.12.06.06A1.7 1.7 0 008.66 6.3 1.7 1.7 0 009.69 4.75V4.7h3v.09a1.7 1.7 0 001.03 1.55 1.7 1.7 0 001.88-.34l.06-.06L17.8 8l-.06.06a1.7 1.7 0 00-.34 1.88 1.7 1.7 0 001.55 1.03H19v3h-.09A1.7 1.7 0 0019.4 15z"
                            />
                        </svg>

                        Einstellungen
                    </a>

                </nav>

                {{-- Admin profile and logout --}}
                <div class="shrink-0 border-t border-white/10 bg-[#262525] p-4">

                    <div class="flex items-center gap-3 rounded-xl bg-white/5 p-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-white/10 text-sm font-bold">

                            @auth
                                {{ strtoupper(substr(auth()->user()->name ?? 'AD', 0, 2)) }}
                            @else
                                AD
                            @endauth

                        </div>

                        <div class="min-w-0 flex-1">

                            <p class="truncate text-sm font-semibold">
                                @auth
                                    {{ auth()->user()->name ?? 'Administrator' }}
                                @else
                                    Administrator
                                @endauth
                            </p>

                            <p class="truncate text-xs text-white/40">
                                @auth
                                    {{ auth()->user()->email ?? 'admin@verimmobilien-ag.ch' }}
                                @else
                                    admin@verimmobilien-ag.ch
                                @endauth
                            </p>

                        </div>

                    </div>

                    @auth
                        <form
                            action="{{ route('logout') }}"
                            method="POST"
                            class="mt-3"
                        >
                            @csrf

                            <button
                                type="submit"
                                class="flex w-full items-center justify-center gap-3 rounded-xl border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm font-semibold text-red-300 transition hover:border-[#ED1C24] hover:bg-[#ED1C24] hover:text-white"
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
                                        d="M17 16l4-4m0 0l-4-4m4 4H9m4 8H6a2 2 0 01-2-2V6a2 2 0 012-2h7"
                                    />
                                </svg>

                                Abmelden
                            </button>

                        </form>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="mt-3 flex w-full items-center justify-center gap-3 rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm font-semibold text-white/70 transition hover:bg-white/10 hover:text-white"
                        >
                            Anmelden
                        </a>
                    @endauth

                </div>

            </div>

        </aside>

        {{-- Mobile sidebar overlay --}}
        <div
            id="adminSidebarOverlay"
            class="fixed inset-0 z-40 hidden bg-black/50 backdrop-blur-sm lg:hidden"
        ></div>

        {{-- Main content --}}
        <div class="min-h-screen lg:ml-[280px]">

            {{-- Topbar --}}
            <header class="sticky top-0 z-30 border-b border-gray-200 bg-white/95 backdrop-blur-xl">

                <div class="flex min-h-[82px] items-center justify-between gap-5 px-5 sm:px-8">

                    <div class="flex min-w-0 items-center gap-4">

                        <button
                            type="button"
                            id="openAdminSidebar"
                            aria-label="Sidebar öffnen"
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-gray-200 bg-white text-[#262525] transition hover:border-[#ED1C24] hover:text-[#ED1C24] lg:hidden"
                        >
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
                                    d="M4 7h16M4 12h16M4 17h16"
                                />
                            </svg>
                        </button>

                        <div class="min-w-0">

                            <h1 class="truncate text-lg font-black sm:text-xl">
                                @yield('page-title', 'Immobilienverwaltung')
                            </h1>

                            <p class="hidden truncate text-sm text-gray-500 sm:block">
                                @yield(
                                    'page-description',
                                    'Übersicht und Verwaltung aller Immobilien'
                                )
                            </p>

                        </div>

                    </div>

                    <div class="flex items-center gap-3">

                        <a
                            href="{{ url('/') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="hidden items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-gray-600 transition hover:border-[#ED1C24] hover:text-[#ED1C24] sm:flex"
                        >
                            Website öffnen

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
                                    d="M14 3h7v7m0-7L10 14M5 7v12h12v-5"
                                />
                            </svg>
                        </a>

                        <button
                            type="button"
                            aria-label="Benachrichtigungen"
                            class="relative flex h-11 w-11 items-center justify-center rounded-xl border border-gray-200 bg-white text-gray-600 transition hover:border-[#ED1C24] hover:text-[#ED1C24]"
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
                                    d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 00-12 0v3.2a2 2 0 01-.6 1.4L4 17h5m6 0a3 3 0 01-6 0"
                                />
                            </svg>

                            <span class="absolute right-2 top-2 h-2 w-2 rounded-full bg-[#ED1C24]"></span>
                        </button>

                    </div>

                </div>

            </header>

            {{-- Page content --}}
            <main class="min-h-[calc(100vh-82px)] p-5 sm:p-8">

                @yield('content')

            </main>

        </div>

    </div>

    @stack('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('adminSidebar');
            const overlay = document.getElementById('adminSidebarOverlay');
            const openButton = document.getElementById('openAdminSidebar');
            const closeButton = document.getElementById('closeAdminSidebar');

            function openSidebar() {
                if (!sidebar || !overlay) {
                    return;
                }

                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeSidebar() {
                if (!sidebar || !overlay) {
                    return;
                }

                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            openButton?.addEventListener('click', openSidebar);
            closeButton?.addEventListener('click', closeSidebar);
            overlay?.addEventListener('click', closeSidebar);

            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    closeSidebar();
                }
            });

            window.addEventListener('resize', function () {
                if (window.innerWidth >= 1024) {
                    sidebar?.classList.remove('-translate-x-full');
                    overlay?.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                } else {
                    sidebar?.classList.add('-translate-x-full');
                }
            });
        });
    </script>

</body>

</html>