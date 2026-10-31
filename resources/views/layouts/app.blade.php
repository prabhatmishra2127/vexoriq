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
        <footer class="bg-gray-50 dark:bg-slate-950 py-10 border-t border-gray-200 dark:border-slate-800 transition-colors">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="md:col-span-1">
                        <a href="{{ route('home') }}" class="inline-flex flex-col w-fit mb-3 group">
                            <span class="text-2xl font-extrabold tracking-tighter leading-none">
                                TRIXO<span class="text-blue-600 dark:text-blue-500">IQ</span>
                            </span>
                            <span class="w-full text-[6px] font-bold tracking-tight text-blue-600 dark:text-blue-400 uppercase text-center mt-1 block">
                                Think Smart. Build Beyond.
                            </span>
                        </a>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">
                            Building premium digital solutions that convert visitors into clients.
                        </p>
                    </div>
                    <div>
                        <h4 class="font-bold mb-4 text-gray-900 dark:text-white">Services</h4>
                        <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                            <li><a href="{{ route('services.laravel') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Laravel Development</a></li>
                            <li><a href="{{ route('services.crm') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">CRM Systems</a></li>
                            <li><a href="{{ route('services.erp') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">ERP Solutions</a></li>
                            <li><a href="{{ route('services.business-website') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Business Websites</a></li>
                            <li><a href="{{ route('services.school-management') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">School Management</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-4 text-gray-900 dark:text-white">Company</h4>
                        <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                            <li><a href="{{ route('home') }}#about" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">About</a></li>
                            <li><a href="{{ route('blog.index') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Blog</a></li>
                            <li><a href="{{ route('home') }}#portfolio" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Portfolio</a></li>
                            <li><a href="{{ route('testimonials.index') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Testimonials</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-4 text-gray-900 dark:text-white">Admin</h4>
                        <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                            @auth
                                <li><a href="{{ route('dashboard') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Dashboard</a></li>
                            @else
                                <li><a href="{{ route('login') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Login</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-200 dark:border-gray-800 mt-12 pt-8 text-center text-sm text-gray-500 dark:text-gray-400">
                    &copy; {{ date('Y') }} Trixoiq. All rights reserved.
                </div>
            </div>
        </footer>

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
