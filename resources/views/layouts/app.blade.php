<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Trixoiq'))</title>
        <meta name="description" content="@yield('meta_description', 'Trixoiq - Think Smart. Build Beyond. Professional web development, Laravel, React, and business software solutions.')">
        
        <!-- Open Graph -->
        <meta property="og:title" content="@yield('title', config('app.name', 'Trixoiq'))">
        <meta property="og:description" content="@yield('meta_description', 'Trixoiq - Think Smart. Build Beyond. Professional web development and business software solutions.')">
        @if(View::hasSection('og_image'))
            <meta property="og:image" content="@yield('og_image')">
        @endif
        <meta property="og:type" content="website">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Dark Mode Script -->
        <script>
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
        
        <!-- Organization & Website Schema -->
        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": ["Organization", "WebSite"],
          "name": "Trixoiq",
          "url": "{{ url('/') }}",
          "logo": "{{ url('/logo.png') }}",
          "founder": {
            "@@type": "Person",
            "name": "Prabhat Mishra"
          },
          "description": "Professional web development, Laravel, React, and business software solutions.",
          "contactPoint": {
            "@@type": "ContactPoint",
            "contactType": "Customer Service",
            "telephone": "+91-9305032850",
            "url": "{{ url('/contact') }}"
          }
        }
        </script>
        @stack('schema')
    </head>
    <body class="font-sans antialiased text-gray-900 dark:text-gray-100 bg-white dark:bg-slate-900 transition-colors duration-200 overflow-x-hidden min-w-[320px]">
        
        <!-- Public Navigation / Header -->
        @include('partials.navbar')

        <!-- Page Content -->
        <main>
            @yield('content')
            @isset($slot)
                {{ $slot }}
            @endisset
        </main>

        <!-- Footer -->
        @include('partials.footer')

        <!-- Dark Mode Toggle Logic -->
        <script>
            // Desktop
            var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
            var themeToggleBtn = document.getElementById('theme-toggle');

            // Mobile
            var themeToggleDarkIconMobile = document.getElementById('theme-toggle-dark-icon-mobile');
            var themeToggleLightIconMobile = document.getElementById('theme-toggle-light-icon-mobile');
            var themeToggleBtnMobile = document.getElementById('theme-toggle-mobile');

            // Initialize icons based on theme
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                if(themeToggleLightIcon) themeToggleLightIcon.classList.remove('hidden');
                if(themeToggleLightIconMobile) themeToggleLightIconMobile.classList.remove('hidden');
            } else {
                if(themeToggleDarkIcon) themeToggleDarkIcon.classList.remove('hidden');
                if(themeToggleDarkIconMobile) themeToggleDarkIconMobile.classList.remove('hidden');
            }

            function toggleTheme() {
                if(themeToggleDarkIcon) themeToggleDarkIcon.classList.toggle('hidden');
                if(themeToggleLightIcon) themeToggleLightIcon.classList.toggle('hidden');
                if(themeToggleDarkIconMobile) themeToggleDarkIconMobile.classList.toggle('hidden');
                if(themeToggleLightIconMobile) themeToggleLightIconMobile.classList.toggle('hidden');

                if (localStorage.theme === 'dark') {
                    document.documentElement.classList.remove('dark');
                    localStorage.theme = 'light';
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.theme = 'dark';
                }
            }

            if(themeToggleBtn) themeToggleBtn.addEventListener('click', toggleTheme);
            if(themeToggleBtnMobile) themeToggleBtnMobile.addEventListener('click', toggleTheme);
        </script>
        
        <x-whatsapp-button />
    </body>
</html>
