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
        <header x-data="{ mobileMenuOpen: false }" @click.away="mobileMenuOpen = false" class="fixed w-full top-0 z-50 bg-white/90 dark:bg-slate-900/90 backdrop-blur-md border-b border-gray-100 dark:border-slate-800 transition-colors">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16 sm:h-20">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="inline-flex flex-col w-fit group">
                            <span class="text-xl sm:text-2xl font-extrabold tracking-tighter leading-none">
                                TRIXO<span class="text-blue-600 dark:text-blue-500">IQ</span>
                            </span>
                            <span class="w-full text-[6px] sm:text-[7px] font-bold tracking-tight text-gray-500 dark:text-gray-400 uppercase text-center mt-0.5 sm:mt-1 block">
                                Think Smart. Build Beyond.
                            </span>
                        </a>
                    </div>
                    
                    <!-- Desktop Nav -->
                    <nav class="hidden md:flex space-x-6 lg:space-x-8 items-center">
                        <a href="{{ route('home') }}" class="text-sm font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Home</a>
                        <a href="{{ route('home') }}#services" class="text-sm font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Services</a>
                        <a href="{{ route('portfolio') }}" class="text-sm font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Portfolio</a>
                        <a href="{{ route('estimator') }}" class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors">Estimator</a>
                        <a href="{{ route('blog.index') }}" class="text-sm font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Blog</a>
                        <a href="{{ route('testimonials.index') }}" class="text-sm font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Testimonials</a>
                        
                        <!-- Dark Mode Toggle -->
                        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg text-sm p-2.5 transition-colors" aria-label="Toggle dark mode">
                            <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>

                        <a href="{{ route('contact') }}" class="px-5 py-2.5 rounded-full bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition-colors shadow-sm">
                            Get a Quote
                        </a>
                    </nav>

                    <!-- Mobile menu button & Mobile Dark Mode -->
                    <div class="flex items-center md:hidden gap-2">
                        <!-- Mobile Dark Mode Toggle -->
                        <button id="theme-toggle-mobile" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg text-sm p-2 transition-colors" aria-label="Toggle dark mode">
                            <svg id="theme-toggle-dark-icon-mobile" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon-mobile" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>

                        <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" class="inline-flex items-center justify-center p-2.5 rounded-lg text-gray-600 dark:text-gray-300 hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none transition-colors" aria-expanded="false" aria-label="Toggle navigation menu">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': mobileMenuOpen, 'inline-flex': !mobileMenuOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': !mobileMenuOpen, 'inline-flex': mobileMenuOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Dropdown -->
            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-2"
                 style="display: none;"
                 class="md:hidden bg-white/95 dark:bg-slate-900/95 backdrop-blur-xl border-b border-gray-100 dark:border-slate-800 shadow-2xl">
                <div class="px-4 pt-3 pb-6 space-y-1.5 sm:px-6">
                    <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="block px-3.5 py-2.5 rounded-lg text-base font-medium text-gray-800 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/50 dark:hover:bg-slate-800 transition-colors">Home</a>
                    <a href="{{ route('home') }}#services" @click="mobileMenuOpen = false" class="block px-3.5 py-2.5 rounded-lg text-base font-medium text-gray-800 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/50 dark:hover:bg-slate-800 transition-colors">Services</a>
                    <a href="{{ route('portfolio') }}" @click="mobileMenuOpen = false" class="block px-3.5 py-2.5 rounded-lg text-base font-medium text-gray-800 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/50 dark:hover:bg-slate-800 transition-colors">Portfolio</a>
                    <a href="{{ route('estimator') }}" @click="mobileMenuOpen = false" class="block px-3.5 py-2.5 rounded-lg text-base font-semibold text-blue-600 dark:text-blue-400 hover:bg-blue-50/50 dark:hover:bg-slate-800 transition-colors">Project Estimator</a>
                    <a href="{{ route('blog.index') }}" @click="mobileMenuOpen = false" class="block px-3.5 py-2.5 rounded-lg text-base font-medium text-gray-800 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/50 dark:hover:bg-slate-800 transition-colors">Blog</a>
                    <a href="{{ route('testimonials.index') }}" @click="mobileMenuOpen = false" class="block px-3.5 py-2.5 rounded-lg text-base font-medium text-gray-800 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/50 dark:hover:bg-slate-800 transition-colors">Testimonials</a>
                    <div class="pt-3">
                        <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="block w-full py-3 text-center rounded-xl text-base font-bold bg-blue-600 text-white hover:bg-blue-700 shadow-md transition-colors">Get a Free Quote</a>
                    </div>
                </div>
            </div>
        </header>

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
