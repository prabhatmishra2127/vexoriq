<!-- Premium Mobile-First Footer Component -->
<footer class="bg-slate-900 text-slate-300 pt-10 pb-8 sm:pt-14 sm:pb-10 border-t border-slate-800 transition-colors relative overflow-hidden">
    <!-- Subtle gradient accent line -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Top Section: Brand + Status + Fast Contact -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 pb-8 border-b border-slate-800/80">
            <div>
                <a href="{{ route('home') }}" class="inline-flex flex-col w-fit group">
                    <span class="text-2xl font-extrabold tracking-tighter leading-none text-white">
                        TRIXO<span class="text-blue-500">IQ</span>
                    </span>
                    <span class="text-[7px] font-bold tracking-widest text-blue-400 uppercase mt-1 block">
                        Think Smart. Build Beyond.
                    </span>
                </a>
                <p class="text-slate-400 text-xs sm:text-sm mt-2 max-w-sm leading-relaxed">
                    High-impact websites, CRM, ERP, and bespoke software solutions built for business growth.
                </p>
            </div>

            <!-- Availability Badge + Action Buttons -->
            <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                <!-- Status Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-medium w-fit">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    Available for new projects
                </div>

                <!-- Direct Contact Buttons -->
                <div class="flex items-center gap-2">
                    <a href="tel:+919305032850" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold transition-colors border border-slate-700/60">
                        <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call</span>
                    </a>
                    <a href="https://wa.me/919305032850" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-950/60 hover:bg-emerald-900/60 text-emerald-300 text-xs font-semibold transition-colors border border-emerald-700/40">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        <span>WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Links Grid: 2 Columns on Mobile, 4 Columns on Desktop -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 py-8">
            
            <!-- Column 1: Services -->
            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-3 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Services
                </h4>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-400">
                    <li><a href="{{ route('services.laravel') }}" class="hover:text-blue-400 transition-colors">Laravel Web Apps</a></li>
                    <li><a href="{{ route('services.crm') }}" class="hover:text-blue-400 transition-colors">Custom CRM Systems</a></li>
                    <li><a href="{{ route('services.erp') }}" class="hover:text-blue-400 transition-colors">ERP Solutions</a></li>
                    <li><a href="{{ route('services.business-website') }}" class="hover:text-blue-400 transition-colors">Corporate Websites</a></li>
                    <li><a href="{{ route('services.school-management') }}" class="hover:text-blue-400 transition-colors">School Management</a></li>
                </ul>
            </div>

            <!-- Column 2: Company -->
            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-3 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span> Company
                </h4>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-400">
                    <li><a href="{{ route('home') }}#about" class="hover:text-blue-400 transition-colors">About Agency</a></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-blue-400 transition-colors">Case Studies</a></li>
                    <li><a href="{{ route('estimator') }}" class="hover:text-blue-400 transition-colors">Cost Estimator</a></li>
                    <li><a href="{{ route('blog.index') }}" class="hover:text-blue-400 transition-colors">Tech Blog</a></li>
                    <li><a href="{{ route('testimonials.index') }}" class="hover:text-blue-400 transition-colors">Client Reviews</a></li>
                </ul>
            </div>

            <!-- Column 3: Core Tech Stack -->
            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-3 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span> Core Stack
                </h4>
                <div class="flex flex-wrap gap-1.5 text-[11px] text-slate-300">
                    <span class="px-2 py-0.5 rounded bg-slate-800 border border-slate-700/60">Laravel</span>
                    <span class="px-2 py-0.5 rounded bg-slate-800 border border-slate-700/60">React</span>
                    <span class="px-2 py-0.5 rounded bg-slate-800 border border-slate-700/60">Vue.js</span>
                    <span class="px-2 py-0.5 rounded bg-slate-800 border border-slate-700/60">Tailwind</span>
                    <span class="px-2 py-0.5 rounded bg-slate-800 border border-slate-700/60">MySQL</span>
                    <span class="px-2 py-0.5 rounded bg-slate-800 border border-slate-700/60">REST APIs</span>
                </div>
            </div>

            <!-- Column 4: Quick Project CTA Box -->
            <div class="col-span-2 md:col-span-1 bg-slate-800/60 rounded-xl p-4 border border-slate-700/50">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-1.5">Have a Project?</h4>
                <p class="text-slate-400 text-xs mb-3 leading-relaxed">
                    Let's discuss how we can build your scalable web solution.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center w-full py-2.5 px-3 rounded-lg bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold shadow-md transition-all">
                    Start a Project &rarr;
                </a>
            </div>

        </div>

        <!-- Bottom Bar: Copyright + Back to Top + Admin -->
        <div class="border-t border-slate-800/80 pt-6 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-3">
            <div>
                &copy; {{ date('Y') }} Trixoiq. All rights reserved.
            </div>
            
            <div class="flex items-center gap-4 text-xs">
                <a href="{{ route('contact') }}" class="hover:text-slate-300 transition-colors">Contact</a>
                <span class="text-slate-700">&bull;</span>
                @auth
                    <a href="{{ route('dashboard') }}" class="text-blue-400 hover:text-blue-300 font-semibold transition-colors">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="hover:text-slate-300 transition-colors">Admin</a>
                @endauth
                <span class="text-slate-700">&bull;</span>
                <button type="button" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="inline-flex items-center gap-1 hover:text-white transition-colors cursor-pointer text-slate-400">
                    <span>Back to top</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
            </div>
        </div>

    </div>
</footer>
