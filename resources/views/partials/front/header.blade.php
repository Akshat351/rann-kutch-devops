 <header class="sticky top-0 z-50 w-full border-b bg-white/95 backdrop-blur">
     <!-- Top Bar -->
     <div class="border-b bg-secondary">
         <div class="container mx-auto px-4 py-2">
             <div class="flex justify-between items-center text-sm">
                 <div class="flex items-center gap-4">
                     <a href="tel:{{ config('settings.tel_code') }}"
                         class="flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors">
                         <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                         </svg>
                         <span>{{ config('settings.mobile') }}</span>
                     </a>
                     <a href="https://wa.me/{{ config('settings.whatsapp_number') }}" target="_blank"
                         class="flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors">
                         <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                             <path
                                 d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                         </svg>
                         <span>WhatsApp</span>
                     </a>
                 </div>
                 <div class="flex items-center gap-3">
                     <a href="{{ config('settings.facebook_url') ?: 'javascript:void(0)' }}"
                         class="text-muted-foreground hover:text-primary transition-colors">
                         <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                             <path
                                 d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                         </svg>
                     </a>
                     <a href="{{ config('settings.twitter_url') ?: 'javascript:void(0)' }}"
                         class="text-muted-foreground hover:text-primary transition-colors">
                         <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                             <path
                                 d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                         </svg>
                     </a>
                     <a href="{{ config('settings.instagram_url') ?: 'javascript:void(0)' }}"
                         class="text-muted-foreground hover:text-primary transition-colors">
                         <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                             <path
                                 d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                         </svg>
                     </a>
                 </div>
             </div>
         </div>
     </div>

     <!-- Main Navigation -->
     <div class="container mx-auto flex h-20 items-center justify-between px-4">
         <a href="{{ route('home') }}" class="flex items-center">
             {{-- <div class="text-2xl font-bold bg-gradient-to-r from-primary via-accent to-trust bg-clip-text text-transparent"> --}}
             <img src="{{ asset('assets/images/rann-of-kutch-logo.png') }}" alt="Rann Kutch Taxi"
                 class="h-[70px] w-auto">
             {{-- </div> --}}
         </a>

         <!-- Desktop Menu -->
         <nav class="hidden md:flex items-center space-x-6">
             <a href="{{ route('about') }}"
                 class="text-sm font-medium hover:text-accent transition-colors {{ request()->routeIs('about') ? 'text-accent font-semibold' : '' }}">About</a>

             <!-- Services Dropdown -->
             @php
                 // Check if current route matches any of these service pages
                 $servicesActive = request()->routeIs(
                     'one-way-taxi',
                     'outstation-taxi',
                     'airport-taxi',
                     'local-taxi',
                     'car-rental',
                 );
             @endphp

             <div class="relative group">
                 <button
                     class="text-sm font-medium flex items-center gap-1 transition-colors {{ $servicesActive ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                     Services
                     <svg class="h-4 w-4 transition-transform group-hover:rotate-180" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>

                 <div
                     class="absolute top-full left-0 mt-2 w-[400px] bg-white rounded-lg shadow-xl border-2 border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                     <div class="p-6 space-y-2">

                         <a href="{{ route('one-way-taxi') }}"
                             class="block p-3 rounded-md transition-colors {{ request()->routeIs('one-way-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                             <div class="text-sm font-medium">One Way Taxi</div>
                             <p class="text-xs text-muted-foreground mt-1">Point-to-point drop-off service for one-way
                                 journeys</p>
                         </a>

                         <a href="{{ route('outstation-taxi') }}"
                             class="block p-3 rounded-md transition-colors {{ request()->routeIs('outstation-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                             <div class="text-sm font-medium">Outstation Taxi</div>
                             <p class="text-xs text-muted-foreground mt-1">Multi-day journeys with multiple stops and
                                 sightseeing</p>
                         </a>

                         <a href="{{ route('airport-taxi') }}"
                             class="block p-3 rounded-md transition-colors {{ request()->routeIs('airport-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                             <div class="text-sm font-medium">Airport Taxi</div>
                             <p class="text-xs text-muted-foreground mt-1">Reliable airport transfers from major
                                 airports</p>
                         </a>

                         <a href="{{ route('local-taxi') }}"
                             class="block p-3 rounded-md transition-colors {{ request()->routeIs('local-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                             <div class="text-sm font-medium">Local Taxi</div>
                             <p class="text-xs text-muted-foreground mt-1">Local sightseeing within the Kutch region</p>
                         </a>

                         <a href="{{ route('car-rental') }}"
                             class="block p-3 rounded-md transition-colors {{ request()->routeIs('car-rental') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                             <div class="text-sm font-medium">Car Rental</div>
                             <p class="text-xs text-muted-foreground mt-1">Hire vehicles with experienced drivers</p>
                         </a>

                     </div>
                 </div>
             </div>

             <!-- Routes Dropdown -->
             @php
                 // Highlight "Routes" button if any URL contains these patterns
                 $routesActive = request()->is('rann-of-kutch-to-*') || request()->is('*-to-rann-of-kutch*');
             @endphp

             <div class="relative group">
                 <button
                     class="text-sm font-medium flex items-center gap-1 transition-colors {{ $routesActive ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                     Routes
                     <svg class="h-4 w-4 transition-transform group-hover:rotate-180" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>

                 <div
                     class="absolute top-full right-0 left-0 mt-2 w-[400px] bg-white rounded-lg shadow-xl border-2 border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                     <div class="p-6 space-y-2 max-h-[500px] overflow-y-auto overscroll-contain pr-2 menu-scroll">

                         {{-- From Rann of Kutch --}}
                         <div>
                             <h4 class="text-xs font-semibold text-primary uppercase tracking-wider mb-3">From Rann of
                                 Kutch</h4>
                             <div class="space-y-2">
                                 <a href="{{ url('rann-of-kutch-to-ahmedabad-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('rann-of-kutch-to-ahmedabad-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Rann of Kutch → Ahmedabad</div>
                                     <p class="text-xs text-muted-foreground mt-1">Quick & reliable transfer</p>
                                 </a>

                                 <a href="{{ url('rann-of-kutch-to-bhuj-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('rann-of-kutch-to-bhuj-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Rann of Kutch → Bhuj</div>
                                     <p class="text-xs text-muted-foreground mt-1">Quick & reliable transfer</p>
                                 </a>

                                 <a href="{{ url('rann-of-kutch-to-mandvi-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('rann-of-kutch-to-mandvi-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Rann of Kutch → Mandvi</div>
                                     <p class="text-xs text-muted-foreground mt-1">Quick & reliable transfer</p>
                                 </a>

                                 <a href="{{ url('rann-of-kutch-to-rajkot-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('rann-of-kutch-to-rajkot-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Rann of Kutch → Rajkot</div>
                                     <p class="text-xs text-muted-foreground mt-1">Quick & reliable transfer</p>
                                 </a>

                                 <a href="{{ url('rann-of-kutch-to-vadodara-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('rann-of-kutch-to-vadodara-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Rann of Kutch → Vadodara</div>
                                     <p class="text-xs text-muted-foreground mt-1">Quick & reliable transfer</p>
                                 </a>
                             </div>
                         </div>

                         {{-- To Rann of Kutch --}}
                         <div class="pt-4 border-t">
                             <h4 class="text-xs font-semibold text-accent uppercase tracking-wider mb-3">To Rann of
                                 Kutch</h4>
                             <div class="space-y-2">
                                 <a href="{{ url('ahmedabad-to-rann-of-kutch-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('ahmedabad-to-rann-of-kutch-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Ahmedabad → Rann of Kutch</div>
                                     <p class="text-xs text-muted-foreground mt-1">Comfortable journey</p>
                                 </a>

                                 <a href="{{ url('bhuj-to-rann-of-kutch-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('bhuj-to-rann-of-kutch-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Bhuj → Rann of Kutch</div>
                                     <p class="text-xs text-muted-foreground mt-1">Comfortable journey</p>
                                 </a>

                                 <a href="{{ url('rajkot-to-rann-of-kutch-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('rajkot-to-rann-of-kutch-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Rajkot → Rann of Kutch</div>
                                     <p class="text-xs text-muted-foreground mt-1">Comfortable journey</p>
                                 </a>

                                 <a href="{{ url('vadodara-to-rann-of-kutch-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('vadodara-to-rann-of-kutch-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Vadodara → Rann of Kutch</div>
                                     <p class="text-xs text-muted-foreground mt-1">Comfortable journey</p>
                                 </a>

                                 <a href="{{ url('mumbai-to-rann-of-kutch-taxi') }}"
                                     class="block p-3 rounded-md transition-colors {{ request()->is('mumbai-to-rann-of-kutch-taxi') ? 'bg-accent/10 text-accent font-medium' : 'hover:bg-accent/10 hover:text-accent' }}">
                                     <div class="text-sm font-medium">Mumbai → Rann of Kutch</div>
                                     <p class="text-xs text-muted-foreground mt-1">Comfortable journey</p>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <a href="{{ route('contact') }}"
                 class="text-sm font-medium hover:text-accent transition-colors {{ request()->routeIs('contact') ? 'text-accent font-semibold' : '' }}">Contact</a>
             <a href="{{ route('contact') }}"
                 class="inline-flex items-center justify-center px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors btn-shine {{ request()->routeIs('contact') ? 'text-accent font-semibold' : '' }}">
                 Book Now
             </a>
         </nav>

         <!-- Mobile Menu Button -->
         <button id="mobile-menu-btn" class="md:hidden p-2">
             <svg id="menu-icon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
             </svg>
             <svg id="close-icon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
             </svg>
         </button>
     </div>

     <!-- Mobile Menu -->
     <div id="mobile-menu" class="hidden md:hidden border-t animate-slide-in">
         <nav class="container mx-auto px-4 py-4 flex flex-col space-y-3">

             <!-- About -->
             <a href="{{ route('about') }}"
                 class="text-sm font-medium py-2 transition-colors {{ request()->routeIs('about') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                 About
             </a>

             <!-- Services Accordion -->
             @php
                 $servicesActive = request()->routeIs(
                     'one-way-taxi',
                     'outstation-taxi',
                     'airport-taxi',
                     'local-taxi',
                     'car-rental',
                 );
             @endphp

             <div class="mobile-dropdown">
                 <button
                     class="mobile-dropdown-btn w-full text-left text-sm font-medium py-2 flex items-center justify-between {{ $servicesActive ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                     <span>Services</span>
                     <svg class="h-4 w-4 transition-transform" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>
                 <div class="mobile-dropdown-content hidden pl-4 space-y-2 mt-2">
                     <a href="{{ route('one-way-taxi') }}"
                         class="block py-2 text-sm transition-colors {{ request()->routeIs('one-way-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                         One Way Taxi
                     </a>
                     <a href="{{ route('outstation-taxi') }}"
                         class="block py-2 text-sm transition-colors {{ request()->routeIs('outstation-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                         Outstation Taxi
                     </a>
                     <a href="{{ route('airport-taxi') }}"
                         class="block py-2 text-sm transition-colors {{ request()->routeIs('airport-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                         Airport Taxi
                     </a>
                     <a href="{{ route('local-taxi') }}"
                         class="block py-2 text-sm transition-colors {{ request()->routeIs('local-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                         Local Taxi
                     </a>
                     <a href="{{ route('car-rental') }}"
                         class="block py-2 text-sm transition-colors {{ request()->routeIs('car-rental') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                         Car Rental
                     </a>
                 </div>
             </div>

             <!-- Routes Accordion -->
             @php
                 $routesActive = request()->is('rann-of-kutch-to-*') || request()->is('*-to-rann-of-kutch*');
             @endphp

             <div class="mobile-dropdown">
                 <button
                     class="mobile-dropdown-btn w-full text-left text-sm font-medium py-2 flex items-center justify-between {{ $routesActive ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                     <span>Routes</span>
                     <svg class="h-4 w-4 transition-transform" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>
                 <div class="mobile-dropdown-content hidden pl-4 space-y-4 mt-2">
                     <!-- From Rann of Kutch -->
                     <div>
                         <h4 class="text-xs font-semibold text-primary mb-2">From Rann of Kutch</h4>
                         <div class="space-y-2 pl-2">
                             <a href="{{ url('rann-of-kutch-to-ahmedabad-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('rann-of-kutch-to-ahmedabad-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Rann → Ahmedabad
                             </a>
                             <a href="{{ url('rann-of-kutch-to-bhuj-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('rann-of-kutch-to-bhuj-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Rann → Bhuj
                             </a>
                             <a href="{{ url('rann-of-kutch-to-mandvi-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('rann-of-kutch-to-mandvi-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Rann → Mandvi
                             </a>
                             <a href="{{ url('rann-of-kutch-to-rajkot-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('rann-of-kutch-to-rajkot-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Rann → Rajkot
                             </a>
                             <a href="{{ url('rann-of-kutch-to-vadodara-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('rann-of-kutch-to-vadodara-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Rann → Vadodara
                             </a>
                         </div>
                     </div>

                     <!-- To Rann of Kutch -->
                     <div>
                         <h4 class="text-xs font-semibold text-accent mb-2">To Rann of Kutch</h4>
                         <div class="space-y-2 pl-2">
                             <a href="{{ url('ahmedabad-to-rann-of-kutch-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('ahmedabad-to-rann-of-kutch-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Ahmedabad → Rann
                             </a>
                             <a href="{{ url('bhuj-to-rann-of-kutch-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('bhuj-to-rann-of-kutch-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Bhuj → Rann
                             </a>
                             <a href="{{ url('rajkot-to-rann-of-kutch-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('rajkot-to-rann-of-kutch-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Rajkot → Rann
                             </a>
                             <a href="{{ url('vadodara-to-rann-of-kutch-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('vadodara-to-rann-of-kutch-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Vadodara → Rann
                             </a>
                             <a href="{{ url('mumbai-to-rann-of-kutch-taxi') }}"
                                 class="block py-1 text-sm transition-colors {{ request()->is('mumbai-to-rann-of-kutch-taxi') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                                 Mumbai → Rann
                             </a>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Contact -->
             <a href="{{ route('contact') }}"
                 class="text-sm font-medium py-2 transition-colors {{ request()->routeIs('contact') ? 'text-accent font-semibold' : 'hover:text-accent' }}">
                 Contact
             </a>

             <!-- Book Now -->
             <a href="{{ route('contact') }}"
                 class="inline-flex items-center justify-center px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors">
                 Book Now
             </a>
         </nav>
     </div>

 </header>
