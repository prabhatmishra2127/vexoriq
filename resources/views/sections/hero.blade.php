<section class="relative bg-slate-50 dark:bg-slate-900 overflow-hidden pt-20 pb-12 sm:pt-28 sm:pb-16 lg:pt-32 lg:pb-20 transition-colors duration-200">
    <!-- Abstract Backgrounds for Premium Effect (Vercel/Stripe style) -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute -top-[30%] -right-[10%] w-[70%] h-[70%] rounded-full bg-gradient-to-br from-primary/20 to-accent/10 blur-3xl"></div>
        <div class="absolute bottom-[10%] -left-[10%] w-[50%] h-[50%] rounded-full bg-gradient-to-tr from-secondary/20 to-primary/10 blur-3xl"></div>
        <!-- Grid Pattern overlay -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMCwwLDAsMC4wNSkiLz48L3N2Zz4=')] bg-[length:24px_24px] opacity-50" style="mask-image: linear-gradient(to bottom, white, transparent); -webkit-mask-image: linear-gradient(to bottom, white, transparent);"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            
            <!-- Left Side: Content -->
            <div class="max-w-2xl text-center lg:text-left mx-auto lg:mx-0">
                <!-- Trust Badges -->
                <div class="flex flex-wrap justify-center lg:justify-start gap-2 sm:gap-2.5 mb-5 sm:mb-6">
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-emerald-50 dark:bg-emerald-950/40 text-emerald-600 dark:text-emerald-400 text-[11px] sm:text-xs font-semibold border border-emerald-100 dark:border-emerald-800/40">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Fast Delivery
                    </span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-blue-50 dark:bg-blue-950/40 text-blue-600 dark:text-blue-400 text-[11px] sm:text-xs font-semibold border border-blue-100 dark:border-blue-800/40">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> SEO Optimized
                    </span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-purple-50 dark:bg-purple-950/40 text-purple-600 dark:text-purple-400 text-[11px] sm:text-xs font-semibold border border-purple-100 dark:border-purple-800/40">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg> Responsive
                    </span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-orange-50 dark:bg-orange-950/40 text-orange-600 dark:text-orange-400 text-[11px] sm:text-xs font-semibold border border-orange-100 dark:border-orange-800/40">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg> Ongoing Support
                    </span>
                </div>

                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold font-manrope text-dark dark:text-white tracking-tight mb-4 sm:mb-6 leading-[1.15]">
                    Build Modern <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-accent">Websites &amp; Web Applications</span> That Grow Your Business
                </h1>
                
                <p class="text-sm sm:text-base lg:text-lg text-slate-600 dark:text-slate-300 mb-8 sm:mb-10 leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Helping startups, educational institutes, businesses and entrepreneurs build scalable digital solutions with premium design and clean code.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mb-10 sm:mb-14 justify-center lg:justify-start">
                    <a href="{{ route('estimator') }}" class="w-full sm:w-auto inline-flex items-center justify-center bg-blue-600 text-white rounded-xl text-base px-6 sm:px-8 py-3.5 shadow-blue-500/20 shadow-xl hover:-translate-y-1 transition-transform font-bold">Estimate Project Cost</a>
                    <a href="{{ route('portfolio') }}" class="w-full sm:w-auto inline-flex items-center justify-center bg-white dark:bg-slate-800 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-white hover:border-blue-600 hover:text-blue-600 rounded-xl text-base px-6 sm:px-8 py-3.5 font-bold">View My Work</a>
                </div>

                <!-- Statistics with Animated Counters -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 pt-6 sm:pt-8 border-t border-slate-200/60 dark:border-slate-800" id="stats-container">
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold font-manrope text-dark dark:text-white flex items-baseline justify-center lg:justify-start">
                            <span class="counter" data-target="20">0</span><span class="text-primary">+</span>
                        </div>
                        <div class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-medium mt-1">Projects</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold font-manrope text-dark dark:text-white flex items-baseline justify-center lg:justify-start">
                            <span class="counter" data-target="10">0</span><span class="text-secondary">+</span>
                        </div>
                        <div class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-medium mt-1">Technologies</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold font-manrope text-dark dark:text-white flex items-baseline justify-center lg:justify-start">
                            <span class="counter" data-target="100">0</span><span class="text-accent">%</span>
                        </div>
                        <div class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-medium mt-1">Commitment</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold font-manrope text-dark dark:text-white flex items-baseline justify-center lg:justify-start">
                            <span class="counter" data-target="3">0</span><span class="text-primary">+</span>
                        </div>
                        <div class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-medium mt-1">Years Learning</div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Trixoiq Web Development Workspace Image -->
            <div class="relative w-full max-w-lg mx-auto lg:max-w-none lg:-translate-y-6 mt-4 lg:mt-0">
                <!-- Soft Glow Effect -->
                <div class="absolute -inset-2 bg-gradient-to-tr from-blue-600/20 via-indigo-600/20 to-purple-600/10 rounded-3xl blur-2xl pointer-events-none"></div>

                <!-- Clean Image Card -->
                <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl border border-slate-200/80 dark:border-slate-800 bg-white dark:bg-slate-900">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=900&q=80" 
                         alt="Trixoiq - Web Development & Modern Software Solutions" 
                         class="w-full h-[240px] sm:h-[380px] lg:h-[480px] object-cover object-center transform hover:scale-105 transition-transform duration-700"
                         loading="eager">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Animated Counters Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        const speed = 200; 

        const animateCounters = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-target');
                        const count = +counter.innerText;
                        const inc = target / speed;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + inc);
                            setTimeout(updateCount, 15);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                    observer.unobserve(counter); // Only animate once
                }
            });
        };

        const observer = new IntersectionObserver(animateCounters, {
            threshold: 0.5
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>
