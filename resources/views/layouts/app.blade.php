<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Your Dashboard') }}</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
        />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('js/init-view.js') }}" ></script>
        <script src="{{ asset('js/focus-trap.js') }}" ></script>
    </head>
    <body class="font-sans antialiased">
        <div :class="{ 'overflow-hidden': isSideMenuOpen}" class="flex h-screen bg-gray-50 dark:bg-gray-900">

            <!-- Sidebars -->
            <x-layout.sidebar.desktop-sidebar>
                <!-- Foreach through modules avail for user -->
                <x-layout.modules.dashboard :active="request()->routeIs('dashboard')" />
            </x-layout.sidebar.desktop-sidebar>
            <x-layout.sidebar.mobile-sidebar />
            <!-- /Sidebars -->

            <div class="flex flex-col flex-1">

                <!-- Top Nav -->
                <x-layout.nav.navbar search="true" notifications="true" />
                <!-- /Top Nav -->

                <!-- Body -->
                <main class="h-full pb-6 overflow-y-auto">
                    <div class="container mx-auto grid">
                        @if (isset($header))
                            <header class="xborder-b-2 border-gray-100">
                                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif
                        <div class="px-4">
                            {{ $slot }}
                        </div>
                    </div>
                </main>
                <!-- /Body -->

            </div>

        </div>
        @stack('scripts')
        @stack('modals')
        @livewireScripts
    </body>
</html>
