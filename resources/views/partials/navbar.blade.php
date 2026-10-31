<!-- Main Public Navbar Component -->
<header x-data="{ mobileMenuOpen: false }" 
        @click.away="mobileMenuOpen = false" 
        class="fixed w-full top-0 left-0 z-50 bg-white/90 dark:bg-slate-900/90 backdrop-blur-md border-b border-gray-100 dark:border-slate-800 transition-colors">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 sm:h-20">
            
            <!-- Left: Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="inline-flex flex-col w-fit group">
                    <span class="text-xl sm:text-2xl font-extrabold tracking-tighter leading-none text-gray-900 dark:text-white">
                        TRIXO<span class="text-blue-600 dark:text-blue-500">IQ</span>
                    </span>
                    <span class="w-full text-[6px] sm:text-[7px] font-bold tracking-tight text-gray-500 dark:text-gray-400 uppercase text-center mt-0.5 sm:mt-1 block">
                        Think Smart. Build Beyond.
                    </span>
                </a>
            </div>

            <!-- Center/Right: Desktop Navigation -->
            <nav class="hidden md:flex space-x-6 lg:space-x-8 items-center">
                <a href="{{ route('home') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors {{ request()->routeIs('home') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">Home</a>
                <a href="{{ route('home') }}#services" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Services</a>
                <a href="{{ route('portfolio') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors {{ request()->routeIs('portfolio*') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">Portfolio</a>
                <a href="{{ route('estimator') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 transition-colors">
                    <span>Estimator</span>
                    <span class="px-1.5 py-0.5 text-[10px] uppercase font-bold tracking-wider bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 rounded-full">Calc</span>
                </a>
                <a href="{{ route('blog.index') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors {{ request()->routeIs('blog*') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">Blog</a>
                <a href="{{ route('testimonials.index') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors {{ request()->routeIs('testimonials*') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">Reviews</a>
                
                <!-- Desktop Dark Mode Toggle -->
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-slate-800 rounded-lg text-sm p-2.5 transition-colors" aria-label="Toggle dark mode">
                    <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>

                <a href="{{ route('contact') }}" class="px-5 py-2.5 rounded-full bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition-colors shadow-sm">
                    Get a Quote
                </a>
            </nav>

            <!-- Mobile Controls (Quick Call + Dark Mode + Hamburger) -->
            <div class="flex items-center md:hidden gap-1.5 sm:gap-2">
                <!-- Mobile Quick Call Button -->
                <a href="tel:+919305032850" class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-400 hover:bg-blue-100 dark:hover:bg-blue-900/60 transition-colors" aria-label="Call Trixoiq Support">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </a>

                <!-- Mobile Dark Mode Toggle -->
                <button id="theme-toggle-mobile" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-slate-800 rounded-full w-9 h-9 flex items-center justify-center transition-colors" aria-label="Toggle dark mode">
                    <svg id="theme-toggle-dark-icon-mobile" class="w-4 h-4 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon-mobile" class="w-4 h-4 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>

                <!-- Hamburger Button -->
                <button type="button" 
                        @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="inline-flex items-center justify-center w-10 h-10 rounded-xl text-gray-700 dark:text-gray-200 bg-gray-100/80 dark:bg-slate-800/80 hover:bg-gray-200 dark:hover:bg-slate-700 focus:outline-none transition-colors" 
                        :aria-expanded="mobileMenuOpen" 
                        aria-label="Toggle navigation menu">
                    <svg class="h-5 w-5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': mobileMenuOpen, 'inline-flex': !mobileMenuOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !mobileMenuOpen, 'inline-flex': mobileMenuOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Backdrop Overlay -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition-opacity ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="mobileMenuOpen = false" 
         class="fixed inset-0 top-16 sm:top-20 bg-slate-950/40 backdrop-blur-sm z-40 md:hidden"
         style="display: none;">
    </div>

    <!-- Mobile Menu Dropdown Drawer -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2 scale-98"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 -translate-y-2 scale-98"
         style="display: none;"
         class="fixed top-16 sm:top-20 left-0 w-full max-h-[calc(100dvh-4.25rem)] overflow-y-auto bg-white/98 dark:bg-slate-900/98 backdrop-blur-2xl border-b border-gray-200 dark:border-slate-800 shadow-2xl z-50 md:hidden">
        
        <div class="px-4 pt-3 pb-6 space-y-1 sm:px-6">
            
            <!-- Home -->
            <a href="{{ route('home') }}" 
               @click="mobileMenuOpen = false" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-base font-medium text-gray-800 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/60 dark:hover:bg-slate-800/80 transition-colors {{ request()->routeIs('home') ? 'bg-blue-50/80 dark:bg-slate-800/90 text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
                <div class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-slate-800 text-blue-600 dark:text-blue-400 flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </div>
                <span>Home</span>
            </a>

            <!-- Services -->
            <a href="{{ route('home') }}#services" 
               @click="mobileMenuOpen = false" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-base font-medium text-gray-800 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/60 dark:hover:bg-slate-800/80 transition-colors">
                <div class="w-8 h-8 rounded-lg bg-indigo-50 dark:bg-slate-800 text-indigo-600 dark:text-indigo-400 flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <span>Services</span>
            </a>

            <!-- Portfolio -->
            <a href="{{ route('portfolio') }}" 
               @click="mobileMenuOpen = false" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-base font-medium text-gray-800 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/60 dark:hover:bg-slate-800/80 transition-colors {{ request()->routeIs('portfolio*') ? 'bg-blue-50/80 dark:bg-slate-800/90 text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
                <div class="w-8 h-8 rounded-lg bg-purple-50 dark:bg-slate-800 text-purple-600 dark:text-purple-400 flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                </div>
                <span>Portfolio</span>
            </a>

            <!-- Project Estimator -->
            <a href="{{ route('estimator') }}" 
               @click="mobileMenuOpen = false" 
               class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-base font-semibold text-blue-600 dark:text-blue-400 hover:bg-blue-50/80 dark:hover:bg-slate-800/80 transition-colors {{ request()->routeIs('estimator') ? 'bg-blue-50 dark:bg-slate-800' : '' }}">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 dark:bg-slate-800 text-emerald-600 dark:text-emerald-400 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <span>Project Estimator</span>
                </div>
                <span class="px-2 py-0.5 text-[11px] font-bold bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 rounded-full">Instant</span>
            </a>

            <!-- Blog -->
            <a href="{{ route('blog.index') }}" 
               @click="mobileMenuOpen = false" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-base font-medium text-gray-800 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/60 dark:hover:bg-slate-800/80 transition-colors {{ request()->routeIs('blog*') ? 'bg-blue-50/80 dark:bg-slate-800/90 text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
                <div class="w-8 h-8 rounded-lg bg-amber-50 dark:bg-slate-800 text-amber-600 dark:text-amber-400 flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                </div>
                <span>Blog &amp; Insights</span>
            </a>

            <!-- Testimonials -->
            <a href="{{ route('testimonials.index') }}" 
               @click="mobileMenuOpen = false" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-base font-medium text-gray-800 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/60 dark:hover:bg-slate-800/80 transition-colors {{ request()->routeIs('testimonials*') ? 'bg-blue-50/80 dark:bg-slate-800/90 text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
                <div class="w-8 h-8 rounded-lg bg-rose-50 dark:bg-slate-800 text-rose-600 dark:text-rose-400 flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                </div>
                <span>Client Reviews</span>
            </a>

            <!-- Contact -->
            <a href="{{ route('contact') }}" 
               @click="mobileMenuOpen = false" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-base font-medium text-gray-800 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50/60 dark:hover:bg-slate-800/80 transition-colors {{ request()->routeIs('contact') ? 'bg-blue-50/80 dark:bg-slate-800/90 text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
                <div class="w-8 h-8 rounded-lg bg-teal-50 dark:bg-slate-800 text-teal-600 dark:text-teal-400 flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <span>Contact Us</span>
            </a>

            <!-- Direct Contact Card & Primary CTA -->
            <div class="pt-3 border-t border-gray-100 dark:border-slate-800 mt-2 space-y-2.5">
                <a href="tel:+919305032850" class="flex items-center justify-center gap-2.5 w-full py-2.5 px-4 rounded-xl text-sm font-semibold bg-gray-100 dark:bg-slate-800 text-gray-800 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-slate-700 transition-colors">
                    <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>Direct Call: +91 93050 32850</span>
                </a>

                <a href="{{ route('contact') }}" 
                   @click="mobileMenuOpen = false" 
                   class="flex items-center justify-center gap-2 w-full py-3.5 px-4 rounded-xl text-base font-bold bg-blue-600 text-white hover:bg-blue-700 shadow-lg shadow-blue-600/20 transition-all">
                    <span>Get a Free Quote</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

        </div>
    </div>
</header>
