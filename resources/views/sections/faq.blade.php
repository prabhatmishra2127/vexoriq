<section class="pt-10 sm:pt-14 pb-10 sm:pb-14 bg-white dark:bg-slate-900 transition-colors duration-200" id="faq">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-8 sm:mb-10">
            <span class="text-blue-600 dark:text-blue-400 font-bold tracking-wider uppercase text-xs sm:text-sm mb-2 block">Common Questions</span>
            <h2 class="text-2xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-3">
                Frequently Asked Questions
            </h2>
            <p class="text-sm sm:text-base md:text-lg text-gray-500 dark:text-gray-400 max-w-xl mx-auto">
                Everything you need to know about our services and development process.
            </p>
        </div>

        <div x-data="{ active: null }" class="space-y-3">
            
            @php
                $faqs = [
                    [
                        'q' => 'How long does development typically take?',
                        'a' => 'A standard business website takes 2-4 weeks. An e-commerce platform takes 4-6 weeks, and custom software or SaaS products typically take 8-12 weeks from planning to launch.'
                    ],
                    [
                        'q' => 'Will I be able to update the website myself?',
                        'a' => 'Yes, I build custom Admin Dashboards tailored specifically to your needs. You will be able to easily update text, images, blogs, and products without any coding knowledge.'
                    ],
                    [
                        'q' => 'Do you provide ongoing support and maintenance?',
                        'a' => 'Yes! Launching the project is just the beginning. I offer ongoing support, maintenance, security updates, and performance monitoring to ensure your digital asset runs flawlessly.'
                    ],
                    [
                        'q' => 'Do I own the code after the project is completed?',
                        'a' => 'Yes. Once the final invoice is paid, you retain 100% intellectual property rights and full ownership of the source code.'
                    ],
                    [
                        'q' => 'Do you redesign existing websites?',
                        'a' => 'Absolutely. If your current website is outdated, slow, or not converting visitors into leads, we can completely overhaul the design and underlying technology while preserving your SEO rankings.'
                    ],
                    [
                        'q' => 'How do we communicate during the project?',
                        'a' => 'We maintain transparent communication via email, WhatsApp, and weekly Google Meet/Zoom calls. You will always know exactly what is being worked on and the current status of your project.'
                    ]
                ];
            @endphp

            @foreach($faqs as $index => $faq)
            <div class="bg-white dark:bg-slate-800 rounded-xl sm:rounded-2xl shadow-sm border border-gray-100 dark:border-slate-700/80 overflow-hidden transition-colors">
                <button @click="active === {{ $index }} ? active = null : active = {{ $index }}" 
                        class="w-full px-4 sm:px-6 py-4 text-left flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset min-h-[48px]">
                    <span class="text-sm sm:text-base md:text-lg font-bold text-gray-900 dark:text-white pr-4 leading-snug">{{ $faq['q'] }}</span>
                    <span class="text-blue-600 dark:text-blue-400 transform transition-transform duration-300 flex-shrink-0" 
                          :class="active === {{ $index }} ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </button>
                <div x-show="active === {{ $index }}" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-2"
                     class="px-4 sm:px-6 pb-4 pt-2 text-gray-600 dark:text-gray-300 leading-relaxed text-xs sm:text-sm md:text-base border-t border-gray-50 dark:border-slate-700/50">
                    {!! $faq['a'] !!}
                </div>
            </div>
            @endforeach

        </div>

        <div class="mt-8 sm:mt-10 text-center">
            <p class="text-gray-500 dark:text-gray-400 mb-3 text-xs sm:text-sm">Still have questions?</p>
            <a href="{{ route('contact') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 border border-transparent text-sm sm:text-base font-semibold rounded-xl text-blue-700 bg-blue-100 dark:bg-blue-900/50 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-900 transition-colors shadow-sm">
                Contact Me Directly
            </a>
        </div>

    </div>
</section>
